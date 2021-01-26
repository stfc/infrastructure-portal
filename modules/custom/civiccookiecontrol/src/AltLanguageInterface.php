<?php

namespace Drupal\civiccookiecontrol;

use Drupal\Core\Config\Entity\ConfigEntityInterface;

/**
 * The alternative language interface.
 */
interface AltLanguageInterface extends ConfigEntityInterface {

  /**
   * Returns Alternative Language ISO Code.
   *
   * @return string
   *   The Alternative Language ISO Code.
   */
  public function getAltLanguageIsoCode();

  /**
   * Set Alternative Language ISO Code.
   *
   * @param string $altLanguageIsoCode
   *   Alternative Language ISO Code.
   *
   * @return string
   *   Alternative Language ISO Code.
   */
  public function setAltLanguageIsoCode($altLanguageIsoCode);

  /**
   * Returns Cookie Title in Alternative Language.
   *
   * @return string
   *   Cookie Title in Alternative Language.
   */
  public function getAltLanguageTitle();

  /**
   * Returns Cookie Intro in Alternative Language.
   *
   * @return string
   *   Cookie Intro in Alternative Language.
   */
  public function getAltLanguageIntro();

  /**
   * Sets Cookie Intro in Alternative Language.
   *
   * @param string $altLanguageIntro
   *   Cookie Intro in Alternative Language.
   *
   * @return string
   *   Cookie Intro in Alternative Language.
   */
  public function setAltLanguageIntro($altLanguageIntro);

  /**
   * Sets Title in Alternative Language.
   *
   * @param string $altLanguageTitle
   *   Title in Alternative Language.
   *
   * @return string
   *   Title in Alternative Language.
   */
  public function setAltLanguageTitle($altLanguageTitle);

  /**
   * Returns Cookie Necessary Title in Alternative Language.
   *
   * @return string
   *   Cookie Necessary Title in Alternative Language
   */
  public function getAltLanguageNecessaryTitle();

  /**
   * Sets Necessary Title in Alternative Language.
   *
   * @param string $altLanguageNecessaryTitle
   *   Cookie Necessary Title in Alternative Language.
   *
   * @return string
   *   Cookie Necessary Title in Alternative Language
   */
  public function setAltLanguageNecessaryTitle($altLanguageNecessaryTitle);

  /**
   * Returns Necessary Cookie Description in Alternative Language.
   *
   * @return string
   *   Necessary Cookie Description in Alternative Language.
   */
  public function getAltLanguageNecessaryDescription();

  /**
   * Sets Description Necessary in Alternative Language.
   *
   * @param string $altLanguageNecessaryDescription
   *   Necessary Cookie Description in Alternative Language.
   *
   * @return string
   *   Necessary Cookie Description in Alternative Language.
   */
  public function setAltLanguageNecessaryDescription($altLanguageNecessaryDescription);

  /**
   * Returns On Text in Alternative Language.
   *
   * @return string
   *   On Text in Alternative Language.
   */
  public function getAltLanguageOn();

  /**
   * Sets On Text in Alternative Language.
   *
   * @param string $altLanguageOn
   *   On text in Alternative Language.
   *
   * @return string
   *   On text in Alternative Language.
   */
  public function setAltLanguageOn($altLanguageOn);

  /**
   * Returns Off Text in Alternative Language.
   *
   * @return string
   *   Off Text in Alternative Language.
   */
  public function getAltLanguageOff();

  /**
   * Sets Off Text in Alternative Language.
   *
   * @param string $altLanguageOff
   *   Off text in Alternative Language.
   *
   * @return string
   *   Off text in Alternative Language.
   */
  public function setAltLanguageOff($altLanguageOff);

  /**
   * Returns Notify Title in Alternative Language.
   *
   * @return string
   *   Notify Title in Alternative Language.
   */
  public function getAltLanguageNotifyTitle();

