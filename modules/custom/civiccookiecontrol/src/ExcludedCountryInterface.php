<?php

namespace Drupal\civiccookiecontrol;

use Drupal\Core\Config\Entity\ConfigEntityInterface;

/**
 * Exlcuded country interface.
 */
interface ExcludedCountryInterface extends ConfigEntityInterface {

  /**
   * Returns Cookie Name.
   *
   * @return string
   *   the excluded country ISO code
   */
  public function getExcludedCountryIsoCode();

  /**
   * Set cookie name.
   *
   * @param string $excludedCountryIsoCode
   *   the excluded country ISO code.
   *
   * @return string
   *   the excluded country ISO code.
   */
  public function setExcludedCountryIsoCode($excludedCountryIsoCode);

}
