<?php

namespace Drupal\civiccookiecontrol\Form\Steps;

use Drupal\Core\DependencyInjection\ContainerInjectionInterface;

/**
 * Interface StepInterface.
 *
 * @package Drupal\civiccookiecontrol\Form\Steps
 */
interface CCCStepInterface extends ContainerInjectionInterface {

  /**
   * Gets the step.
   *
   * @returns step;
   */
  public function getStep();

  /**
   * Returns a renderable form array that defines a step.
   */
  public function buildStepFormElements();

  /**
   * Returns buttons on step.
   */
  public function getButtons();

  /**
   * Indicates if step is last step.
   */
  public function isLastStep();

  /**
   * All fields name.
   *
   * @returns array of all field names.
   */
  public function getFieldNames();

  /**
   * All field validators.
   *
   * @returns array of fields with their validation requirements.
   */
  public function getFieldsValidators();

  /**
   * Sets filled out values of step.
   */
  public function setValues($values);

  /**
   * Gets filled out values of step.
   */
  public function getValues();

}
