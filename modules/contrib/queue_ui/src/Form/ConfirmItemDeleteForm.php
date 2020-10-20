<?php

namespace Drupal\queue_ui\Form;

use Drupal\Core\Form\ConfirmFormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Messenger\Messenger;
use Drupal\Core\Url;
use Drupal\queue_ui\QueueUIManager;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Class ConfirmItemDeleteForm
 * @package Drupal\queue_ui\Form
 */
class ConfirmItemDeleteForm extends ConfirmFormBase {

  /**
   * @var string
   */
  protected $queue_name;

  /**
   * @var string
   */
  protected $queue_item;

  /**
   * @var \Drupal\queue_ui\QueueUIManager
   */
  private $queueUIManager;

  /**
   * ConfirmItemDeleteForm constructor.
   *
   * @param \Drupal\Core\Messenger\Messenger $messenger
   * @param \Drupal\queue_ui\QueueUIManager $queueUIManager
   */
  public function __construct(Messenger $messenger, QueueUIManager $queueUIManager) {
    $this->messenger = $messenger;
    $this->queueUIManager = $queueUIManager;
  }

  /**
   * @param \Symfony\Component\DependencyInjection\ContainerInterface $container
   * @return static
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('messenger'),
      $container->get('plugin.manager.queue_ui')
    );
  }

  /**
   * {@inheritdoc}
   */
  public function getQuestion() {
<<<<<<< HEAD
    return $this->t('Are you sure you want to delete queue item %queue_item?', ['%queue_item' => $this->queue_item]);
=======
    return t('Are you sure you want to delete queue item %queue_item?', ['%queue_item' => $this->queue_item]);
>>>>>>> ca7e00e50634fae43855b6e4a52caf59e87f7c95
  }

  /**
   * {@inheritdoc}
   */
  public function getDescription() {
<<<<<<< HEAD
    return $this->t('This action cannot be undone and will force the deletion of the item even if it is currently being processed.');
=======
    return t('This action cannot be undone and will force the deletion of the item even if it is currently being processed.');
>>>>>>> ca7e00e50634fae43855b6e4a52caf59e87f7c95
  }

  /**
   * {@inheritdoc}
   */
  public function getCancelUrl() {
    return Url::fromRoute('queue_ui.inspect', ['queue_name' => $this->queue_name]);
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'queue_ui_confirm_item_delete_form';
  }

  /**
   * {@inheritdoc}
   *
   * @param bool $queue_name
   * @param bool $queue_item
   */
  public function buildForm(array $form, FormStateInterface $form_state, $queue_name = FALSE, $queue_item = FALSE) {
    $this->queue_name = $queue_name;
    $this->queue_item = $queue_item;

    return parent::buildForm($form, $form_state);
  }

  /**
   * @param array $form
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $queue_ui = $this->queueUIManager->fromQueueName($this->queue_name);
    $queue_ui->deleteItem($this->queue_item);

    $this->messenger->addMessage("Deleted queue item " . $this->queue_item);
    $form_state->setRedirectUrl(Url::fromRoute('queue_ui.inspect', ['queue_name' => $this->queue_name]));
  }
}
