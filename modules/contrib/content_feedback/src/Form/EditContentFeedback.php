<?php

namespace Drupal\content_feedback\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Messenger\MessengerInterface;
use Drupal\Core\Url;
use Drupal\Core\Link;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

/**
 * Extends FormBase.
 *
 * @inheritdoc
 */
class EditContentFeedback extends FormBase {

  protected $id;
  protected $feedback;
  protected $exists;

  /**
   * Setting Form Id.
   *
   * @inheritdoc
   */
  public function getFormId() {
    return 'content_feedback_edit';
  }

  /**
   * Building Form.
   *
   * @inheritdoc
   */
  public function buildForm(array $form, FormStateInterface $form_state, $id = '') {
    $this->id = $id;
    $this->exists = ContentFeedbackClass::checkFeedback($this->id);

    if ($this->exists > 0) {
      $this->feedback = ContentFeedbackClass::getFeedbackById($this->id);

      $url = Url::fromRoute('content_feedback_list.content')->toString();
      $deleteLink = Link::createFromRoute('Delete', 'content_feedback_delete.form',
        ['id' => $this->id])->toString();

      $form['path'] = [
        '#type' => 'textfield',
        '#title' => $this->t('Url'),
        '#default_value' => $this->feedback['path'],
      ];

      $form['name'] = [
        '#type' => 'textfield',
        '#title' => $this->t('Name'),
        '#default_value' => $this->feedback['name'],
      ];

      $form['email'] = [
        '#type' => 'textfield',
        '#title' => $this->t('Email'),
        '#default_value' => $this->feedback['email'],
      ];

      $form['ipaddress'] = [
        '#type' => 'textfield',
        '#title' => $this->t('IP Address'),
        '#default_value' => $this->feedback['ipaddress'],
      ];

      $form['status'] = [
        '#type' => 'radios',
        '#options' => ['1' => $this->t('Open'), '2' => $this->t('Resolved')],
        '#title' => $this->t('Status'),
        '#default_value' => $this->feedback['status'],
      ];

      $form['message'] = [
        '#type' => 'textarea',
        '#title' => $this->t('Feedback Message'),
        '#default_value' => $this->feedback['message'],
        '#rows' => 3,
        '#required' => TRUE,
      ];

      $form['actions'] = [
        '#type' => 'actions',
      ];

      $form['actions']['submit'] = [
        '#type' => 'submit',
        '#value' => $this->t('Submit'),
      ];

      $form['actions']['cancel'] = [
        '#type' => 'button',
        '#value' => $this->t('Cancel'),
        '#attributes' => ['onClick' => 'location.href = "' . $url . '"; event.preventDefault();'],
      ];
      $form['actions']['delete'] = [
        '#type' => 'markup',
        '#markup' => $deleteLink,
      ];

      return $form;
    }
    else {
      throw new NotFoundHttpException();
    }
  }

  /**
   * Submit Form.
   *
   * @inheritdoc
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $redirectUrl = Url::fromRoute('content_feedback_list.content');
    $values = $form_state->getValues();
    $status = $values['status'];
    $name = $values['name'];
    $email = $values['email'];
    $ip = $values['ipaddress'];
    $message = $values['message'];
    $path = $values['path'];
    $updated = ContentFeedbackClass::updateFeedback($status, $name, $email, $ip, $message, $path, $this->id);
    if ($updated > 0) {
      $form_state->setRedirectUrl($redirectUrl);
      $this->messenger()->addMessage($this->t('Content Feedback has been updated.'));
    }
    else {
      $this->messenger()->addMessage($this->t('Content Feedback not updated.'), MessengerInterface::TYPE_ERROR);
    }
  }

}
