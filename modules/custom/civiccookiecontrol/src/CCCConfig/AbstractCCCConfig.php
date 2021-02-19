<?php


namespace Drupal\civiccookiecontrol\CCCConfig;

use Drupal\Core\Link;
use Drupal\Component\Serialization\Json;

abstract class AbstractCCCConfig {
  public $config;
  public $cccConfig;
  public $iabConfig;

  /**
   * AbstractCCCConfig constructor.
   */
  public function __construct() {
    $this->cccConfig = \Drupal::config('civiccookiecontrol.settings');
  }

  /**
   * Function to construct cookie configuration object.
   */
  function _load_cookie_config()
  {
      $this->config['apiKey'] = $this->cccConfig
        ->get('civiccookiecontrol_api_key');
      $this->config['product'] = $this->cccConfig
        ->get('civiccookiecontrol_product');
      $this->config['logConsent'] = $this->cccConfig
        ->get('civiccookiecontrol_log_consent') ? TRUE : FALSE;
      $this->config['consentCookieExpiry'] = $this->cccConfig->get('civiccookiecontrol_consent_cookie_expiry');
      $this->config['encodeCookie'] = $this->cccConfig
        ->get('civiccookiecontrol_encode_cookie') ? TRUE : FALSE;
      $this->config['subDomains'] = $this->cccConfig
        ->get('civiccookiecontrol_sub_domains') ? TRUE : FALSE;
      $this->config['notifyOnce'] = $this->cccConfig
        ->get('civiccookiecontrol_notify_once') ? TRUE : FALSE;
      $this->config['rejectButton'] = $this->cccConfig
        ->get('civiccookiecontrol_reject_button') ? TRUE : FALSE;
      $this->config['toggleType'] = $this->cccConfig
        ->get('civiccookiecontrol_toggle_type');
      $this->config['closeStyle'] = $this->cccConfig
        ->get('civiccookiecontrol_close_style');
      $this->config['settingsStyle'] = $this->cccConfig
        ->get('civiccookiecontrol_settings_style');
      $this->config['initialState'] = $this->cccConfig
        ->get('civiccookiecontrol_initial_state');
      $this->config['layout'] = $this->cccConfig
        ->get('civiccookiecontrol_layout');
      $this->config['position'] = $this->cccConfig
        ->get('civiccookiecontrol_widget_position');
      $this->config['theme'] = $this->cccConfig
        ->get('civiccookiecontrol_widget_theme');
      if (!empty($this->cccConfig
        ->get('civiccookiecontrol_onload'))) {
        $this->config['onLoad'] = "function(){" . $this->cccConfig
            ->get('civiccookiecontrol_onload') . "}";
      }



      $this->config['necessaryCookies'] = $this->_load_necessary_cookie_list();
      $this->config['optionalCookies'] = $this->_load_cookie_category_list();
      $this->config['excludedCountries'] = $this->_load_excluded_country_list();

      $this->config['debug'] = $this->cccConfig
        ->get('civiccookiecontrol_debug') ? TRUE : FALSE;

  }

  public function _load_statement_obj(){
    $type='statement';
    if ($this->config['mode'] == 'CCPA'){
      $type='ccpaConfig';
    }
    $this->config[$type] = [
      'description' => $this->cccConfig
        ->get('civiccookiecontrol_stmt_descr'),
      'name' => $this->cccConfig
        ->get('civiccookiecontrol_stmt_name'),
      'updated' => !empty($this->cccConfig
        ->get('civiccookiecontrol_stmt_date')) ? \Drupal::service('date.formatter')->format(strtotime($this->cccConfig
        ->get('civiccookiecontrol_stmt_date')), 'custom', 'd/m/Y') : "",
    ];
    if ($nid = $this->cccConfig->get('civiccookiecontrol_privacynode')) {
      $privacyNodeUrl = Link::createFromRoute(t("Privacy Policy"), 'entity.node.canonical', ['node' => $nid]);
      global $base_url;
      $this->config[$type]['url'] = $base_url . $privacyNodeUrl->getUrl()
          ->toString();
    }

    $this->config[$type] = array_filter($this->config[$type],'strlen');

  }

  public function _load_accessibility_obj(){
    $this->config['accessibility'] = [
      'accessKey' => $this->cccConfig
        ->get('civiccookiecontrol_access_key'),
      'highlightFocus' => $this->cccConfig
        ->get('civiccookiecontrol_highlight_focus'),
    ];
    $this->config['accessibility'] = array_filter($this->config['accessibility'],'strlen');
  }


  public function _load_text_obj(){
    $this->config['text'] = [
      'title' => $this->cccConfig
        ->get('civiccookiecontrol_title_text'),
      'intro' => $this->cccConfig
        ->get('civiccookiecontrol_intro_text'),
      'acceptRecommended' => $this->cccConfig
        ->get('civiccookiecontrol_accept_recommended'),
      'acceptSettings' => $this->cccConfig
        ->get('civiccookiecontrol_accept_settings'),
      'rejectSettings' => $this->cccConfig
        ->get('civiccookiecontrol_reject_settings'),
      'necessaryTitle' => $this->cccConfig
        ->get('civiccookiecontrol_necessary_title_text'),
      'necessaryDescription' => $this->cccConfig
        ->get('civiccookiecontrol_necessary_desc_text'),
      'thirdPartyTitle' => $this->cccConfig
        ->get('civiccookiecontrol_third_party_title_text'),
      'thirdPartyDescription' => $this->cccConfig
        ->get('civiccookiecontrol_third_party_desc_text'),
      'on' => $this->cccConfig
        ->get('civiccookiecontrol_on_text'),
      'off' => $this->cccConfig
        ->get('civiccookiecontrol_off_text'),
      'notifyTitle' => $this->cccConfig
        ->get('civiccookiecontrol_notify_title_text'),
      'notifyDescription' => $this->cccConfig
        ->get('civiccookiecontrol_notify_desc_text'),
      'accept' => $this->cccConfig
        ->get('civiccookiecontrol_accept_text'),
      'reject' => $this->cccConfig
        ->get('civiccookiecontrol_reject_text'),
      'settings' => $this->cccConfig
        ->get('civiccookiecontrol_setting_text'),
      'closeLabel' => $this->cccConfig
        ->get('civiccookiecontrol_close_label'),
    ];
    $this->config['text'] = array_filter($this->config['text'],'strlen');
  }


