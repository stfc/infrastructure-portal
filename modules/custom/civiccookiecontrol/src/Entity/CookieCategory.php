<?php

namespace Drupal\civiccookiecontrol\Entity;

use Drupal\civiccookiecontrol\CookieCategoryInterface;
use Drupal\Core\Config\Entity\ConfigEntityBase;

/**
 * Defines the Example entity.
 *
 * @ConfigEntityType(
 *   id = "cookiecategory",
 *   label = @Translation("Cookie Category"),
 *   handlers = {
 *     "list_builder" = "Drupal\civiccookiecontrol\Controller\CookieCategoryListBuilder",
 *     "form" = {
 *       "add" = "Drupal\civiccookiecontrol\Form\CookieCategoryForm",
 *       "edit" = "Drupal\civiccookiecontrol\Form\CookieCategoryForm",
 *       "delete" = "Drupal\civiccookiecontrol\Form\CookieCategoryDeleteForm",
 *     }
 *   },
 *   config_prefix = "cookiecategory",
 *   admin_permission = "administer civiccookiecontrol",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "cookieName",
 *     "uuid" = "uuid",
 *   },
 *   links = {
 *     "edit-form" = "/admin/config/system/cookiecontrol/cookiecategory/{cookiecategory}",
 *     "delete-form" = "/admin/config/system/cookiecontrol/cookiecategory/{cookiecategory}/delete",
 *   },
 *   config_export = {
 *     "id",
 *     "cookieName",
 *     "cookieLabel",
 *     "cookieDescription",
 *     "cookies",
 *     "thirdPartyCookies",
 *     "thirdPartyCookiesCount",
 *     "onAcceptCallback",
 *     "onRevokeCallback",
 *     "recommendedState",
 *     "lawfulBasis"
 *   }
 * )
 */
class CookieCategory extends ConfigEntityBase implements CookieCategoryInterface
{


    /**
     * The cookiecategory ID.
     *
     * @var string
     */
    public $id;

    /**
     * The cookiename.
     *
     * @var string
     */
    public $cookieName;

    /**
     * The cookie label.
     *
     * @var string
     */
    public $cookieLabel;

    /**
     * The cookie description.
     *
     * @var string
     */
    public $cookieDescription;

    /**
     * The cookies list.
     *
     * @var string
     */
    public $cookies;

    /**
     * Third party cookies json string.
     *
     * @var string
     */
    public $thirdPartyCookies;

    /**
     * The number of third party cookies.
     *
     * @var string
     */
    public $thirdPartyCookiesCount;

    /**
     * Callback function to run on accept of cookie.
     *
     * @var string
     */
    public $onAcceptCallback;

    /**
     * Callback function to run on revoke of cookie.
     *
     * @var string
     */
    public $onRevokeCallback;

    /**
     * The initial consent state.
     *
     * @var bool
     */
    public $recommendedState;

    /**
     * Lawful basis value
     *
     * @var string
     */
    public $lawfulBasis;

    /**
     * Returns Cookie Name.
     *
     * @return string
     *   Get the cookie name.
     */
    public function getCookieName()
    {
        return $this->cookieName;
    }

    /**
     * Set cookie name.
     *
     * @param string $cookieName
     *   The cookie name.
     *
     * @return string
     *   Return the cookie name.
     */
    public function setCookieName($cookieName)
    {
        $this->cookeNname = $cookieName;

        return $this->cookieName;
    }

    /**
     * Returns Cookie Label.
     *
     * @return string
     *   The cookie label.
     */
    public function getCookieLabel()
    {
        return $this->cookieLabel;
    }

    /**
     * Sets Cookie Label.
     *
     * @param string $cookieLabel
     *   The cookie label.
     *
     * @return string
     *   The cookie label.
     */
    public function setCookieLabel($cookieLabel)
    {
        $this->cookieLabel = $cookieLabel;
        return $this->cookieLabel;
    }

    /**
     * Returns Cookie Description.
     *
     * @return string
     *   The cookie description.
     */
    public function getCookieDescription()
    {
        return $this->cookieDescription;
    }

