<?php

namespace Drupal\civiccookiecontrol\Form;

use Drupal\Core\Entity\EntityConfirmFormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Url;

/**
 * Form to delete Alternative Languages.
 */
class AltLanguageDeleteForm extends EntityConfirmFormBase {

  /**
   * {@inheritdoc}
   */
  public function getQuestion() {
    return $this->t('Are you sure you want to delete Alternative Language %name?', ['%name' => $this->entity->label()]);
  }

  /**
   * {@inheritdoc}
   */
  public function getCancelUrl() {
    return new Url('entity.altlanguage.collection');
  }

  /**
   * {@inheritdoc}
   */
  public function getConfirmText() {
    return $this->t('Delete Alternative Language');
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $this->entity->delete();
    \Drupal::messenger()->addMessage($this->t('Alternative Language %label has been deleted.', ['%label' => $this->entity->label()]));
    \Drupal::cache()->delete('civiccookiecontrol_config');
    $form_state->setRedirectUrl($this->getCancelUrl());
  }

}
