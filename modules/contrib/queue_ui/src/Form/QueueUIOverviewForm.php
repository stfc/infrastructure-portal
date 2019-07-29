<?php

namespace Drupal\queue_ui\Form;

use Drupal\Core\Database\Database;
use Drupal\Core\Extension\ModuleHandler;
use Drupal\Core\Queue\QueueFactory;
use Drupal\Core\Queue\QueueInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\State\StateInterface;
use Drupal\Core\Url;
use Drupal\queue_ui\QueueUI;
use Drupal\user\PrivateTempStoreFactory;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class QueueUIOverviewForm
 * @package Drupal\queue_ui\Form
 */
class QueueUIOverviewForm extends FormBase {

  /**
   * The queue factory.
   *
   * @var \Drupal\Core\Queue\QueueFactory
   */
  protected $queueFactory;

  /**
   * The tempstore factory.
   *
   * @var \Drupal\user\PrivateTempStoreFactory
   */
  protected $tempStoreFactory;

  /**
   * The current user.
   *
   * @var \Drupal\Core\Session\AccountInterface
   */
  protected $currentUser;

  /**
   * The Drupal state storage.
   *
   * @var \Drupal\Core\State\StateInterface
   */
  protected $state;

  /**
   * The Drupal module handler.
   *
   * @var \Drupal\Core\Extension\ModuleHandler
   */
  protected $moduleHandler;

  /**
   * The database connection.
   *
   * @var \Drupal\Core\Database\Connection
   */
  protected $dbConnection;

  /**
   * QueueUIOverviewForm constructor.
   * @param \Drupal\Core\Queue\QueueFactory $queue_factory
   * @param \Drupal\user\PrivateTempStoreFactory $temp_store_factory
   * @param \Drupal\Core\Session\AccountInterface $current_user
   * @param \Drupal\Core\State\StateInterface $state
   * @param \Drupal\Core\State\StateInterface $state
   * @param \Drupal\Core\Extension\ModuleHandler $module_handler
   */
  public function __construct(QueueFactory $queue_factory, PrivateTempStoreFactory $temp_store_factory, AccountInterface $current_user, StateInterface $state, ModuleHandler $module_handler) {
    $this->queueFactory = $queue_factory;
    $this->tempStoreFactory = $temp_store_factory;
    $this->currentUser = $current_user;
    $this->state = $state;
    $this->moduleHandler = $module_handler;
    $this->dbConnection = Database::getConnection('default');
  }

  /**
   * @param \Symfony\Component\DependencyInjection\ContainerInterface $container
   * @return static
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('queue'),
      $container->get('user.private_tempstore'),
      $container->get('current_user'),
      $container->get('state'),
      $container->get('module_handler')
    );
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'queue_ui_overview_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['top'] = [
      'operation' => [
        '#type' => 'select',
        '#title' => t('Action'),
        '#options' => [
          'submitBatch' => t('Batch process'),
          'submitRelease' => t('Remove leases'),
          'submitClear' => t('Clear'),
        ],
      ],
      'actions' => [
        '#type' => 'container',
        '#attributes' => [
          'class' => ['form-actions'],
        ],
        'apply' => [
          '#type' => 'submit',
          '#tableselect' => TRUE,
          '#submit' => ['::submitBulkForm'],
          '#value' => t('Apply to selected items'),
        ],
      ],
    ];

    $form['queues'] = [
      '#type' => 'table',
      '#tableselect' => TRUE,
      '#header' => [
        'title' => t('Title'),
        'items' => t('Number of items'),
        'class' => t('Class'),
        'cron' => t('Cron time limit (seconds)'),
        'operations' => t('Operations'),
      ],
      '#empty' => t('No queues defined'),
    ];

    if ($this->moduleHandler->moduleExists('queue_order')) {
      // Add the dragable options for the form
      $form['queues']['#tabledrag'] = [
        [
          'action' => 'order',
          'relationship' => 'sibling',
          'group' => 'queue-order-weight',
        ],
      ];

      // Add the weight to the table header
      array_push($form['queues']['#header'], t('weight'));
    }

    // Get queues names.
    foreach (queue_ui_defined_queues() as $name => $queue_definition) {
      /** @var QueueInterface $queue */
      $queue = $this->queueFactory->get($name);
      $weight = (isset($queue_definition['weight']) ? $queue_definition['weight'] : 10);

      $namespace = explode('\\', get_class($queue));
      $class_name = array_pop($namespace);

      $operations = [];
      $class_info = QueueUI::get('Drupal\queue_ui\QueueUI' . $class_name);
      // If queue inspection is enabled for this class
      if (is_object($class_info) && $class_info->inspect) {
        $operations['inspect'] = [
          'title' => t('Inspect'),
          'url' => Url::fromUserInput("/" . QUEUE_UI_BASE . "/inspect/$name"),
        ];
      }