  /**
   * Sets Notify Title in Alternative Language.
   *
   * @param string $altLanguageNotifyTitle
   *   Notify in Alternative Language.
   *
   * @return string
   *   Notify Title in Alternative Language.
   */
  public function setAltLanguageNotifyTitle($altLanguageNotifyTitle);


  /**
   * Returns Notify Description in Alternative Language.
   *
   * @return string
   *   Notify Description in Alternative Language.
   */
  public function getAltLanguageNotifyDescription();

  /**
   * Sets Notify Description in Alternative Language.
   *
   * @param string $altLanguageNotifyDescription
   *   Notify Description in Alternative Language.
   *
   * @return string
   *   Notify Description in Alternative Language.
   */
  public function setAltLanguageNotifyDescription($altLanguageNotifyDescription);

  /**
   * Returns Accept Text in Alternative Language.
   *
   * @return string
   *   Accept Text in Alternative Language.
   */
  public function getAltLanguageAccept();

  /**
   * Sets Accept Text in Alternative Language.
   *
   * @param string $altLanguageAccept
   *   Accept Text in Alternative Language.
   *
   * @return string
   *   Accept Text in Alternative Language.
   */
  public function setAltLanguageAccept($altLanguageAccept);

    /**
     * Returns Reject Text in Alternative Language.
     *
     * @return string
     *   Reject Text in Alternative Language.
     */
    public function getAltLanguageReject();

    /**
     * Sets Reject Text in Alternative Language.
     *
     * @param string $altLanguageReject
     *   Reject Text in Alternative Language.
     *
     * @return string
     *   Reject Text in Alternative Language.
     */
    public function setAltLanguageReject($altLanguageReject);

  /**
   * Returns Accept Recommended Settings Text in Alternative Language.
   *
   * @return string
   *   Accept Recommended Settings  Text in Alternative Language.
   */
  public function getAltLanguageAcceptRecommended();

  /**
   * Sets Accept Recommended Settings Text in Alternative Language.
   *
   * @param string $altLanguageAcceptRecommended
   *   Accept Recommended Settings Text in Alternative Language.
   *
   * @return string
   *   Accept Recommended Settings Text in Alternative Language.
   */

  public function setAltLanguageAcceptRecommended($altLanguageAcceptRecommended);

  /**
   * Returns Settings Text in Alternative Language.
   *
   * @return string
   *   Settings Text in Alternative Language.
   */
  public function getAltLanguageSettings();

  /**
   * Sets Settings Text in Alternative Language.
   *
   * @param string $altLanguageSettings
   *   Settings Text in Alternative Language.
   *
   * @return string
   *   Settings Text in Alternative Language.
   */
  public function setAltLanguageSettings($altLanguageSettings);

  /**
   * Returns Accept Settings Text in Alternative Language.
   *
   * @return string
   *   Accept settings Text in Alternative Language.
   */
  public function getAltLanguageAcceptSettings();

  /**
   * Sets Accept Settings Text in Alternative Language.
   *
   * @param string $altLanguageAcceptSettings
   *   Accpet Settings Text in Alternative Language.
   *
   * @return string
   *   Accept Settings Text in Alternative Language.
   */
  public function setAltLanguageAcceptSettings($altLanguageAccpetSettings);

    /**
     * Returns Reject Settings Text in Alternative Language.
     *
     * @return string
     *   Reject settings Text in Alternative Language.
     */
    public function getAltLanguageRejectSettings();

    /**
     * Sets Reject Settings Text in Alternative Language.
     *
     * @param string $altLanguageRejectSettings
     *   Reject Settings Text in Alternative Language.
     *
     * @return string
     *   Reject Settings Text in Alternative Language.
     */
    public function setAltLanguageRejectSettings($altLanguageRejectSettings);

  /**
   * Returns Third Party Title in Alternative Language.
   *
   * @return string
   *   Third Party Title in Alternative Language.
   */
  public function getAltLanguageThirdPartyTitle();

