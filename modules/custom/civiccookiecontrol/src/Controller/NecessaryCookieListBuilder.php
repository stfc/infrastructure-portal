<?php

namespace Drupal\civiccookiecontrol\Controller;

use Drupal\Component\Serialization\Json;
use Drupal\Core\Entity\EntityStorageInterface;
use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\Core\Config\Entity\ConfigEntityListBuilder;
use Drupal\Core\Entity\EntityInterface;

/**
 * Provides a listing of Cookie Categories.
 */
class NecessaryCookieListBuilder extends ConfigEntityListBuilder {

  /**
   * Constructs a new EntityListBuilder object.
   *
   * @param \Drupal\Core\Entity\EntityTypeInterface $entity_type
   *   The entity type definition.
   * @param \Drupal\Core\Entity\EntityStorageInterface $storage
   *   The entity storage class.
   */
  public function __construct(EntityTypeInterface $entity_type, EntityStorageInterface $storage) {
    _check_cookie_categories();
    parent::__construct($entity_type, $storage);
  }

  /**
   * {@inheritdoc}
   */
  public function buildHeader() {
    $header['id'] = $this->t('Machine name');
    $header['necessaryCookieName'] = $this->t('Necessary Cookie Name');

    return $header + parent::buildHeader();
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity) {
    $row['id'] = $entity->id();
    $row['necessaryCookieName'] = $entity->label();

    return $row + parent::buildRow($entity);
  }

  /**
   * {@inheritdoc}
   */
  public function getDefaultOperations(EntityInterface $entity) {
    $operations = parent::getDefaultOperations($entity);
    $operations['edit']['attributes'] = [
      'class' => ['use-ajax'],
      'data-accepts' => 'application/vnd.drupal-modal',
      'data-dialog-type' => ['dialog'],
      'data-dialog-options' => [Json::encode(['width' => 700])],
    ];
    $operations['delete']['attributes'] = [
      'class' => ['use-ajax'],
      'data-accepts' => 'application/vnd.drupal-modal',
      'data-dialog-type' => ['dialog'],
      'data-dialog-options' => [Json::encode(['width' => 700])],
    ];
    return $operations;
  }

}