  public function _load_branding_obj(){
    $this->config['branding'] = [
      'fontFamily' => $this->cccConfig
        ->get('civiccookiecontrol_font_family'),
      'fontSizeTitle' => $this->cccConfig
          ->get('civiccookiecontrol_font_size_title') . 'em',
      'fontSizeHeaders' => $this->cccConfig
        ->get('civiccookiecontrol_font_size_headers'),
      'fontSize' => $this->cccConfig
          ->get('civiccookiecontrol_font_size') . 'em',
      'fontColor' => $this->cccConfig
        ->get('civiccookiecontrol_font_color'),
      'backgroundColor' => $this->cccConfig
        ->get('civiccookiecontrol_background_color'),
      'acceptText' => $this->cccConfig
        ->get('civiccookiecontrol_accept_text_color'),
      'acceptBackground' => $this->cccConfig
        ->get('civiccookiecontrol_accept_background_color'),
      'toggleText' => $this->cccConfig
        ->get('civiccookiecontrol_toggle_text'),
      'toggleColor' => $this->cccConfig
        ->get('civiccookiecontrol_toggle_color'),
      'toggleBackground' => $this->cccConfig
        ->get('civiccookiecontrol_toggle_background'),
      'alertText' => $this->cccConfig
        ->get('civiccookiecontrol_alert_text'),
      'alertBackground' => $this->cccConfig
        ->get('civiccookiecontrol_alert_background'),
      'buttonIcon' => $this->cccConfig
        ->get('civiccookiecontrol_button_icon'),
      'buttonIconWidth' => $this->cccConfig
          ->get('civiccookiecontrol_button_icon_width') . 'px',
      'buttonIconHeight' => $this->cccConfig
          ->get('civiccookiecontrol_button_icon_height') . 'px',
      'removeIcon' => $this->cccConfig
        ->get('civiccookiecontrol_remove_icon') ? TRUE : FALSE,
      'removeAbout' => $this->cccConfig
        ->get('civiccookiecontrol_remove_about_text') ? TRUE : FALSE,
    ];
    foreach ($this->config['branding'] as $key => $item) {
      if (empty($this->config['branding'][$key])) {
        unset($this->config['branding'][$key]);
      }
    }
  }

  /**
   * Function to load necessary cookies list.
   */
  public function _load_necessary_cookie_list()
  {
    $necessaryCookies = \Drupal::entityTypeManager()
      ->getStorage('necessarycookie')
      ->loadMultiple();
    $necessaryCookiesRetArray = [];

    foreach ($necessaryCookies as $necCookie) {
      $necessaryCookiesRetArray[] = $necCookie->getNecessaryCookieName();
    }

    return $necessaryCookiesRetArray;
  }

  /**
   * Function to load cookie category entities.
   */
  public function _load_cookie_category_list()
  {
    $cookieCategories = \Drupal::entityTypeManager()
      ->getStorage('cookiecategory')
      ->loadMultiple();
    $cookieCategoriesRetArray = [];
    foreach ($cookieCategories as $cookieCat) {
      $cookieCategory = [];
      $cookieCategory['name'] = $cookieCat->getCookieName();
      $cookieCategory['label'] = $cookieCat->getCookieLabel();
      $cookieCategory['description'] = $cookieCat->getCookieDescription();
      $cookieCategory['cookies'] = explode(',', $cookieCat->getCookies());
      $cookieCategory['onAccept'] = "function(){" . $cookieCat->getOnAcceptCallBack() . "}";
      $cookieCategory['onRevoke'] = "function(){" . $cookieCat->getOnRevokeCallBack() . "}";
      $cookieCategory['recommendedState'] = $cookieCat->getRecommendedState();
      $cookieCategory['lawfulBasis'] = $cookieCat->getlawfulBasis();

      if ((int)$cookieCat->getThirdPartyCookiesCount() > 0) {
        $cookieCategory['thirdPartyCookies'] = Json::decode('[' . str_replace(';', ',', stripslashes($cookieCat->getThirdPartyCookies())) . ']');
      }

      $cookieCategoriesRetArray[] = $cookieCategory;
    }
    return $cookieCategoriesRetArray;
  }


  /**
   * Function to load excluded countries list.
   */
  public function _load_excluded_country_list()
  {
    $excludedCountries = \Drupal::entityTypeManager()
      ->getStorage('excludedcountry')
      ->loadMultiple();
    $excludedCountryRetArray = [];

    foreach ($excludedCountries as $exclCountry) {
      $excludedCountryRetArray[] = $exclCountry->getExcludedCountryIsoCode();
    }

    return $excludedCountryRetArray;
  }

  public function get_cccconfig_json() {
    $cid = 'civiccookiecontrol_config';
    $response = &drupal_static(__FUNCTION__);

    if ($cache = \Drupal::cache()->get($cid)) {
      $response = $cache->data;
    }
    else {
      $response = (json_encode(array_filter($this->config), JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES )); //Json::encode(array_filter($this->config));
      \Drupal::cache()->set($cid, $response);
    }
    return $response;
  }

}
