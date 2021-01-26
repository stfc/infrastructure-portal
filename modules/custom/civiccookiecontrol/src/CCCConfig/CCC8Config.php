<?php


namespace Drupal\civiccookiecontrol\CCCConfig;
use Drupal\Component\Serialization\Json;
use Drupal\Core\Link;

class CCC8Config extends AbstractCCCConfig {


  /**
   * CCC8Config constructor.
   */
  public function __construct() {
    parent::__construct();
    $this->iabConfig = \Drupal::config('iab.settings');
    $this->_load_cookie_config();

  }

  public function _load_cookie_config() {
    parent::_load_cookie_config();
    if ($this->iabConfig) {
      $this->config['iabCMP'] = $this->iabConfig
        ->get('iabCMP') ? TRUE : FALSE;
      $this->config['iabConfig']['gdprAppliesGlobally'] = $this->iabConfig
        ->get('iabGdprAppliesGlobally') ? TRUE : FALSE;
      $this->config['iabConfig']['recommendedState'] = Json::decode($this->iabConfig
        ->get('iabRecommendedState'));
    }

    $this->_load_statement_obj();
    $this->_load_accessibility_obj();
    $this->_load_text_obj();
    $this->_load_branding_obj();

    $this->config['locales'] = $this->_load_alt_languages_list();
  }

  public function _load_text_obj(){
    parent::_load_text_obj();
    $this->config['text']['accessibilityAlert'] = $this->cccConfig
      ->get('civiccookiecontrol_accessibility_alert');

    if ($this->iabConfig) {
      $this->config['text']['iabCMP'] = $this->_iab_text_obj();
    }

  }

  public function _iab_text_obj(){
    $iabText=[];
    $iabText['label'] = $this->iabConfig->get('iabLabelText');
    $iabText['description'] = $this->iabConfig->get('iabDescriptionText');
    $iabText['configure'] = $this->iabConfig->get('iabConfigureText');
    $iabText['panelTitle'] = $this->iabConfig->get('iabPanelTitleText');
    $iabText['panelIntro'] = $this->iabConfig->get('iabPanelIntroText');
    $iabText['aboutIab'] = $this->iabConfig->get('iabAboutIabText');
    $iabText['iabName'] = $this->iabConfig->get('iabIabNameText');
    $iabText['iabLink'] = $this->iabConfig->get('iabIabLinkText');
    $iabText['panelBack'] = $this->iabConfig->get('iabPanelBackText');
    $iabText['vendorTitle'] = $this->iabConfig->get('iabVendorTitleText');
    $iabText['vendorConfigure'] = $this->iabConfig->get('iabVendorConfigureText');
    $iabText['vendorBack'] = $this->iabConfig->get('iabVendorBackText');
    $iabText['acceptAll'] = $this->iabConfig->get('iabAcceptAllText');
    $iabText['rejectAll'] = $this->iabConfig->get('iabRejectAllText');
    $iabText['back'] = $this->iabConfig->get('iabBackText');

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
      $locale['text']['title'] = $altLang->getAltLanguageTitle();
      $locale['text']['intro'] = $altLang->getAltLanguageIntro();
      $locale['text']['acceptRecommended'] = $altLang->getAltLanguageAcceptRecommended();
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
      $locale['text']['closeLabel'] = $altLang->getAltLanguageCloseLabel();
      $locale['text']['accessibilityAlert'] = $altLang->getAltLanguageAccessibilityAlert();
      $locale['text']['optionalCookies'] = $altLang->getAltLanguageOptionalCookies();
      $locale['text']['statement']['description'] = $altLang->getAltLanguageStmtDescrText();
      $locale['text']['statement']['name'] = $altLang->getAltLanguageStmtNameText();
      if ($nid = $altLang->getAltLanguageStmtUrl()) {
        $privacyNodeUrl = Link::createFromRoute($altLang->getAltLanguageStmtUrl(), 'entity.node.canonical', ['node' => $nid]);
        global $base_url;
        $locale['text']['statement']['url'] = $base_url . $privacyNodeUrl->getUrl()
            ->toString();
      }
      //$locale['statement']['url'] = $altLang->getAltLanguageStmtUrl();
      $locale['text']['statement']['updated'] = !empty($altLang->getAltLanguageStmtDate()) ?
        \Drupal::service('date.formatter')->format(strtotime($altLang->getAltLanguageStmtDate()), 'custom', 'd/m/Y') : NULL;

      $locale['text']['iabCMP']['label'] = $altLang->getAltLanguageIabLabelText();
      $locale['text']['iabCMP']['description'] = $altLang->getAltLanguageIabDescriptionText();
      $locale['text']['iabCMP']['configure'] = $altLang->getAltLanguageIabConfigureText();
      $locale['text']['iabCMP']['panelTitle'] = $altLang->getAltLanguageIabPanelTitleText();
      $locale['text']['iabCMP']['panelIntro'] = $altLang->getAltLanguageIabPanelIntroText();
      $locale['text']['iabCMP']['aboutIab'] = $altLang->getAltLanguageIabAboutIabText();
      $locale['text']['iabCMP']['iabName'] = $altLang->getAltLanguageIabIabNameText();
      $locale['text']['iabCMP']['iabLink'] = $altLang->getAltLanguageIabIabLinkText();
      $locale['text']['iabCMP']['panelBack'] = $altLang->getAltLanguageIabPanelBackText();
      $locale['text']['iabCMP']['vendorTitle'] = $altLang->getAltLanguageIabVendorTitleText();
      $locale['text']['iabCMP']['vendorConfigure'] = $altLang->getAltLanguageIabVendorConfigureText();
      $locale['text']['iabCMP']['vendorBack'] = $altLang->getAltLanguageIabVendorBackText();
      $locale['text']['iabCMP']['acceptAll'] = $altLang->getAltLanguageIabAcceptAllText();
      $locale['text']['iabCMP']['rejectAll'] = $altLang->getAltLanguageIabRejectAllText();
      $locale['text']['iabCMP']['back'] = $altLang->getAltLanguageIabBackText();

      $locales[] = $locale;
    }

    return $locales;
  }

}
