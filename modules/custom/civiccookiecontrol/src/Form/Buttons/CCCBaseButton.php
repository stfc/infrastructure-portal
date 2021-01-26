<?php

namespace Drupal\civiccookiecontrol\Form\Buttons;

/**
 * Class BaseButton.
 *
 * @package Drupal\ms_ajax_form_example\Button
 */
abstract class CCCBaseButton implements CCCButtonInterface {

  /**
   * {@inheritdoc}
   */
  public function ajaxify() {
    return TRUE;
  }

  /**
   * {@inheritdoc}
   */
  public function getSubmitHandler() {
    return FALSE;
  }

}
