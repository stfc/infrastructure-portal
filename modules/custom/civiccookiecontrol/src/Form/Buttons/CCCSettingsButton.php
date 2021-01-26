<?php


namespace Drupal\civiccookiecontrol\Form\Buttons;


use Drupal\civiccookiecontrol\Form\Steps\CCCStepsEnum;

class CCCSettingsButton extends CCCBaseButton {

  public function getKey() {
    return 'ccc_settings';
  }

  public function build() {
    return [
      '#type' => 'submit',
      '#value' => '<< ' . t('License Info'),
      '#goto_step' => CCCStepsEnum::CCC_LICENSE_INFO,
      '#skip_validation' => TRUE,
    ];

  }


}
