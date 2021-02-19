<?php


namespace Drupal\civiccookiecontrol\CCCConfig;


class CCCConfigFactory {

  public static function get_cccconfig($version){
    if ($version == 8){
      return new CCC8Config();
    }elseif ($version == 9){
      return new CCC9Config();
    }
  }

}
