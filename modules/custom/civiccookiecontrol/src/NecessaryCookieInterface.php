<?php

namespace Drupal\civiccookiecontrol;

use Drupal\Core\Config\Entity\ConfigEntityInterface;

/**
 * The Cecessary Cookie interface.
 */
interface NecessaryCookieInterface extends ConfigEntityInterface {

  /**
   * Returns Cookie Name.
   *
   * @return string
   *   The necessary cookie name
   */
  public function getNecessaryCookieName();

  /**
   * Set cookie name.
   *
   * @param string $necessaryCookieName
   *   The name of the necessary cookie.
   *
   * @return string
   *   The name of the necessary cookie.
   */
  public function setNecessaryCookieName($necessaryCookieName);

}
