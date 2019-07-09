<?php

namespace Drupal\group\Entity\Access;

use Drupal\group\Entity\GroupContentType;
use Drupal\Core\Entity\EntityAccessControlHandler;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Session\AccountInterface;

/**
 * Access controller for the Group entity.
 *
 * @see \Drupal\group\Entity\Group.
 */
class GroupContentAccessControlHandler extends EntityAccessControlHandler {

  /**
   * {@inheritdoc}
   */
  protected function checkAccess(EntityInterface $entity, $operation, AccountInterface $account) {
    /** @var \Drupal\group\Entity\GroupContentInterface $entity */
    return $entity->getContentPlugin()->checkAccess($entity, $operation, $account);
  }

  /**
   * {@inheritdoc}
   */
  protected function checkCreateAccess(AccountInterface $account, array $context, $entity_bundle = NULL) {
    $group_content_type = GroupContentType::load($entity_bundle);
    $content_type_plugin = $group_content_type->getContentPlugin();

    if (!empty($context['create_mode']) && $content_type_plugin->definesEntityAccess()) {
      return $content_type_plugin->createEntityAccess($context['group'], $account);
    }
    return $content_type_plugin->createAccess($context['group'], $account);
  }

}