  /**
   * Sets Third Party Title in Alternative Language.
   *
   * @param string $altLanguageThirdPartyTitle
   *   Third Party Title in Alternative Language.
   *
   * @return string
   *   Third Party Title in Alternative Language.
   */
  public function setAltLanguageThirdPartyTitle($altLanguageThirdPartyTitle);

  /**
   * Returns Third Party Description in Alternative Language.
   *
   * @return string
   *   Third Party Description in Alternative Language.
   */
  public function getAltLanguageThirdPartyDescription();

  /**
   * Sets Third Party Description in Alternative Language.
   *
   * @param string $altLanguageThirdPartyDescription
   *   Third Party Description in Alternative Language.
   *
   * @return string
   *   Third Party Description in Alternative Language.
   */
  public function setAltLanguageThirdPartyDescription($altLanguageThirdPartyDescription);

  /**
   * Returns Optional Cookies in Alternative Language.
   *
   * @return string
   *   Optional Cookies in Alternative Language.
   */
  public function getAltLanguageOptionalCookies();

  /**
   * Sets Optional Cookies Label in Alternative Language.
   *
   * @param string $altLanguageOptionalCookies
   *   Optional Cookies in Alternative Language.
   *
   * @return string
   *   Optional Cookies in Alternative Language.
   */
  public function setAltLanguageOptionalCookies($altLanguageOptionalCookies);

  /**
   * Returns Statement Description Text in Alternative Language.
   *
   * @return string
   *   Statement Description Text in Alternative Language.
   */
  public function getAltLanguageStmtDescrText();

  /**
   * Sets Statement Description Text in Alternative Language.
   *
   * @param string $altLanguageStmtDescrText
   *   Statement Description Text in Alternative Language.
   *
   * @return string
   *   Statement Description Text in Alternative Language.
   */
  public function setAltLanguageStmtDescrText($altLanguageStmtDescrText);

  /**
   * Returns Statement Name Text in Alternative Language.
   *
   * @return string
   *   Statement Name Text in Alternative Language.
   */
  public function getAltLanguageStmtNameText();

  /**
   * Sets Statement Name Text in Alternative Language.
   *
   * @param string $altLanguageStmtNameText
   *   Statement Name Text in Alternative Language.
   *
   * @return string
   *   Statement Name Text in Alternative Language.
   */
  public function setAltLanguageStmtNameText($altLanguageStmtNameText);

  /**
   * Returns Statement URL for Alternative Language.
   *
   * @return string
   *   Statement URL in Alternative Language.
   */
  public function getAltLanguageStmtUrl();

  /**
   * Sets Statement URL in Alternative Language.
   *
   * @param string $altLanguageStmtUrl
   *   Statement URL in Alternative Language.
   *
   * @return string
   *   Statement URL in Alternative Language.
   */
  public function setAltLanguageStmtUrl($altLanguageStmtUrl);

  /**
   * Returns Statement Updated Date in Alternative Language.
   *
   * @return string
   *   Statement Updated Date in Alternative Language.
   */
  public function getAltLanguageStmtDate();

  /**
   * Sets Statement Date in Alternative Language.
   *
   * @param string $altLanguageStmtDate
   *   Statement Date for Alternative Language.
   *
   * @return string
   *   Statement Date in Alternative Language.
   */
  public function setAltLanguageStmtDate($altLanguageStmtDate);


    /**
     * Returns Close Label text in Alternative Language.
     *
     * @return string
     *   Close Label text in Alternative Language.
     */
    public function getAltLanguageCloseLabel();

    /**
     * Sets Close Label text in Alternative Language.
     *
     * @param string $altLanguageCloseLabel
     *   Close Label text in Alternative Language.
     *
     * @return string
     *   Close Label text in Alternative Language.
     */
    public function setAltLanguageCloseLabel($altLanguageCloseLabel);

    /**
     * Returns Accessibility Alert in Alternative Language.
     *
     * @return string
     *   Accessibility Alert in Alternative Language.
     */
    public function getAltLanguageAccessibilityAlert();

