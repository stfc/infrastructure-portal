<?php

namespace Drupal\simple_mail\Plugin\Mail;

use Drupal\Core\Mail\Plugin\Mail\PhpMail;
use Drupal\Core\Mail\MailInterface;
use Drupal\Core\Mail\MailFormatHelper;

/**
 * Simple Mail backend.
 *
 * @Mail(
 *   id = "simple_mail",
 *   label = @Translation("Simple Mail"),
 *   description = @Translation("Send message with HTML mail or plain text.")
 * )
 */
class SimpleMail extends PhpMail implements MailInterface {

  /**
   * {@inheritdoc}
   */
  public function format(array $message) {
    // Join the body array into one string.
    $message['body'] = implode("\n\n", $message['body']);

    // Wrap the mail body for sending.
    $message['body'] = MailFormatHelper::wrapMail($message['body']);

    return $message;
  }

}
