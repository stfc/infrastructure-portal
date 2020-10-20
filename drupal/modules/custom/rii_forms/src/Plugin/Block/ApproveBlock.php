<?php
/**
 * @file
 * Contains \Drupal\rii_forms\Plugin\Block\ApproveBlock.
 */

namespace Drupal\rii_forms\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormInterface;

/**
 * Provides an 'approve' block.
 *
 * @Block(
 *   id = "approve_block",
 *   admin_label = @Translation("Approve"),
 *   category = @Translation("RII block")
 * )
 */
class ApproveBlock extends BlockBase {

  /**
   *{@inheritdoc}
   */
  public function build() {
    $form = \Drupal::formBuilder()->getForm('Drupal\rii_forms\Form\ApproveForm');
    return $form;
  }
}
