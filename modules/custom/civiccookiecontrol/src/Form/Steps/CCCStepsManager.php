<?php


namespace Drupal\civiccookiecontrol\Form\Steps;


class CCCStepsManager {

  protected $steps;
  public function __construct() {
  }

  /**
   * Add a step to the steps property.
   *
   * @param \Drupal\civiccookiecontrol\Form\Steps\CCCStepInterface $step
   *   Step of the form.
   */
  public function addStep(CCCStepInterface $step) {
    $this->steps[$step->getStep()] = $step;
  }

  /**
   * Fetches step from steps property, If it doesn't exist, create step object.
   *
   * @param int $step_id
   *   Step ID.
   *
   * @return \Drupal\civiccookiecontrol\Form\Steps\CCCStepInterface
   *   Return step object.
   */
  public function getStep($step_id) {
    if (isset($this->steps[$step_id])) {
      $step = $this->steps[$step_id];
    }
    else {
      $class = CCCStepsEnum::map($step_id);
      $step = \Drupal::service($class); // new $class();
      $step->setStepManager($this);
    }

    return $step;
  }

  /**
   * Get all steps.
   *
   * @return \Drupal\civiccookiecontrol\Form\Steps\CCCStepInterface
   *   Steps.
   */
  public function getAllSteps() {
    return $this->steps;
  }

}
