<?php

namespace Drupal\civiccookiecontrol\Form;

use Drupal\Core\Entity\EntityConfirmFormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Url;

/**
 * The form to delete excluded countries.
 */
class ExcludedCountryDeleteForm extends EntityConfirmFormBase
{

    /**
     * {@inheritdoc}
     */
    public function getQuestion()
    {
        return $this->t('Are you sure you want to delete Excluded Country %name?', ['%name' => $this->entity->label()]);
    }

    /**
     * {@inheritdoc}
     */
    public function getCancelUrl()
    {
        return new Url('entity.excludedcountry.collection');
    }

    /**
     * {@inheritdoc}
     */
    public function getConfirmText()
    {
        return $this->t('Delete Excluded Country');
    }

    /**
     * {@inheritdoc}
     */
    public function submitForm(array &$form, FormStateInterface $form_state)
    {
        $this->entity->delete();
        \Drupal::messenger()->addMessage($this->t('Excluded Country %label has been deleted.', ['%label' => $this->entity->label()]));
        \Drupal::cache()->delete('civiccookiecontrol_config');
        $form_state->setRedirectUrl($this->getCancelUrl());
    }

}
