<?php

namespace Drupal\address_map_link\Plugin\MapLink;

use Drupal\address\AddressInterface;
use Drupal\address_map_link\MapLinkBase;
use Drupal\Core\Url;

/**
 * Provides a Google Maps link type.
 *
 * @MapLink(
 *   id = "google_maps_embed",
 *   name = @Translation("Google Maps Embed")
 * )
 */
class GoogleMapsEmbed extends MapLinkBase {

  /**
   * Gets the map link url from an address.
   *
   * @param \Drupal\address\AddressInterface $address
   *   The address.
   *
   * @return \Drupal\Core\Url
   *   The Url.
   */
  public function getAddressUrl(AddressInterface $address) {
    return Url::fromUri('https://www.google.com/maps/embed/v1/search', ['query' => ['q' => $this->addressString($address), 'key' => 'AIzaSyAAnC9JpJbBOn2_32OwR1Ge650BkYvZxUI']]);
  }

}