    /**
     * Set Cookie Description.
     *
     * @param string $cookieDescription
     *   The cookie description.
     *
     * @return string
     *   The cookie description.
     */
    public function setCookieDescription($cookieDescription)
    {
        $this->cookieDescription = $cookieDescription;
        return $this->cookieDescription;
    }

    /**
     * Returns cookies string.
     *
     * @return string
     *   The cookies.
     */
    public function getCookies()
    {
        return $this->cookies;
    }

    /**
     * Sets cookie string.
     *
     * @param string $cookies
     *   The cookies.
     *
     * @return string
     *   The cookies.
     */
    public function setCookies($cookies)
    {
        $this->cookies = $cookies;
        return $this->cookies;
    }

    /**
     * Returns third party cookies.
     *
     * @return string
     *   The third party cookies json.
     */
    public function getThirdPartyCookies()
    {
        return $this->thirdPartyCookies;
    }

    /**
     * Sets third party cookies.
     *
     * @param string $thirdPartyCookies
     *   The third party cookies json.
     *
     * @return string
     *   The third party cookies json.
     */
    public function setThirdPartyCookies($thirdPartyCookies)
    {
        $this->thirdPartyCookies = $thirdPartyCookies;
        return $this->thirdPartyCookies;
    }

    /**
     * Gets on accept call back function string.
     *
     * @return string
     *   The call back function string.
     */
    public function getOnAcceptCallBack()
    {
        return $this->onAcceptCallback;
    }

    /**
     * Sets on accept call back function string.
     *
     * @param string $onAcceptCallBack
     *   The call back function string.
     *
     * @return string
     *   The call back function string.
     */
    public function setOnAcceptCallBack($onAcceptCallBack)
    {
        $this->onAcceptCallback = $onAcceptCallBack;
        return $this->onAcceptCallback;
    }

    /**
     * Gets on revoke call back function string.
     *
     * @return string
     *   The call back function string.
     */
    public function getOnRevokeCallBack()
    {
        return $this->onRevokeCallback;
    }

    /**
     * Sets on revoke call back function string.
     *
     * @param string $onRevokeCallBack
     *   The call back function string.
     *
     * @return string
     *   The call back function string.
     */
    public function setOnRevokeCallBack($onRevokeCallBack)
    {
        $this->onRevokeCallback = $onRevokeCallBack;
        return $this->onRevokeCallback;
    }

    /**
     * Gets initial consent state text.
     *
     * @return string
     *   The initial consent state.
     */
    public function getRecommendedStateText()
    {
        if ($this->recommendedState)
            return "on";
        else
            return "off";
    }

    /**
     * Gets initial consent state.
     *
     * @return bool
     *   The initial consent state.
     */
    public function getRecommendedState()
    {
        return $this->recommendedState;
    }

    /**
     * Gets initial consent state.
     *
     * @param bool $recommendedState
     *   The initial consent state.
     *
     * @return bool
     *   The initial consent state.
     */
    public function setRecommendedState($recommendedState)
    {
        $this->recommendedState = $recommendedState;
        return $this->recommendedState;
    }

    /**
     * The number of third party cookies.
     *
     * @return string
     *   The number of third party cookies.
     */
    public function getThirdPartyCookiesCount()
    {
        return $this->thirdPartyCookiesCount;
    }

    /**
     * The number of third party cookies.
     *
     * @param int $thirdPartyCookiesCount
     *   The number of third party cookies.
     */
    public function setThirdPartyCookiesCount($thirdPartyCookiesCount)
    {
        $this->thirdPartyCookiesCount = $thirdPartyCookiesCount;
    }

    /**
     * The lawful basis value.
     *
     * @return string
     *   The lawful basis value.
     */
    public function getLawfulBasis()
    {
        return $this->lawfulBasis;
    }

    /**
     * The lawful basis value.
     *
     * @param int $lawfulBasis
     *   The lawful basis value.
     */
    public function setLawfulBasis($lawfulBasis)
    {
        $this->lawfulBasis = $lawfulBasis;
    }

}
