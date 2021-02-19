<?php


namespace Drupal\civiccookiecontrol\Access;

use Drupal\civiccookiecontrol\Form\CCCFormHelper;
use Drupal\Core\Access\AccessResult;
use Drupal\Core\Session\AccountInterface;

class CookieControlAccess {

  public function checkAccess(AccountInterface $account) {
    return AccessResult::allowedIf($account->hasPermission('administer civiccookiecontrol') && $this->checkApiKey());
  }

  public function checkIAB1Access(AccountInterface $account){
    return AccessResult::allowedIf($account->hasPermission('administer civiccookiecontrol') && $this->checkApiKey() && (\Drupal::config('civiccookiecontrol.settings')->get('civiccookiecontrol_api_key_version') == 8) );
  }
  public function checkIAB2Access(AccountInterface $account){
    return AccessResult::allowedIf($account->hasPermission('administer civiccookiecontrol') && $this->checkApiKey() && (\Drupal::config('civiccookiecontrol.settings')->get('civiccookiecontrol_api_key_version') == 9 ) );
  }

  public function checkIAB2EnabledAccess(AccountInterface $account) {
    $access = FALSE;

    if (\Drupal::config('civiccookiecontrol.settings')
        ->get('civiccookiecontrol_api_key_version') == 8) {
      return $this->checkIAB1Access($account);
    }
    elseif (\Drupal::config('civiccookiecontrol.settings')
        ->get('civiccookiecontrol_api_key_version') == 9) {
      return AccessResult::allowedIf(
        $account->hasPermission('administer civiccookiecontrol') &&
        $this->checkApiKey() &&
        (\Drupal::config('iab2.settings')->get('iabCMP') == FALSE)
      );
    }
  }


    public static function checkApiKey(){
        if (CCCFormHelper::validateApiKey(\Drupal::config('civiccookiecontrol.settings')->get('civiccookiecontrol_api_key'), \Drupal::config('civiccookiecontrol.settings')->get('civiccookiecontrol_product')) ==
            \Drupal::config('civiccookiecontrol.settings')->get('civiccookiecontrol_product') ) {
            return true;
        }else{
            return false;
        }

    }
}
