<?php
/**
 * @file
 * Contains \Drupal\rii_forms\Form\ApproveForm.
 */
namespace Drupal\rii_forms\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class ApproveForm extends FormBase {
  /**
   * {@inheritdoc}
   */
  public function getFormID() {
    return 'rii_approve_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['actions']['#type'] = 'actions';
    $form['actions']['submit'] = array(
      '#type' => 'submit',
      '#value' => $this->t('Approve'),
      '#button_type' => 'success',
    );
    return $form;
  }

  public function submitForm(array &$form, FormStateInterface $form_state) {
    $node = \Drupal::routeMatch()->getParameter('node');
    $node->set("moderation_state", "published");
    $node->field_q_6a->locality = "";  //Geocoder breaks if the address field has a region(locality) set
    $node->save();
    drupal_set_message(t("RII published."));
  }

}

