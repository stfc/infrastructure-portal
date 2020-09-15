<?php

namespace Drupal\Tests\group\Unit;

use Drupal\Core\Access\AccessResult;
use Drupal\Core\Cache\Context\CacheContextsManager;
use Drupal\Core\Session\AccountInterface;
use Drupal\group\Entity\GroupContentInterface;
use Drupal\group\Entity\GroupInterface;
use Drupal\group\Plugin\GroupContentAccessControlHandler;
use Drupal\group\Plugin\GroupContentEnablerManagerInterface;
use Drupal\group\Plugin\GroupContentPermissionProviderInterface;
use Drupal\Tests\UnitTestCase;
use Prophecy\Argument;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Tests the default GroupContentEnabler access handler.
 *
 * @coversDefaultClass \Drupal\group\Plugin\GroupContentAccessControlHandler
 * @group group
 */
class GroupContentAccessControlHandlerTest extends UnitTestCase {

  /**
   * The container.
   *
   * @var \Symfony\Component\DependencyInjection\ContainerInterface|\Prophecy\Prophecy\ProphecyInterface
   */
  protected $container;

  /**
   * {@inheritdoc}
   */
  public function setUp() {
    parent::setUp();

    $cache_context_manager = $this->prophesize(CacheContextsManager::class);
    $cache_context_manager->assertValidTokens(Argument::any())->willReturn(TRUE);
    $this->container = $this->prophesize(ContainerInterface::class);
    $this->container->get('cache_contexts_manager')->willReturn($cache_context_manager->reveal());
    \Drupal::setContainer($this->container->reveal());
  }

  /**
   * Tests the exception thrown when there is no permission provider.
   */
  public function testCreateInstanceException() {
    $manager = $this->prophesize(GroupContentEnablerManagerInterface::class);
    $manager->hasHandler('foo', 'permission_provider')->willReturn(FALSE);
    $this->container->get('plugin.manager.group_content_enabler')->willReturn($manager->reveal());

    $this->expectException(\LogicException::class);
    $this->expectExceptionMessage('Cannot use an "access" handler without a "permission_provider" handler.');
    GroupContentAccessControlHandler::createInstance($this->container->reveal(), 'foo', []);
  }

  /**
   * Tests the relation operation access.
   *
   * @param \Closure $expected
   *   A closure returning the expected access result.
   * @param string $plugin_id
   *   The plugin ID.
   * @param array $definition
   *   The plugin definition.
   * @param bool $has_admin_permission
   *   Whether the account has the admin permission.
   * @param bool $has_permission
   *   Whether the account has the required permission.
   * @param bool $has_own_permission
   *   Whether the account has the required owner permission.
   * @param string|false $permission
   *   The operation permission.
   * @param string|false $own_permission
   *   The owner operation permission.
   * @param bool $is_owner
   *   Whether the account owns the relation.
   *
   * @covers ::relationAccess
   * @dataProvider relationAccessProvider
   */
  public function testRelationAccess(\Closure $expected, $plugin_id, array $definition, $has_admin_permission, $has_permission, $has_own_permission, $permission, $own_permission, $is_owner) {
    $operation = $this->randomMachineName();

    $permission_provider = $this->prophesize(GroupContentPermissionProviderInterface::class);
    $permission_provider->getAdminPermission()->willReturn($definition['admin_permission']);
    $permission_provider->getPermission($operation, 'relation', 'any')->willReturn($permission);
    $permission_provider->getPermission($operation, 'relation', 'own')->willReturn($own_permission);

    $manager = $this->prophesize(GroupContentEnablerManagerInterface::class);
    $manager->hasHandler($plugin_id, 'permission_provider')->willReturn(TRUE);
    $manager->getPermissionProvider($plugin_id)->willReturn($permission_provider->reveal());
    $this->container->get('plugin.manager.group_content_enabler')->willReturn($manager->reveal());

    $access_control_handler = GroupContentAccessControlHandler::createInstance($this->container->reveal(), $plugin_id, $definition);

    $account_id = rand(1, 100);
    $account = $this->prophesize(AccountInterface::class);
    $account->id()->willReturn($account_id);
    $account = $account->reveal();

    $group = $this->prophesize(GroupInterface::class);
    $group_content = $this->prophesize(GroupContentInterface::class);
    $group_content->getGroup()->willReturn($group->reveal());
    $group_content->getOwnerId()->willReturn($is_owner ? $account_id : $account_id + 1);
    $group_content->getCacheContexts()->willReturn([]);
    $group_content->getCachetags()->willReturn(['group_content:foo']);
    $group_content->getCacheMaxAge()->willReturn(9999);

    if ($definition['admin_permission']) {
      $group->hasPermission($definition['admin_permission'], $account)->willReturn($has_admin_permission);
    }
    else {
      $group->hasPermission($definition['admin_permission'], $account)->shouldNotBeCalled();
    }

    if ($permission) {
      $group->hasPermission($permission, $account)->willReturn($has_permission);
    }
    else {
      $group->hasPermission($permission, $account)->shouldNotBeCalled();
    }

    if ($own_permission) {
      $group->hasPermission($own_permission, $account)->willReturn($has_own_permission);
    }
    else {
      $group->hasPermission($own_permission, $account)->shouldNotBeCalled();
    }

    $result = $access_control_handler->relationAccess($group_content->reveal(), $operation, $account, TRUE);
    $this->assertEquals($expected(), $result);
  }

