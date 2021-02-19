<?php


namespace Drupal\civiccookiecontrol\CCCConfig;
use Drupal\Component\Serialization\Json;
use Drupal\Core\Language\LanguageManager;
use Drupal\Core\Link;

class CCC9Config extends AbstractCCCConfig {


  /**
   * CCC9Config constructor.
   */
  public function __construct() {
    parent::__construct();
    $this->iabConfig = \Drupal::config('iab2.settings');
    $this->_load_cookie_config();
  }

  public function _load_cookie_config() {
    parent::_load_cookie_config();
    $this->config['setInnerHTML'] = TRUE;
    $this->config['mode'] = $this->cccConfig
      ->get('civiccookiecontrol_mode');
    $this->config['acceptBehaviour'] = $this->cccConfig
      ->get('civiccookiecontrol_accept_behaviour');
    $this->config['closeOnGlobalChange'] = $this->cccConfig
      ->get('civiccookiecontrol_close_on_global_change');
    $this->config['notifyDismissButton '] = $this->cccConfig
      ->get('civiccookiecontrol_notify_dismiss_button')? TRUE : FALSE;
    $this->config['sameSiteCookie'] = $this->cccConfig
      ->get('civiccookiecontrol_same_site_cookie')? TRUE : FALSE;
    if ($this->config['sameSiteCookie']) {
      $this->config['sameSiteValue'] = $this->cccConfig
        ->get('civiccookiecontrol_same_site_value');
    }else{
      $this->config['sameSiteValue'] = 'None';
    }

    if ($this->iabConfig) {
      $this->config['iabCMP'] = $this->iabConfig
        ->get('iabCMP') ? TRUE : FALSE;
      if ($this->config['iabCMP']) {
        $this->config['iabConfig']['language'] = $this->iabConfig
          ->get('iabLanguage');
        $this->config['iabConfig']['publisherCC'] = $this->iabConfig
          ->get('iabPublisherCC');
      }
    }
      $this->_load_statement_obj();
      $this->_load_accessibility_obj();
      $this->_load_text_obj();
      $this->_load_branding_obj();

    $this->config['locales'] = $this->_load_alt_languages_list();
  }

  public function _load_text_obj(){
    parent::_load_text_obj();
    $this->config['text']['cornerButton'] = $this->cccConfig->get('civiccookiecontrol_corner_button');
    $this->config['text']['landmark'] = $this->cccConfig->get('civiccookiecontrol_landmark');
    if ($this->iabConfig) {
      $this->config['text']['iabCMP'] = $this->_iab_text_obj();
    }

  }

  public function _load_accessibility_obj(){
    parent::_load_accessibility_obj();
    $this->config['accessibility']['overlay'] = $this->cccConfig->get('civiccookiecontrol_overlay');
  }

  public function _load_branding_obj() {
    parent::_load_branding_obj(); //
    $this->config['branding']['rejectText'] = $this->cccConfig
      ->get('civiccookiecontrol_rejext_text_color');
    $this->config['branding']['rejectBackground'] = $this->cccConfig
      ->get('civiccookiecontrol_reject_background_color');
  }

