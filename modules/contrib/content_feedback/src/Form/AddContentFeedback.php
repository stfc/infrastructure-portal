<?php

namespace Drupal\content_feedback\Form;

use Drupal\Core\Ajax\AjaxResponse;
use Drupal\Core\Ajax\ReplaceCommand;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Render\RendererInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Extends FormBase.
 *
 * @inheritdoc
 */
class AddContentFeedback extends FormBase {

  /**
   * The content feedback config.
   *
   * @var \Drupal\Core\Config\ImmutableConfig
   */
  protected $config;

  /**
   * The rendering service.
   *
   * @var \Drupal\Core\Render\RendererInterface
   */
  protected $renderer;

  /**
   * Constructs AddContentFeedback object.
   *
   * @param \Drupal\Core\Config\ConfigFactoryInterface $config_factory
   *   The config factory service.
   * @param \Drupal\Core\Render\RendererInterface $renderer
   *   The renderer interface.
   */
  public function __construct(ConfigFactoryInterface $config_factory, RendererInterface $renderer) {
    $this->config = $config_factory->get('content_feedback.settings');
    $this->renderer = $renderer;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    // Instantiates this form class.
    return new static(
      $container->get('config.factory'),
      $container->get('renderer')
    );
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'content_feedback_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $name = $this->config->get('name');
    $email = $this->config->get('email');
    $path = $this->getRequest()->server->get('HTTP_REFERER') ?: '/';

    $form['#prefix'] = '<div id="modal_form">';
    $form['#suffix'] = '</div>';

    $form['status_messages'] = [
      '#type' => 'status_messages',
      '#weight' => -10,
    ];

    $form['name'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Name'),
      '#default_value' => $this->currentUser()->getAccountName(),
      '#required' => ($name['required'] === 'required') ? TRUE : FALSE,
    ];

    $form['email'] = [
      '#type' => 'email',
      '#title' => $this->t('Email'),
      '#default_value' => $this->currentUser()->getEmail(),
      '#required' => ($email['required'] === 'required') ? TRUE : FALSE,
    ];

    $form['message'] = [
      '#type' => 'textarea',
      '#title' => $this->t('Do you have any suggestions to make this page better ?'),
      '#rows' => 3,
      '#required' => TRUE,
    ];

    $form['path'] = [
      '#type' => 'hidden',
      '#title' => $this->t('Feedback Page'),
      '#value' => $path,
      '#required' => TRUE,
    ];

    $form['ipaddress'] = [
      '#type' => 'hidden',
      '#title' => $this->t('IP Address'),
      '#value' => $this->getRequest()->getClientIP(),
      '#required' => TRUE,
    ];

    $form['actions'] = ['#type' => 'actions'];
    $form['actions']['send'] = [
      '#type' => 'submit',
      '#value' => $this->t('Submit'),
      '#ajax' => [
        'callback' => [$this, 'submitContentFeedback'],
      ],
    ];

    if ($name['show'] === 0) {
      unset($form['container']['name']);
    }

    if ($email['show'] === 0) {
      unset($form['container']['email']);
    }

    return $form;
  }

  /**
   * FormInterface submitForm method must be declared.
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {}

  /**
   * AJAX callback handler that handles content feedback submission.
   */
  public function submitContentFeedback(array $form, FormStateInterface $form_state) {
    $response = new AjaxResponse();

    // If there are any form errors, re-display the form.
    if ($form_state->hasAnyErrors()) {
      $response->addCommand(new ReplaceCommand('#modal_form', $form));
    }
    else {
      $values = $form_state->getValues();
      $name = isset($values['name']) ? $values['name'] : NULL;
      $email = isset($values['email']) ? $values['email'] : NULL;
      $message = $values['message'];
      $path = $values['path'];
      $ipaddress = $values['ipaddress'];
      $timestamp = time();
      ContentFeedbackClass::addContentFeedback($name, $email, $message, $path, $ipaddress, $timestamp);
      $element = [
        '#type' => 'markup',
        '#markup' => $this->t('Your content feedback has been submitted successfully.'),
        '#prefix' => '<div id="success-message">',
        '#suffix' => '</div>',
      ];
      $response->addCommand(new ReplaceCommand('#modal_form', $this->renderer->render($element)));
    }

    return $response;
  }

}