  /**
   * Data provider for testRelationAccess().
   *
   * @return array
   *   A list of testRelationAccess method arguments.
   */
  public function relationAccessProvider() {
    $cases = [];
    foreach ($this->getAccessControlHandlerScenarios() as $scenario) {
      foreach (['any some permission name', FALSE] as $any_permission) {
        foreach (['own some permission name', FALSE] as $own_permission) {
          foreach ([TRUE, FALSE] as $has_own_permission) {
            foreach ([TRUE, FALSE] as $is_owner) {
              $case = $scenario;

              // Default is neutral result if no permissions are defined.
              $case['expected'] = function() {
                return AccessResult::neutral();
              };

              $admin_permission = $case['definition']['admin_permission'];
              if ($admin_permission || $any_permission || $own_permission) {
                $has_admin = $admin_permission && $case['has_admin_permission'];
                $has_any = $any_permission && $case['has_permission'];
                $has_own = $is_owner && $own_permission && $has_own_permission;

                $permissions_were_checked = $admin_permission || $any_permission || ($is_owner && $own_permission);
                $case['expected'] = function() use ($has_admin, $has_any, $has_own, $permissions_were_checked, $own_permission) {
                  $result = AccessResult::allowedIf($has_admin || $has_any || $has_own);

                  // Only add the permissions context if they were checked.
                  if ($permissions_were_checked) {
                    $result->addCacheContexts(['user.group_permissions']);
                  }

                  // Add the user context and the relation's cache metadata if
                  // we're dealing with an owner permission.
                  if ($own_permission) {
                    $result->addCacheContexts(['user']);

                    // Tags and max-age as defined in ::testRelationAccess().
                    $result->addCacheTags(['group_content:foo']);
                    $result->mergeCacheMaxAge(9999);
                  }
                  return $result;
                };
              }

              $case['has_own_permission'] = $has_own_permission;
              $case['any_permission'] = $any_permission;
              $case['own_permission'] = $own_permission;
              $case['is_owner'] = $is_owner;
              $cases[] = $case;
            }
          }
        }
      }
    }
    return $cases;
  }

  /**
   * Tests the relation create access.
   *
   * @param \Closure $expected
   *   A closure returning the expected access result.
   * @param string $plugin_id
   *   The plugin ID.
   * @param array $definition
   *   The plugin definition.
   * @param bool $has_admin_permission
   *   Whether the account has the admin permission.
   * @param bool $has_permission
   *   Whether the account has the required permission.
   * @param string|false $permission
   *   The relation create permission.
   *
   * @covers ::relationCreateAccess
   * @dataProvider relationCreateAccessProvider
   */
  public function testRelationCreateAccess(\Closure $expected, $plugin_id, array $definition, $has_admin_permission, $has_permission, $permission) {
    $permission_provider = $this->prophesize(GroupContentPermissionProviderInterface::class);
    $permission_provider->getAdminPermission()->willReturn($definition['admin_permission']);
    $permission_provider->getRelationCreatePermission()->willReturn($permission);

    $manager = $this->prophesize(GroupContentEnablerManagerInterface::class);
    $manager->hasHandler($plugin_id, 'permission_provider')->willReturn(TRUE);
    $manager->getPermissionProvider($plugin_id)->willReturn($permission_provider->reveal());
    $this->container->get('plugin.manager.group_content_enabler')->willReturn($manager->reveal());

    $access_control_handler = GroupContentAccessControlHandler::createInstance($this->container->reveal(), $plugin_id, $definition);

    $group = $this->prophesize(GroupInterface::class);
    $account = $this->prophesize(AccountInterface::class)->reveal();

    if ($definition['admin_permission']) {
      $group->hasPermission($definition['admin_permission'], $account)->willReturn($has_admin_permission);
    }
    else {
      $group->hasPermission($definition['admin_permission'], $account)->shouldNotBeCalled();
    }

    if ($permission) {
      $group->hasPermission($permission, $account)->willReturn($has_permission);
    }
    else {
      $group->hasPermission($permission, $account)->shouldNotBeCalled();
    }

    $result = $access_control_handler->relationCreateAccess($group->reveal(), $account, TRUE);
    $this->assertEquals($expected(), $result);
  }

