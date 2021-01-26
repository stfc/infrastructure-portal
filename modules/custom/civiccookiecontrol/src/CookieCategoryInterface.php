<?php

namespace Drupal\civiccookiecontrol;

use Drupal\Core\Config\Entity\ConfigEntityInterface;

/**
 * The cookie category interface.
 */
interface CookieCategoryInterface extends ConfigEntityInterface
{

    /**
     * Returns Cookie Name.
     *
     * @return string
     *   The cookie name.
     */
    public function getCookieName();

    /**
     * Set cookie name.
     *
     * @param string $cookieName
     *   The cookie name.
     *
     * @return string
     *   The cookie name.
     */
    public function setCookieName($cookieName);

    /**
     * Returns Cookie Label.
     *
     * @return string
     *   The cookie label.
     */
    public function getCookieLabel();

    /**
     * Sets Cookie Label.
     *
     * @param string $cookieLabel
     *   The cookie label.
     *
     * @return string
     *   The cookie label.
     */
    public function setCookieLabel($cookieLabel);

    /**
     * Returns Cookie Description.
     *
     * @return string
     *   The cookie Description.
     */
    public function getCookieDescription();

    /**
     * Set Cookie Description.
     *
     * @param string $cookieDescription
     *   The cookie description.
     *
     * @return string
     *   The cookie description.
     */
    public function setCookieDescription($cookieDescription);

    /**
     * Returns cookies string.
     *
     * @return string
     *   The cookie list string.
     */
    public function getCookies();

    /**
     * Sets cookie string.
     *
     * @param string $cookies
     *   The cookie list string.
     *
     * @return string
     *   The cookie list string.
     */
    public function setCookies($cookies);

    /**
     * Returns third party cookies.
     *
     * @return string
     *   Json string of third party cookies.
     */
    public function getThirdPartyCookies();

    /**
     * Sets third party cookies.
     *
     * @param string $thirdPartyCookies
     *   Json string of third party cookies.
     *
     * @return string
     *   Json string of third party cookies.
     */
    public function setThirdPartyCookies($thirdPartyCookies);

    /**
     * Gets on accept call back function string.
     *
     * @return string
     *   On accept callback function string.
     */
    public function getOnAcceptCallBack();

    /**
     * Sets on accept call back function string.
     *
     * @param string $onAcceptCallBack
     *   On accept callback function string.
     *
     * @return string
     *   On accept callback function string.
     */
    public function setOnAcceptCallBack($onAcceptCallBack);

    /**
     * Gets on revoke call back function string.
     *
     * @return string
     *   On revoke callback function string.
     */
    public function getOnRevokeCallBack();

    /**
     * Sets on revoke call back function string.
     *
     * @param string $onRevokeCallBack
     *   On revoke callback function string.
     *
     * @return string
     *   On revoke callback function string.
     */
    public function setOnRevokeCallBack($onRevokeCallBack);

    /**
     * Gets initial consent state.
     *
     * @return bool
     *   The initial consent state.
     */
    public function getRecommendedState();

    /**
     * Gets initial consent state.
     *
     * @param bool $recommendedState
     *   The initial consent state.
     *
     * @return bool
     *   The initial consent state.
     */
    public function setRecommendedState($recommendedState);

    /**
     * Gets the number of third party cookies.
     *
     * @return string
     *   The number of third party cookies.
     */
    public function getThirdPartyCookiesCount();

    /**
     * Sets the number of third party cookies.
     *
     * @param string $thirdPartyCookiesCount
     *   The number of third party cookies.
     *
     * @return string
     *   The number of third party cookies.
     */
    public function setThirdPartyCookiesCount($thirdPartyCookiesCount);

    /**
     * Gets the lawful basis
     *
     * @return string
     *   The lawful basis value
     */
    public function getLawfulBasis();

    /**
     * Sets the number of third party cookies.
     *
     * @param string $lawfulBasis
     *   The value of lawful basis
     *
     * @return string
     *   The value of lawful basis.
     */
    public function setLawfulBasis($lawfulBasis);

}
