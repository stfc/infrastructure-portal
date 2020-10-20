<?php

namespace Drupal\rii_invitation\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

use Drupal\Core\Queue\QueueFactory;
use Drupal\Core\Queue\QueueInterface;
use Drupal\Core\Queue\QueueWorkerInterface;
use Drupal\Core\Queue\QueueWorkerManagerInterface;
use Drupal\Core\Queue\SuspendQueueException;
use Symfony\Component\DependencyInjection\ContainerInterface;

class SendForm extends FormBase {

  protected $queueFactory;
  protected $queueManager;

  public function __construct(QueueFactory $queue, QueueWorkerManagerInterface $queue_manager) {
    $this->queueFactory = $queue;
    $this->queueManager = $queue_manager;
  }

  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('queue'),
      $container->get('plugin.manager.queue_worker')
    );
  }

  public function getFormId() {
    return 'send_form';
  }

  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['actions']['#type'] = 'actions';
    $form['actions']['submit_send_mail'] = array(
      '#type' => 'submit',
      '#value' => $this->t('Send mail'),
    );
    return $form;
  }

  public function submitForm(array &$form, FormStateInterface $form_state) {
    $queue = $this->queueFactory->get('simple_mail_queue');
    $queue_worker = $this->queueManager->createInstance('simple_mail_queue');
    
    while($item = $queue->claimItem()) {
      try {
        $queue_worker->processItem($item->data);
        $queue->deleteItem($item);
      }
      catch (SuspendQueueException $e) {
        $queue->releaseItem($item);
        break;
      }
      catch (\Exception $e) {
        watchdog_exception('npq', $e);
      }
    }
  }

}
