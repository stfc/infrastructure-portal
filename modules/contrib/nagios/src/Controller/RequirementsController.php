<?php

namespace Drupal\nagios\Controller;

use Drupal;
use Drupal\Core\Config\Config;
use Drupal\Core\StringTranslation\StringTranslationTrait;
use Drupal\update\UpdateFetcherInterface;

/**
 * Get the run-time requirements and status information.
 * module_invoke_all('requirements', 'runtime') returns an array that isn't
 * keyed by the module name, eg we might get a key 'ctools_css_cache'.
 * We have no way of knowing which module set this, and we can't guess based
 * on the name, as removing everything that begins with 'ctools_' might remove
 * data from other ctools sub-modules that we want to still monitor.
 *
 * The only safe way is to use module_invoke, calling each module in turn.
 */
class RequirementsController {
  use StringTranslationTrait;

  private $severity = REQUIREMENT_OK;

  private $config;

  private $reqs = [];

  public function __construct(Config $config) {
    $this->config = $config;
  }

  public function collectRequirements(array $enabled_modules, array $data, $project_data) {
    $module_data = [];

    /** @var \Drupal\Core\Extension\ModuleHandlerInterface $moduleHandler */
    $moduleHandler = Drupal::service('module_handler');

    foreach ($enabled_modules as $module_name) {

      $requirements_data = $moduleHandler->invoke($module_name, 'requirements', ['runtime']);
      if ($requirements_data && is_array($requirements_data)) {
        // Intercept the Update Status module to respect our Ignore behaviour.
        // Note, if $data is empty then there's no available update data and Update Status will handle that for us.
        if ($module_name == 'update' && !empty($data)) {
          // Don't want the 'update_contrib' section reported by 'update' module,
          // because that one contains *ALL* modules, even the ones ignored by
          // nagios module.
          unset($requirements_data['update_contrib']);
          // Now we need to loop through all modules again to reset 'update_contrib'.
          foreach ($enabled_modules as $inner_module_name) {
            // Double check we're not processing a core module.
            if (!array_key_exists($inner_module_name, $project_data['drupal']['includes']) && isset($data[$inner_module_name]['status']) && is_numeric($data[$inner_module_name]['status'])) {
              // Within this clause, only contrib modules are processed. Get
              // update status for the current one, and store data as it would be
              // left by update_requirements() function.
              $contrib_req = _update_requirement_check($data[$inner_module_name], 'contrib');
              $contrib_req['name'] = $inner_module_name;
              // If module up to date, set a severity of -1 for sorting purposes.
              if (!isset($contrib_req['severity'])) {
                $contrib_req['severity'] = -1;
              }
              // Build an array of required contrib updates.
              if ($contrib_req) {
                $module_data[] = $contrib_req;
              }
            }
          }

          // Sort our finished array by severity so we can set Nagios status accordingly.
          if (!empty($module_data)) {
            usort($module_data, '_nagios_updates_sort_by_severity');
            // Add the 'worst case' to requirements.
            $requirements_data['update_contrib'] = array_pop($module_data);
          }
        }
        $this->reqs += $requirements_data;
      }
    }
  }

  public function findMostSevereProblem(): array {
    $descriptions = [];
    $min_severity = $this->config->get('nagios.min_report_severity');
    foreach ($this->reqs as $key => $requirement) {
      if (isset($requirement['severity'])) {
        // Ignore update_core warning if update check is pending:
        if (($key == 'update_core' || $key == 'update_contrib') && $requirement['severity'] == REQUIREMENT_ERROR && $requirement['reason'] == UpdateFetcherInterface::FETCH_PENDING) {
          continue;
        }
        if ($requirement['severity'] >= $min_severity) {
          if ($requirement['severity'] > $this->severity) {
            $this->severity = $requirement['severity'];
          }
          $descriptions[] = $requirement['title'];
        }
      }
    }
    if (empty($descriptions)) {
      $desc = $this->t('No information.');
    }
    else {
      $desc = implode(', ', $descriptions);
    }
    return [$this->severity, $desc];
  }

}