      $form['queues'][$name] = [
        'title' => [
          '#markup' => (string) $queue_definition['title'],
        ],
        'items' => [
          '#markup' => $queue->numberOfItems(),
        ],
        'class' => [
          '#markup' => $class_name
        ],
        'cron' => [
          '#type' => 'number',
          '#title' => t('Cron Time'),
          '#title_display' => 'hidden',
          '#placeholder' => t('Cron disabled'),
          '#value' => (isset($queue_definition['cron']['time']) ? $queue_definition['cron']['time'] : ''),
          '#parents' => [],
          '#name' => 'cron[' . $name . ']',
        ],
        'operations' => [
          '#type' => 'dropbutton',
          '#links' => $operations,
        ],
      ];

      // Enable sort if queue_order is enabled
      if ($this->moduleHandler->moduleExists('queue_order')) {
        $form['queues'][$name]['#attributes'] = ['class' => ['draggable']];
        $form['queues'][$name]['#weight'] = $weight;
        $form['queues'][$name]['weight'] = [
          '#type' => 'weight',
          '#title' => t('Weight for @title', ['@title' => $name]),
          '#title_display' => 'invisible',
          '#value' => $weight,
          '#parents' => [],
          '#name' => 'weight[' . $name . ']',
          // Classify the weight element for #tabledrag.
          '#attributes' => ['class' => ['queue-order-weight']],
        ];
      }
    }

    $form['cron'] = [
      '#type' => 'value',
    ];

    if ($this->moduleHandler->moduleExists('queue_order')) {
      $form['weight'] = [
        '#type' => 'value',
      ];
    }

    $form['botton'] = [
      'actions' => [
        '#type' => 'container',
        '#attributes' => [
          'class' => ['form-actions'],
        ],
        'apply' => [
          '#type' => 'submit',
          '#tableselect' => TRUE,
          '#submit' => ['::submitBulkForm'],
          '#value' => t('Apply to selected items'),
        ],
        'save' => [
          '#type' => 'submit',
          '#value' => t('Save changes'),
        ],
      ],
    ];

    return $form;
  }

  /**
   * We need this method, but each button has its own submit handler.
   *
   * @param array $form
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $form_state->cleanValues();

    foreach ($form_state->getValue('cron') as $name => $time) {
      $this->state->set('queue_ui_cron_' . $name, $time);
    }

    // Only save the weight if the queue_order module is available
    if ($this->moduleHandler->moduleExists('queue_order')){
      // Save the weight of the defined workers
      foreach ($form_state->getValue('weight') as $name => $weight) {
        $this->state->set('queue_ui_weight_' . $name, intval($weight));
      }
    }

    // Clear the cached plugin definition so that changes come into effect.
    \Drupal::service('plugin.manager.queue_worker')->clearCachedDefinitions();
  }

  /**
   * @param array $form
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   */
  public function submitBulkForm(array &$form, FormStateInterface $form_state) {
    if (in_array($form_state->getValue('operation'), [
      'submitBatch',
      'submitRelease',
      'submitClear'
    ])) {
      $selected_queues = array_filter($form_state->getValue('queues'));

      if (!empty($selected_queues)) {
        $this->{$form_state->getValue('operation')}($form_state, $selected_queues);
      }
    }
  }

  /**
   * Process queue(s) with batch.
   *
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   * @param $queues
   */
  public function submitBatch(FormStateInterface $form_state, $queues) {
    $batch = [
      'title' => $this->t('Processing queues'),
      'operations' => [],
      'finished' => ['\Drupal\queue_ui\QueueUIBatch', 'finish'],
    ];

    foreach ($queues as $queue_name) {
      $batch['operations'][] = ['\Drupal\queue_ui\QueueUIBatch::step', [$queue_name]];
    }

    batch_set($batch);
  }

  /**
   * Option to remove lease timestamps.
   *
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   * @param $queues
   */
  public function submitRelease(FormStateInterface $form_state, $queues) {
    foreach ($queues as $name) {
      $num_updated = $this->dbConnection->update('queue')
        ->fields([
          'expire' => 0,
        ])
        ->condition('name', $name, '=')
        ->execute();

      drupal_set_message(t('@count lease reset in queue @name', [
        '@count' => $num_updated,
        '@name' => $name
      ]));
    }
  }

  /**
   * Option to delete queue.
   *
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   * @param $queues
   */
  public function submitClear(FormStateInterface $form_state, $queues) {
    $this->tempStoreFactory->get('queue_ui_delete_queues')
      ->set($this->currentUser->id(), $queues);

    $form_state->setRedirect('queue_ui.confirm_delete_form');
  }
}