    /**
     * Sets Accessibility Alert in Alternative Language.
     *
     * @param string $altLanguageAccessibilityAlert
     *   Accessibility Alert in Alternative Language.
     *
     * @return string
     *   Accessibility Alert in Alternative Language.
     */
    public function setAltLanguageAccessibility($altLanguageAccessibilityAlert);


    /**
     * @return mixed
     */
    public function getAltLanguageIabLabelText();

    /**
     * @param mixed $altLanguageIabLabelText
     */
    public function setAltLanguageIabLabelText($altLanguageIabLabelText);

    /**
     * @return mixed
     */
    public function getAltLanguageIabDescriptionText();

    /**
     * @param mixed $altLanguageIabDescriptionText
     */
    public function setAltLanguageIabDescriptionText($altLanguageIabDescriptionText);

    /**
     * @return mixed
     */
    public function getAltLanguageIabConfigureText();

    /**
     * @param mixed $altLanguageIabConfigureText
     */
    public function setAltLanguageIabConfigureText($altLanguageIabConfigureText);

    /**
     * @return mixed
     */
    public function getAltLanguageIabPanelTitleText();

    /**
     * @param mixed $altLanguageIabPanelTitleText
     */
    public function setAltLanguageIabPanelTitleText($altLanguageIabPanelTitleText);

    /**
     * @return mixed
     */
    public function getAltLanguageIabPanelIntroText();

    /**
     * @param mixed $altLanguageIabPanelIntroText
     */
    public function setAltLanguageIabPanelIntroText($altLanguageIabPanelIntroText);

    /**
     * @return mixed
     */
    public function getAltLanguageIabAboutIabText();

    /**
     * @param mixed $altLanguageIabAboutIabText
     */
    public function setAltLanguageIabAboutIabText($altLanguageIabAboutIabText);

    /**
     * @return mixed
     */
    public function getAltLanguageIabIabNameText();

    /**
     * @param mixed $altLanguageIabIabNameText
     */
    public function setAltLanguageIabIabNameText($altLanguageIabIabNameText);

    /**
     * @return mixed
     */
    public function getAltLanguageIabIabLinkText();

    /**
     * @param mixed $altLanguageIabIabLinkText
     */
    public function setAltLanguageIabIabLinkText($altLanguageIabIabLinkText);

    /**
     * @return mixed
     */
    public function getAltLanguageIabPanelBackText();

    /**
     * @param mixed $altLanguageIabPanelBackText
     */
    public function setAltLanguageIabPanelBackText($altLanguageIabPanelBackText);

    /**
     * @return mixed
     */
    public function getAltLanguageIabVendorTitleText();

    /**
     * @param mixed $altLanguageIabVendorTitleText
     */
    public function setAltLanguageIabVendorTitleText($altLanguageIabVendorTitleText);

    /**
     * @return mixed
     */
    public function getAltLanguageIabVendorConfigureText();

    /**
     * @param mixed $altLanguageIabVendorConfigureText
     */
    public function setAltLanguageIabVendorConfigureText($altLanguageIabVendorConfigureText);

    /**
     * @return mixed
     */
    public function getAltLanguageIabVendorBackText();

    /**
     * @param mixed $altLanguageIabVendorBackText
     */
    public function setAltLanguageIabVendorBackText($altLanguageIabVendorBackText);

    /**
     * @return mixed
     */
    public function getAltLanguageIabAcceptAllText();

    /**
     * @param mixed $altLanguageIabAcceptAllText
     */
    public function setAltLanguageIabAcceptAllText($altLanguageIabAcceptAllText);

    /**
     * @return mixed
     */
    public function getAltLanguageIabRejectAllText();

    /**
     * @param mixed $altLanguageIabRejectAllText
     */
    public function setAltLanguageIabRejectAllText($altLanguageIabRejectAllText);

    /**
     * @return mixed
     */
    public function getAltLanguageIabBackText();

    /**
     * @param mixed $altLanguageIabBackText
     */
    public function setAltLanguageIabBackText($altLanguageIabBackText);

}

