<?php

namespace Drupal\civiccookiecontrol\Entity;

use Drupal\civiccookiecontrol\ExcludedCountryInterface;
use Drupal\Core\Config\Entity\ConfigEntityBase;

/**
 * Defines the Necessary Cookie entity.
 *
 * @ConfigEntityType(
 *   id = "excludedcountry",
 *   label = @Translation("Excluded Country"),
 *   handlers = {
 *     "list_builder" = "Drupal\civiccookiecontrol\Controller\ExcludedCountryListBuilder",
 *     "form" = {
 *       "add" = "Drupal\civiccookiecontrol\Form\ExcludedCountryForm",
 *       "edit" = "Drupal\civiccookiecontrol\Form\ExcludedCountryForm",
 *       "delete" = "Drupal\civiccookiecontrol\Form\ExcludedCountryDeleteForm",
 *     }
 *   },
 *   config_prefix = "excludedcountry",
 *   admin_permission = "administer civiccookiecontrol",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "excludedCountryIsoCode",
 *     "uuid" = "uuid",
 *   },
 *   links = {
 *     "edit-form" = "/admin/config/system/cookiecontrol/excludedcountry/{excludedcountry}",
 *     "delete-form" = "/admin/config/system/cookiecontrol/excludedcountry/{excludedcountry}/delete",
 *   },
 *   config_export = {
 *     "id",
 *     "excludedCountryIsoCode",
 *   }
 * )
 */
class ExcludedCountry extends ConfigEntityBase implements ExcludedCountryInterface {


  /**
   * The cookiecategory ID.
   *
   * @var string
   */
  public $id;

  /**
   * The exluded country iso code.
   *
   * @var string
   */
  public $excludedCountryIsoCode;

  /**
   * {@inheritdoc}
   */
  public function getExcludedCountryIsoCode() {
    return $this->excludedCountryIsoCode;
  }

  /**
   * {@inheritdoc}
   */
  public function setExcludedCountryIsoCode($excludedCountryIsoCode) {
    $this->excludedCountryIsoCode = $excludedCountryIsoCode;

    return $this->excludedCountryIsoCode;
  }

}
