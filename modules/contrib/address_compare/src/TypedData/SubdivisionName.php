<?php

namespace Drupal\address\TypedData;

use Drupal\Core\TypedData\DataDefinitionInterface;
use Drupal\Core\TypedData\TypedDataInterface;
use Drupal\Core\TypedData\TypedData;
use Drupal\Core\DependencyInjection\DependencySerializationTrait;
use Symfony\Component\DependencyInjection\ContainerInterface;
use CommerceGuys\Addressing\LocaleHelper;

/**
 * A computed property for the Subdivision.
 *
 * Required settings (below the definition's 'settings' key) are:
 *  - property source: The property source of the parent to be processed text.
 *    Examples: administrative_area, locality, dependent_locality.
 */
class SubdivisionName extends TypedData {

  use DependencySerializationTrait;

  /**
   * Cached processed value.
   *
   * @var string|null
   */
  protected $value = NULL;

  /**
   * The subdivision repository.
   *
   * @var \CommerceGuys\Addressing\Subdivision\SubdivisionRepositoryInterface
   */
  protected $subdivisionRepository;

  /**
   * {@inheritdoc}
   */
  public function __construct(DataDefinitionInterface $definition, $name = NULL, TypedDataInterface $parent = NULL) {
    parent::__construct($definition, $name, $parent);

    if ($definition->getSetting('property source') === NULL) {
      throw new \InvalidArgumentException("The definition's 'property source' key has to specify the code of the address property to be processed.");
    }

    // Set the subdivision respository.
    // This uses the service since TypedData does not use container injection.
    // See https://www.drupal.org/node/2053415.
    $this->subdivisionRepository = \Drupal::service('address.subdivision_repository');
  }

  /**
   * {@inheritdoc}
   */
  public function getValue() {
    if (isset($this->value)) {
      return $this->value;
    }

    // The address property source.
    $property_name = $this->definition->getSetting('property source');

    // The item is our parent.
    $item = $this->getParent();

    // Resolve the address property full name.
    $this->value = $this->resolveAddressName($property_name, $item);

    return $this->value;
  }

  /**
   * Resolve an address property full name.
   *
   * @param string $property_name
   *   The name of the address property.
   * @param \Drupal\Core\TypedData\TypedDataInterface $parent
   *   The parent object of the address property.
   *
   * @return string
   *   The full name of the address property.
   */
  protected function resolveAddressName($property_name, TypedDataInterface $parent) {
    if (!isset($parent) || !isset($parent->{$property_name})) {
      return '';
    }

    $property_value = $parent->{$property_name};

    // Avoid running on empty strings.
    if (!isset($property_value) || $property_value === '') {
      return '';
    }

    $address_parent_name = [];
    switch ($property_name) {
      case 'administrative_area':
        $address_parent_names[] = 'country_code';
        break;

      case 'locality':
        $address_parent_names[] = 'country_code';
        $address_parent_names[] = 'administrative_area';
        break;

      case 'dependent_locality':
        $address_parent_names[] = 'country_code';
        $address_parent_names[] = 'administrative_area';
        $address_parent_names[] = 'locality';
        break;
    }

    $return = NULL;
    if (!empty($address_parent_names)) {
      $address_parent_values = [];
      foreach ($address_parent_names as $address_parent_name) {
        if (isset($parent->{$address_parent_name})) {
          $address_parent_values[] = $parent->{$address_parent_name};
        }
        else {
          // Exit if there are missing address parents.
          return '';
        }
      }

      /** @var \CommerceGuys\Addressing\Subdivision\Subdivision $subdivision */
      $subdivision = $this->subdivisionRepository->get($property_value, $address_parent_values);
      if ($subdivision) {
        $use_local_name = FALSE;
        if (method_exists($parent, 'getLocale')) {
          $use_local_name = LocaleHelper::match($parent->getLocale(), $subdivision->getLocale());
        }
        $return = $use_local_name ? $subdivision->getLocalName() : $subdivision->getName();
      }
    }

    return $return;
  }

}