  public function _iab_text_obj(){
    $iabText=[];
    $iabText['panelTitle'] = $this->iabConfig->get('iabPanelTitle');
    $iabText['panelIntro1'] = $this->iabConfig->get('iabPanelIntro1');
    $iabText['panelIntro2'] = $this->iabConfig->get('iabPanelIntro2');
    $iabText['panelIntro3'] = $this->iabConfig->get('iabPanelIntro3');
    $iabText['aboutIab'] = $this->iabConfig->get('iabAboutIab');
    $iabText['iabName'] = $this->iabConfig->get('iabName');
    $iabText['iabLink'] = $this->iabConfig->get('iabLink');
    $iabText['acceptAll'] = $this->iabConfig->get('iabAcceptAll');
    $iabText['rejectAll'] = $this->iabConfig->get('iabRejectAll');
    $iabText['purposes'] = $this->iabConfig->get('iabPurposes');
    $iabText['specialPurposes'] = $this->iabConfig->get('iabSpecialPurposes');
    $iabText['features'] = $this->iabConfig->get('iabFeatures');
    $iabText['specialFeatures'] = $this->iabConfig->get('iabSpecialFeatures');
    $iabText['dataUse'] = $this->iabConfig->get('iabDataUse');
    $iabText['vendors'] = $this->iabConfig->get('iabVendors');
    $iabText['purposeLegitimateInterest'] = $this->iabConfig->get('iabPurposeLegitimateInterest');
    $iabText['vendorLegitimateInterest'] = $this->iabConfig->get('iabVendorLegitimateInterest');
    $iabText['objectPurposeLegitimateInterest'] = $this->iabConfig->get('iabObjectPurposeLegitimateInterest');
    $iabText['objectVendorLegitimateInterest'] = $this->iabConfig->get('iabObjectVendorLegitimateInterest');
    $iabText['relyConsent'] = $this->iabConfig->get('iabRelyConsent');
    $iabText['relyLegitimateInterest'] = $this->iabConfig->get('iabRelyLegitimateInterest');
    $iabText['savePreferences'] = $this->iabConfig->get('iabSavePreferences');


    return $iabText;
  }


