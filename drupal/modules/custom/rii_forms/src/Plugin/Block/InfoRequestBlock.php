<?php
/**
 * @file
 * Contains \Drupal\rii_forms\Plugin\Block\InfoRequestBlock.
 */

namespace Drupal\rii_forms\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormInterface;

/**
 * Provides an 'info request' block.
 *
 * @Block(
 *   id = "info_request_block",
 *   admin_label = @Translation("Request more info"),
 *   category = @Translation("RII block")
 * )
 */
class InfoRequestBlock extends BlockBase {

  /**
   *{@inheritdoc}
   */
  public function build() {
    $form = \Drupal::formBuilder()->getForm('Drupal\rii_forms\Form\InfoRequestForm');
    return $form;
  }
}
