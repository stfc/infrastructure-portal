<?php

namespace Drupal\nagios\Commands;

use Consolidation\OutputFormatters\StructuredData\RowsOfFields;
use Drupal\nagios\Controller\StatuspageController;
use Drush\Commands\DrushCommands;
use Symfony\Component\DependencyInjection\Exception\ServiceNotFoundException;

/**
 * Drush commandfile for Nagios
 */
class NagiosCommands extends DrushCommands {

  /**
   * Allows to query Drupal's health. Useful for NRPE.
   *
   * @param string $check
   *   Optionally specify which check to run, e.g. cron
   *
   * @command nagios
   * @return int
   *   Defaults:
   *   NAGIOS_STATUS_OK: 0
   *   NAGIOS_STATUS_WARNING: 1
   *   NAGIOS_STATUS_CRITICAL: 2
   *   NAGIOS_STATUS_UNKNOWN: 3
   */
  public function nagios($check = '') {
    if ($check) {
      $moduleHandler = \Drupal::moduleHandler();
      if (array_key_exists($check, nagios_functions())) {
        // A specific module has been requested.
        $func = 'nagios_check_' . $check;
        $result = $func();
        $nagios_data['nagios'][$result['key']] = $result['data'];
      }
      elseif ($moduleHandler->moduleExists($check)) {
        $result = $moduleHandler->invoke($check, 'nagios');
        $nagios_data[$check] = $result;
      }
      else {
        $logger = $this->logger();
        $logger->error($check . ' is not a valid nagios check.');
        $logger->error(dt('Run `drush nagios-list` for valid checks.'));

        return 1;
      }
    }
    else {
      $nagios_data = nagios_invoke_all('nagios');
    }

    list($output, $severity) = (new StatuspageController)->getStringFromNagiosData($nagios_data);
    echo trim($output) . "\n";
    return $severity;
  }

  /**
   * Prints valid checks for `drush nagios`.
   *
   * @command nagios-list
   * @table-style default
   * @field-labels
   *   check: Check
   *   description: Description
   *   module: Module
   * @default-fields check,description
   * @filter-output
   * @return \Consolidation\OutputFormatters\StructuredData\RowsOfFields
   */
  public function nagios_list() {
    $valid_checks = nagios_functions();
    $rows = [];
    foreach ($valid_checks as $check => $description) {
      $rows[$check] = [
        'check' => $check,
        'description' => $description,
        'module' => 'nagios',
      ];
    }

    $moduleHandler = \Drupal::moduleHandler();
    $module_names = $moduleHandler->getImplementations('nagios');
    foreach ($module_names as $name) {
      $info = $moduleHandler->invoke($name, 'nagios_info');
      $description = !empty($info['name']) && is_string($info['name']) ? $info['name'] : '';
      $rows[$name] = [
        'check' => $name,
        'description' => $description,
        'module' => $name,
      ];
    }
    ksort($rows);
    return new RowsOfFields($rows);
  }

  /**
   * Allows to query Drupal's update status. Useful for NRPE.
   *
   * It will respect the nagios.min_report_severity setting.
   *
   * @command nagios-updates
   * @return int
   *   Defaults:
   *   NAGIOS_STATUS_OK: 0
   *   NAGIOS_STATUS_WARNING: 1
   *   NAGIOS_STATUS_CRITICAL: 2
   *   NAGIOS_STATUS_UNKNOWN: 3
   */
  public function check_updates() {
    $logger = $this->logger;
    try {
      $update_data = nagios_check_requirements()['data'];
      $severity = $update_data['status'];
    } catch (ServiceNotFoundException $e) {
      $logger->error(dt('This Drush command is only available if Core’s update module is enabled.'));
      $logger->error(dt('Run `drush en update` to enable it.'));
      return NAGIOS_STATUS_UNKNOWN;
    }
    if ($severity == NAGIOS_STATUS_CRITICAL)
      $logger->error($update_data['text']);
    elseif ($severity == NAGIOS_STATUS_WARNING)
      $logger->warning($update_data['text']);
    else
      $logger->notice($update_data['text']);
    return $severity;
  }
}
