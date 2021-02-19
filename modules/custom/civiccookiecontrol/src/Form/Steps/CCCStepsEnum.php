<?php

namespace Drupal\civiccookiecontrol\Form\Steps;

abstract class CCCStepsEnum {

  const CCC_LICENSE_INFO = 1;
  const CCC_SETTINGS = 2;


  public static function toArray() {
    return [
      self::CCC_LICENSE_INFO => 'ccc_license_info',
      self::CCC_SETTINGS => 'ccc_settings'
    ];
  }

  public static function map($step) {
    $map = [
      self::CCC_LICENSE_INFO => 'civiccookiecontrol.CCCLicenseInfo',
      self::CCC_SETTINGS => 'civiccookiecontrol.CCCSettings',
    ];

    return isset($map[$step]) ? $map[$step] : FALSE;
  }

}

