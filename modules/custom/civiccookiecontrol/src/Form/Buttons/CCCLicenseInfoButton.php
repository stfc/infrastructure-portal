<?php


namespace Drupal\civiccookiecontrol\Form\Buttons;


use Drupal\civiccookiecontrol\Form\CCCFormHelper;
use Drupal\civiccookiecontrol\Form\Steps\CCCStepsEnum;
use Drupal\Core\Ajax\AjaxResponse;
use Drupal\Core\Ajax\HtmlCommand;
use Drupal\Core\Ajax\InvokeCommand;
use Drupal\Core\Form\FormStateInterface;

class CCCLicenseInfoButton extends CCCBaseButton {

  private $ajax;

  /**
   * CCCLicenseInfoButton constructor.
   *
   * @param $ajax
   */
  public function __construct($ajax) {
    $this->ajax = $ajax;
  }


  public function getKey() {
    return 'ccc_license_info';
  }

  public function build() {
    return [
      '#type' => 'submit',
      '#value' => t('Customize Cookie Control') . ' >>',
      '#goto_step' => CCCStepsEnum::CCC_SETTINGS,
      '#submit_handler' => 'submitValues',
    ];
  }

  public function ajaxify() {
    return $this->ajax;
  }

}
