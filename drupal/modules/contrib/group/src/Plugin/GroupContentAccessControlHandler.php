<?php

namespace Drupal\group\Plugin;

use Drupal\Core\Access\AccessResult;
use Drupal\Core\Session\AccountInterface;
use Drupal\group\Access\GroupAccessResult;
use Drupal\group\Entity\GroupContentInterface;
use Drupal\group\Entity\GroupInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Provides access control for GroupContent entities and grouped entities.
 */
class GroupContentAccessControlHandler extends GroupContentHandlerBase implements GroupContentAccessControlHandlerInterface {

  /**
   * The plugin's permission provider.
   *
   * @var \Drupal\group\Plugin\GroupContentPermissionProviderInterface
   */
  protected $permissionProvider;

  /**
   * {@inheritdoc}
   */
  public static function createInstance(ContainerInterface $container, $plugin_id, array $definition) {
    /** @var \Drupal\group\Plugin\GroupContentEnablerManagerInterface $manager */
    $manager = $container->get('plugin.manager.group_content_enabler');
    if (!$manager->hasHandler($plugin_id, 'permission_provider')) {
      throw new \LogicException('Cannot use an "access" handler without a "permission_provider" handler.');
    }

    /** @var static $instance */
    $instance = parent::createInstance($container, $plugin_id, $definition);
    $instance->permissionProvider = $manager->getPermissionProvider($plugin_id);
    return $instance;
  }

  /**
   * {@inheritdoc}
   */
  public function relationAccess(GroupContentInterface $group_content, $operation, AccountInterface $account, $return_as_object = FALSE) {
    $result = AccessResult::neutral();

    // Check if the account is the owner and an owner permission is supported.
    $is_owner = $group_content->getOwnerId() === $account->id();
    $own_permission = $this->permissionProvider->getPermission($operation, 'relation', 'own');

    // Add in the admin permission and filter out the unsupported permissions.
    $permissions = [$this->permissionProvider->getAdminPermission()];
    $permissions[] = $this->permissionProvider->getPermission($operation, 'relation', 'any');
    if ($is_owner && $own_permission) {
      $permissions[] = $own_permission;
    }
    $permissions = array_filter($permissions);

    // If we still have permissions left, check for access.
    if (!empty($permissions)) {
      $result = GroupAccessResult::allowedIfHasGroupPermissions($group_content->getGroup(), $account, $permissions, 'OR');
    }

    // If there was an owner permission to check, the result needs to vary per
    // user. We also need to add the relation as a dependency because if its
    // owner changes, someone might suddenly gain or lose access.
    if ($own_permission) {
      $result->cachePerUser()->addCacheableDependency($group_content);
    }

    return $return_as_object ? $result : $result->isAllowed();
  }

  /**
   * {@inheritdoc}
   */
  public function relationCreateAccess(GroupInterface $group, AccountInterface $account, $return_as_object = FALSE) {
    $permission = $this->permissionProvider->getRelationCreatePermission();
    return $this->combinedPermissionCheck($group, $account, $permission, $return_as_object);
  }

  /**
   * {@inheritdoc}
   */
  public function entityCreateAccess(GroupInterface $group, AccountInterface $account, $return_as_object = FALSE) {
    // You cannot create target entities if the plugin does not support it.
    if (empty($this->definition['entity_access'])) {
      return AccessResult::neutral();
    }

    $permission = $this->permissionProvider->getEntityCreatePermission();
    return $this->combinedPermissionCheck($group, $account, $permission, $return_as_object);
  }

  /**
   * Checks the provided permission alongside the admin permission.
   *
   * Important: Only one permission needs to match.
   *
   * @param \Drupal\group\Entity\GroupInterface $group
   *   The group to check for access.
   * @param \Drupal\Core\Session\AccountInterface $account
   *   The user for which to check access.
   * @param string $permission
   *   The names of the permission to check for.
   * @param bool $return_as_object
   *   Whether to return the result as an object or boolean.
   *
   * @return bool|\Drupal\Core\Access\AccessResult
   *   The access result. Returns a boolean if $return_as_object is FALSE (this
   *   is the default) and otherwise an AccessResultInterface object.
   *   When a boolean is returned, the result of AccessInterface::isAllowed() is
   *   returned, i.e. TRUE means access is explicitly allowed, FALSE means
   *   access is either explicitly forbidden or "no opinion".
   */
  protected function combinedPermissionCheck(GroupInterface $group, AccountInterface $account, $permission, $return_as_object) {
    $result = AccessResult::neutral();

    // Add in the admin permission and filter out the unsupported permissions.
    $permissions = [$permission, $this->permissionProvider->getAdminPermission()];
    $permissions = array_filter($permissions);

    // If we still have permissions left, check for access.
    if (!empty($permissions)) {
      $result = GroupAccessResult::allowedIfHasGroupPermissions($group, $account, $permissions, 'OR');
    }

    return $return_as_object ? $result : $result->isAllowed();
  }

}
