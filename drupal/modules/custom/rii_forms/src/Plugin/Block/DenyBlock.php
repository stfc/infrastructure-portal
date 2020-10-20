<?php
/**
 * @file
 * Contains \Drupal\rii_forms\Plugin\Block\DenyBlock.
 */

namespace Drupal\rii_forms\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormInterface;

/**
 * Provides a 'Deny form' block.
 *
 * @Block(
 *   id = "deny_form_block",
 *   admin_label = @Translation("Deny submission"),
 *   category = @Translation("RII block")
 * )
 */
class DenyBlock extends BlockBase {

  /**
   *{@inheritdoc}
   */
  public function build() {
    $form = \Drupal::formBuilder()->getForm('Drupal\rii_forms\Form\DenyForm');
    return $form;
  }
}
