<?php

namespace Drupal\content_feedback\Form;

use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Form\ConfirmFormBase;
use Drupal\Core\Url;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

/**
 * Extends ConfirmFormBase.
 *
 * @inheritdoc
 */
class DeleteContentFeedback extends ConfirmFormBase {
  protected $id;

  /**
   * Setting FormID.
   *
   * @inheritdoc
   */
  public function getFormId() {
    return 'content_feedback_delete';
  }

  /**
   * Setting Question text.
   *
   * @inheritdoc
   */
  public function getQuestion() {
    return $this->t('Are you sure you want to delete submission %id?', ['%id' => $this->id]);
  }

  /**
   * Setting Confirm Text.
   *
   * @inheritdoc
   */
  public function getConfirmText() {
    return $this->t('Delete');
  }

  /**
   * Setting Cancel Url.
   *
   * @inheritdoc
   */
  public function getCancelUrl() {
    return new Url('content_feedback_list.content');
  }

  /**
   * Building Delete Form.
   *
   * @inheritdoc
   */
  public function buildForm(array $form, FormStateInterface $form_state, $id = '') {
    $this->id = $id;
    $this->exists = ContentFeedbackClass::checkFeedback($this->id);

    if ($this->exists > 0) {
      return parent::buildForm($form, $form_state);
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
    $url = Url::fromRoute('content_feedback_list.content');
    ContentFeedbackClass::deleteContentFeedback($this->id);
    $this->messenger()->addMessage($this->t('Content Feedback has been deleted.'));
    $form_state->setRedirectUrl($url);
  }

}
