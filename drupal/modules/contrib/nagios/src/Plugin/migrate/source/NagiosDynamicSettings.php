<?php

namespace Drupal\nagios\Plugin\migrate\source;

use Drupal\migrate\Row;
use Drupal\migrate_drupal\Plugin\migrate\source\DrupalSqlBase;

/**
 * Fetches Drupal 7 variables on which module hooks are active from the source
 * database.
 *
 * @see \Drupal\nagios\Form\SettingsForm::getModuleHookEnabled
 *
 * @MigrateSource(
 *   id = "nagios_dynamic_variables_source",
 *   source_module = "nagios",
 * )
 */
class NagiosDynamicSettings extends DrupalSqlBase {

  /**
   * {@inheritdoc}
   */
  public function query() {
    // Fetch all pattern variables whose value is not a serialized empty string.
    $var_names = array_map(function (string $module_name) {
      return 'nagios_enable_' . $module_name;
    }, array_keys(\Drupal::moduleHandler()->getModuleList()));

    return $this->select('variable', 'v')
      ->fields('v', ['name', 'value'])
      ->condition('name', $var_names, 'IN')
      ->condition('value', 's:0:"";', '<>');
  }

  /**
   * {@inheritdoc}
   */
  public function getIds() {
    $ids['name']['type'] = 'string';
    return $ids;
  }

  /**
   * {@inheritdoc}
   */
  public function fields() {
    return [
      'name' => "The name of the variable.",
      'value' => "The value of the variable.",
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function prepareRow(Row $row) {
    $var_name = $row->getSourceProperty('name');
    $module_name = str_replace('nagios_enable_', '', $var_name);
    $value = unserialize($row->getSourceProperty('value'), ['allowed_classes' => FALSE]);
    $row->setDestinationProperty('nagios/enable/' . $module_name, $value);
  }

}
