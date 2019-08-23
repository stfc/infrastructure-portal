<?php
/**
 * @file
 * Contains \Drupal\rii_mass_mail\Form\MailForm.
 */
namespace Drupal\rii_mass_mail\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class MailQueueForm extends FormBase {
  /**
   * {@inheritdoc}
   */
  public function getFormID() {
    return 'rii_mail_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['subject'] = array(
      '#type' => 'textfield',
      '#title' => t('Enter email subject'),
      '#description' => t('Enter a subject(title) for the email'),
      '#required' => TRUE,
    );
    $form['body'] = array(
      '#type' => 'textarea',
      '#title' => t('Enter email body text'),
      '#description' => t('Enter the body text of the email you wish to send. This will be queued to be sent to owners of all infrastructures that have not been updated since I added them.'),
      '#required' => TRUE,
    );

    $form['actions']['#type'] = 'actions';
    $form['actions']['submit'] = array(
      '#type' => 'submit',
      '#value' => $this->t('Queue mail'),
      '#button_type' => 'success',
    );

    return $form;
  }

  public function submitForm(array &$form, FormStateInterface $form_state) {
    $nids = \Drupal::entityQuery('node')->condition('type', 'rii')->execute();
    $nodes = \Drupal\node\Entity\Node::loadMultiple($nids);
    foreach ($nodes as $node) {
      if ($node->getRevisionCreationTime() == 1563793157) {
        $user = $node->getOwner();
        simple_mail_queue($from = NULL, $to = $user->getEmail(), $subject = $form_state->getValue('subject'), $body = $form_state->getValue('body'));
      }
    }
    drupal_set_message(t("Mail queued"));
  }

}

