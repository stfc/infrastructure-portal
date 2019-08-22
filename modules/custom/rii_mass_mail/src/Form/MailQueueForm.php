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
      '#description' => t('Enter the body text of the email you wish to send. This will be queued to be sent to all users who have not logged in yet.'),
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
    $users = user_load_multiple();
    foreach ($users as $user) {
      if ($user->getLastAccessedTime() == 0) {
        simple_mail_queue($from = NULL, $to = $user->getEmail(), $subject = $form_state->getValue('subject'), $body = $form_state->getValue('body'));
      }
    }
    drupal_set_message(t("Mail queued"));
  }

}

