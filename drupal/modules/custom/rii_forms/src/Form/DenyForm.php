<?php
/**
 * @file
 * Contains \Drupal\rii_forms\Form\DenyForm.
 */
namespace Drupal\rii_forms\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class DenyForm extends FormBase {
  /**
   * {@inheritdoc}
   */
  public function getFormID() {
    return 'rii_deny_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['reason'] = array(
      '#type' => 'textarea',
      '#title' => t('(Data managers) Deny submission'),
      '#description' => t('Please enter the reason for denying this submission. This will be sent to the author of the submission in an email. They will be given your account email address so that they can respond with queries. A denied submission will not be deleted and can be retrieved via the edit screen if there is a succesful appeal. Delete via the content page if desired.'),
      '#required' => TRUE,
    );
    
    $form['actions']['#type'] = 'actions';
    $form['actions']['submit'] = array(
      '#type' => 'submit',
      '#value' => $this->t('Deny'),
      '#button_type' => 'danger',
    );
    return $form;
  }

  public function submitForm(array &$form, FormStateInterface $form_state) {
    $node = \Drupal::routeMatch()->getParameter('node');
    $node->set("moderation_state", "denied_delete_");
    $node->set("field_reason_for_info_request_re", $form_state->getValue('reason'));
    $node->field_q_6a->locality = "";  //Geocoder breaks if the address field has a region(locality) set
    $node->save();
    drupal_set_message(t("Denial notification sent."));
  }

}

