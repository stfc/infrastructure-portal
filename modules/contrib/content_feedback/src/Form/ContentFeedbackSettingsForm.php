<?php

namespace Drupal\content_feedback\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Content feedback settings form.
 */
class ContentFeedbackSettingsForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'content_feedback_settings';
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return ['content_feedback.settings'];
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('content_feedback.settings');

    $form['global'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Enable content feedback globally'),
      '#default_value' => $config->get('global'),
    ];

    // Get list of content types.
    $node_type = node_type_get_names();
    $form['content_types'] = [
      '#type' => 'checkboxes',
      '#options' => $node_type,
      '#title' => $this->t('List of content types on which you want content feedback.'),
      '#description' => $this->t('Select Content type for which you want to display the content feedback.'),
      '#default_value' => is_array($config->get('content_types')) ? array_filter($config->get('content_types')) : [NULL],
      '#states' => [
        'visible' => [
          ':input[name="global"]' => ['checked' => FALSE],
        ],
      ],
    ];

    $form['feedback_form'] = [
      '#type' => 'item',
      '#title' => $this->t('Dialog Settings'),
    ];

    $form['dialog_size'] = [
      '#type'    => 'checkbox',
      '#title'   => $this->t('Auto Resize'),
      '#default_value' => $config->get('dialog_size'),
    ];

    $form['dialog_width'] = [
      '#type'    => 'number',
      '#title'   => $this->t('Width'),
      '#description' => $this->t('Width in %.'),
      '#min' => 0,
      '#max' => 100,
      '#default_value' => !empty($config->get('dialog_width')) ? $config->get('dialog_width') : 40,
      '#states' => [
        'visible' => [
          ':input[name="dialog_size"]' => ['checked' => FALSE],
        ],
      ],
    ];

    $form['name'] = [
      '#type' => 'checkboxes',
      '#title' => $this->t('Name'),
      '#options' => ['show' => $this->t('Show'), 'required' => $this->t('Required')],
      '#default_value' => !empty($config->get('name')) ? $config->get('name') : ['show'],
    ];

    $form['email'] = [
      '#type' => 'checkboxes',
      '#title' => $this->t('Email'),
      '#options' => ['show' => $this->t('Show'), 'required' => $this->t('Required')],
      '#default_value' => !empty($config->get('email')) ? $config->get('email') : ['show'],
    ];

    $form['disable'] = [
      "#type" => 'textarea',
      '#title' => $this->t('Disable'),
      '#description' => $this->t('Specify paths for which content feedback should be disabled by listing them one per line. Ex: "/about"'),
      '#default_value' => $config->get('disable'),
    ];

    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $config = $this->config('content_feedback.settings');
    $config->set('global', $form_state->getValue('global'));
    $config->set('dialog_size', $form_state->getValue('dialog_size'));
    $config->set('dialog_width', $form_state->getValue('dialog_width'));
    $config->set('content_types', $form_state->getValue('content_types'));
    $config->set('name', $form_state->getValue('name'));
    $config->set('email', $form_state->getValue('email'));
    $config->set('disable', $form_state->getValue('disable'));
    $config->save();

    parent::submitForm($form, $form_state);
  }

}
