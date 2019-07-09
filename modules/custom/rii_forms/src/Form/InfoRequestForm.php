<?php
/**
 * @file
 * Contains \Drupal\rii_forms\Form\InfoRequestForm.
 */
namespace Drupal\rii_forms\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class InfoRequestForm extends FormBase {
  /**
   * {@inheritdoc}
   */
  public function getFormID() {
    return 'rii_info_request_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['reason'] = array(
      '#type' => 'textarea',
      '#title' => t('(Data managers) Request more information'),
      '#description' => t('Please enter the reason for your info request. This will be sent to the author of the submission in an email. They will be given your account email address so that they can respond with queries.'),
      '#required' => TRUE,
    );
    
    $form['actions']['#type'] = 'actions';
    $form['actions']['submit'] = array(
      '#type' => 'submit',
      '#value' => $this->t('Submit info request'),
      '#button_type' => 'primary',
    );
    return $form;
  }

  public function submitForm(array &$form, FormStateInterface $form_state) {
    $node = \Drupal::routeMatch()->getParameter('node');
    $node->set("moderation_state", "more_info_needed");
    $node->set("field_reason_for_info_request_re", $form_state->getValue('reason'));
    $node->field_q_6a->locality = "";  //Geocoder breaks if the address field has a region(locality) set
    $node->save();
    drupal_set_message(t("Info request sent."));
  }

}

