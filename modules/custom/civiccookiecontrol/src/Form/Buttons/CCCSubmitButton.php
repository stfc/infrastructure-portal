<?php


namespace Drupal\civiccookiecontrol\Form\Buttons;


use Drupal\civiccookiecontrol\Form\Steps\CCCStepsEnum;
use Drupal\ms_ajax_form_example\Step\StepsEnum;

class CCCSubmitButton extends CCCBaseButton {

  public function getKey() {
    return 'ccc_save';
  }

  public function build() {
    return [
      '#type' => 'submit',
      '#value' => t('Save Cookie Control Settings'),
      '#goto_step' => CCCStepsEnum::CCC_SETTINGS,
      '#submit_handler' => 'submitValues',
    ];
  }

  public function ajaxify() {
    return FALSE;
  }

}
