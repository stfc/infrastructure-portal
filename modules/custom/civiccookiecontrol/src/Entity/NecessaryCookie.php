<?php

namespace Drupal\civiccookiecontrol\Entity;

use Drupal\civiccookiecontrol\NecessaryCookieInterface;
use Drupal\Core\Config\Entity\ConfigEntityBase;

/**
 * Defines the Necessary Cookie entity.
 *
 * @ConfigEntityType(
 *   id = "necessarycookie",
 *   label = @Translation("Necessary Cookie"),
 *   handlers = {
 *     "list_builder" = "Drupal\civiccookiecontrol\Controller\NecessaryCookieListBuilder",
 *     "form" = {
 *       "add" = "Drupal\civiccookiecontrol\Form\NecessaryCookieForm",
 *       "edit" = "Drupal\civiccookiecontrol\Form\NecessaryCookieForm",
 *       "delete" = "Drupal\civiccookiecontrol\Form\NecessaryCookieDeleteForm",
 *     }
 *   },
 *   config_prefix = "necessarycookie",
 *   admin_permission = "administer civiccookiecontrol",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "necessaryCookieName",
 *     "uuid" = "uuid",
 *   },
 *   links = {
 *     "edit-form" = "/admin/config/system/cookiecontrol/necessarycookie/{necessarycookie}",
 *     "delete-form" = "/admin/config/system/cookiecontrol/necessarycookie/{necessarycookie}/delete",
 *   },
 *   config_export = {
 *     "id",
 *     "necessaryCookieName",
 *   }
 * )
 */
class NecessaryCookie extends ConfigEntityBase implements NecessaryCookieInterface {


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
  public $necessaryCookieName;

  /**
   * Returns Cookie Name.
   *
   * @return string
   *   The cookie name.
   */
  public function getNecessaryCookieName() {
    return $this->necessaryCookieName;
  }

  /**
   * Set cookie name.
   *
   * @param string $necessaryCookieName
   *   The necessary cookie name.
   *
   * @return string
   *   Returns the necessary cookie name.
   */
  public function setNecessaryCookieName($necessaryCookieName) {
    $this->necessaryCookieName = $necessaryCookieName;

    return $this->necessaryCookieName;
  }

}