  /**
   * Data provider for testRelationCreateAccess.
   *
   * @return array
   *   A list of testRelationCreateAccess method arguments.
   */
  public function relationCreateAccessProvider() {
    $cases = [];
    foreach ($this->getAccessControlHandlerScenarios() as $scenario) {
      foreach (['some permission name', FALSE] as $permission) {
        $case = $scenario;

        // Default is neutral result if no permissions are defined or entity
        // access control is turned off for the plugin.
        $case['expected'] = function() {
          return AccessResult::neutral();
        };

        $permission_exists = $case['definition']['admin_permission'] || $permission;
        if ($permission_exists) {
          $has_admin = $case['definition']['admin_permission'] && $case['has_admin_permission'];
          $has_regular = $permission && $case['has_permission'];
          $case['expected'] = function() use ($has_admin, $has_regular) {
            return AccessResult::allowedIf($has_admin || $has_regular)->addCacheContexts(['user.group_permissions']);
          };
        }

        $case['permission'] = $permission;
        $cases[] = $case;
      }
    }
    return $cases;
  }

  /**
   * Tests the entity create access.
   *
   * @param \Closure $expected
   *   A closure returning the expected access result.
   * @param string $plugin_id
   *   The plugin ID.
   * @param array $definition
   *   The plugin definition.
   * @param bool $has_admin_permission
   *   Whether the account has the admin permission.
   * @param bool $has_permission
   *   Whether the account has the required permission.
   * @param string|false $permission
   *   The entity create permission.
   *
   * @covers ::entityCreateAccess
   * @dataProvider entityCreateAccessProvider
   */
  public function testEntityCreateAccess(\Closure $expected, $plugin_id, array $definition, $has_admin_permission, $has_permission, $permission) {
    $permission_provider = $this->prophesize(GroupContentPermissionProviderInterface::class);
    $permission_provider->getAdminPermission()->willReturn($definition['admin_permission']);
    $permission_provider->getEntityCreatePermission()->willReturn($permission);

    $manager = $this->prophesize(GroupContentEnablerManagerInterface::class);
    $manager->hasHandler($plugin_id, 'permission_provider')->willReturn(TRUE);
    $manager->getPermissionProvider($plugin_id)->willReturn($permission_provider->reveal());
    $this->container->get('plugin.manager.group_content_enabler')->willReturn($manager->reveal());

    $access_control_handler = GroupContentAccessControlHandler::createInstance($this->container->reveal(), $plugin_id, $definition);

    $group = $this->prophesize(GroupInterface::class);
    $account = $this->prophesize(AccountInterface::class)->reveal();

    if ($definition['admin_permission']) {
      $group->hasPermission($definition['admin_permission'], $account)->willReturn($has_admin_permission);
    }
    else {
      $group->hasPermission($definition['admin_permission'], $account)->shouldNotBeCalled();
    }

    if ($permission) {
      $group->hasPermission($permission, $account)->willReturn($has_permission);
    }
    else {
      $group->hasPermission($permission, $account)->shouldNotBeCalled();
    }

    $result = $access_control_handler->entityCreateAccess($group->reveal(), $account, TRUE);
    $this->assertEquals($expected(), $result);
  }

  /**
   * Data provider for entityCreateAccessProvider.
   *
   * @return array
   *   A list of entityCreateAccessProvider method arguments.
   */
  public function entityCreateAccessProvider() {
    $cases = [];
    foreach ($this->getAccessControlHandlerScenarios() as $scenario) {
      foreach ([TRUE, FALSE] as $entity_access) {
        foreach (['some permission name', FALSE] as $permission) {
          $case = $scenario;

          // Default is neutral result if no permissions are defined or entity
          // access control is turned off for the plugin.
          $case['expected'] = function() {
            return AccessResult::neutral();
          };

          $permission_exists = $case['definition']['admin_permission'] || $permission;
          if ($permission_exists && $entity_access) {
            $has_admin = $case['definition']['admin_permission'] && $case['has_admin_permission'];
            $has_regular = $permission && $case['has_permission'];
            $case['expected'] = function() use ($has_admin, $has_regular) {
              return AccessResult::allowedIf($has_admin || $has_regular)->addCacheContexts(['user.group_permissions']);
            };
          }

          $case['definition']['entity_access'] = $entity_access;
          $case['permission'] = $permission;
          $cases[] = $case;
        }
      }
    }
    return $cases;
  }

  /**
   * All possible scenarios for an access control handler.
   *
   * @return array
   *   A set of test cases to be used in data providers.
   */
  protected function getAccessControlHandlerScenarios() {
    $scenarios = [];

    foreach (['administer foo', FALSE] as $admin_permission) {
      foreach ([TRUE, FALSE] as $has_admin_permission) {
        foreach ([TRUE, FALSE] as $has_permission) {
          $scenarios[] = [
            'expected' => NULL,
            // We use a derivative ID to prove these work.
            'plugin_id' => 'foo:baz',
            'definition' => [
              'id' => 'foo',
              'label' => 'Foo',
              'entity_type_id' => 'bar',
              'admin_permission' => $admin_permission,
            ],
            'has_admin_permission' => $has_admin_permission,
            'has_permission' => $has_permission,
          ];
        }
      }
    }

    return $scenarios;
  }

}