  /**
   * Function to load alternative languages list.
   */
  function _load_alt_languages_list()
  {


    $altLanguages = \Drupal::entityTypeManager()
      ->getStorage('altlanguage')
      ->loadMultiple();
    $locales = [];

    foreach ($altLanguages as $altLang) {

      $locale['locale'] = $altLang->getAltLanguageIsoCode();
      $locale['mode'] = $altLang->getAltLanguageMode();
      $locale['location'] = $altLang->getAltLanguageLocation();

      $locale['text']['closeLabel'] = $altLang->getAltLanguageCloseLabel();
      $locale['text']['accessibilityAlert'] = $altLang->getAltLanguageAccessibilityAlert();
      $locale['optionalCookies'] = $altLang->getAltLanguageOptionalCookies();
      $locale['text']['title'] = $altLang->getAltLanguageTitle();
      $locale['text']['intro'] = $altLang->getAltLanguageIntro();
      $locale['text']['acceptRecommended'] = $altLang->getAltLanguageAcceptRecommended();
      $locale['text']['acceptSettings'] = $altLang->getAltLanguageAcceptSettings();
      $locale['text']['rejectSettings'] = $altLang->getAltLanguageRejectSettings();
      $locale['text']['necessaryTitle'] = $altLang->getAltLanguageNecessaryTitle();
      $locale['text']['necessaryDescription'] = $altLang->getAltLanguageNecessaryDescription();
      $locale['text']['thirdPartyTitle'] = $altLang->getAltLanguageThirdPartyTitle();
      $locale['text']['thirdPartyDescription'] = $altLang->getAltLanguageThirdPartyDescription();
      $locale['text']['on'] = $altLang->getAltLanguageOn();
      $locale['text']['off'] = $altLang->getAltLanguageOff();
      $locale['text']['notifyTitle'] = $altLang->getAltLanguageNotifyTitle();
      $locale['text']['notifyDescription'] = $altLang->getAltLanguageNotifyDescription();
      $locale['text']['accept'] = $altLang->getAltLanguageAccept();
      $locale['text']['reject'] = $altLang->getAltLanguageReject();
      $locale['text']['settings'] = $altLang->getAltLanguageSettings();


      $type = 'statement';
      if ($locale['mode'] == 'CCPA') {
        $type = 'ccpaConfig';
      }

      $locale[$type]['description'] = $altLang->getAltLanguageStmtDescrText();
      $locale[$type]['name'] = $altLang->getAltLanguageStmtNameText();
      if ($nid = $altLang->getAltLanguageStmtUrl() && $locale['mode'] != 'nothing') {
        $privacyNodeUrl = Link::createFromRoute($altLang->getAltLanguageStmtUrl(), 'entity.node.canonical', ['node' => $nid]);
        global $base_url;
        $locale['text'][$locale['mode']]['url'] = $base_url . $privacyNodeUrl->getUrl()
            ->toString();
      }
      //$locale['statement']['url'] = $altLang->getAltLanguageStmtUrl();

      $locale[$type][$locale['mode']]['updated'] = !empty($altLang->getAltLanguageStmtDate()) ?
        \Drupal::service('date.formatter')
          ->format(strtotime($altLang->getAltLanguageStmtDate()), 'custom', 'd/m/Y') : NULL;

    if (($this->iabConfig->get('iabCMP') == 1)) {
        $locale['text']['iabCMP']['panelTitle'] = $altLang->getAltLanguageIabPanelTitleText();
        $locale['text']['iabCMP']['panelIntro1'] = $altLang->getAltLanguageIabPanelIntro1();
        $locale['text']['iabCMP']['panelIntro2'] = $altLang->getAltLanguageIabPanelIntro2();
        $locale['text']['iabCMP']['panelIntro3'] = $altLang->getAltLanguageIabPanelIntro3();
        $locale['text']['iabCMP']['aboutIab'] = $altLang->getAltLanguageIabAboutIab();
        $locale['text']['iabCMP']['iabName'] = $altLang->getAltLanguageIabName();
        $locale['text']['iabCMP']['iabLink'] = $altLang->getAltLanguageIabLink();
        $locale['text']['iabCMP']['purposes'] = $altLang->getAltLanguageIabPurposes();
        $locale['text']['iabCMP']['specialPurposes'] = $altLang->getAltLanguageIabSpecialPurposes();
        $locale['text']['iabCMP']['features'] = $altLang->getAltLanguageIabFeatures();
        $locale['text']['iabCMP']['specialFeatures'] = $altLang->getAltLanguageIabSpecialFeatures();
        $locale['text']['iabCMP']['dataUse'] = $altLang->getAltLanguageIabDataUse();
        $locale['text']['iabCMP']['vendors'] = $altLang->getAltLanguageIabVendors();
        $locale['text']['on'] = $altLang->getAltLanguageIabOn();
        $locale['text']['off'] = $altLang->getAltLanguageIabOff();
        $locale['text']['iabCMP']['purposeLegitimateInterest'] = $altLang->getAltLanguageIabPurposeLegitimateInterest();
        $locale['text']['iabCMP']['vendorLegitimateInterest'] = $altLang->getAltLanguageIabVendorLegitimateInterest();
        $locale['text']['iabCMP']['objectPurposeLegitimateInterest'] = $altLang->getAltLanguageIabObjectPurposeLegitimateInterest();
        $locale['text']['iabCMP']['objectVendorLegitimateInterest'] = $altLang->getAltLanguageIabObjectVendorLegitimateInterest();
        $locale['text']['iabCMP']['relyConsent'] = $altLang->getAltLanguageIabRelyConsent();
        $locale['text']['iabCMP']['relyLegitimateInterest'] = $altLang->getAltLanguageIabRelyLegitimateInterest();
        $locale['text']['iabCMP']['savePreferences'] = $altLang->getAltLanguageIabSavePreferences();
        $locale['text']['iabCMP']['acceptAll'] = $altLang->getAltLanguageIabAcceptAll();
        $locale['text']['iabCMP']['rejectAll'] = $altLang->getAltLanguageIabRejectAll();
      }

      $locales[] = $locale;
    }

    return $locales;
  }

  public function get_cccconfig_json() {
    $lang = \Drupal::languageManager()->getCurrentLanguage()->getId();
    $cid = 'civiccookiecontrol_config_' . $lang;
    $response = &drupal_static(__FUNCTION__);

    if ($cache = \Drupal::cache()->get($cid)) {
      $response = $cache->data;
    }
    else {
      if ($this->cccConfig->get('civiccookiecontrol_locale_mode')=='drupal'){
        $this->config['locale'] = $lang;
      }

      $response = (json_encode(array_filter($this->config), JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES ));
      \Drupal::cache()->set($cid, $response);
    }
    return $response;
  }
}
