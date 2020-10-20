<?php

namespace Drupal\Tests\smtp\Unit\Plugin\Mail;

use Drupal\Component\Utility\EmailValidator;
use Drupal\Component\Utility\EmailValidatorInterface;
<<<<<<< HEAD
=======
use Drupal\Core\Config\Config;
use Drupal\Core\Config\ConfigFactoryInterface;
>>>>>>> ca7e00e50634fae43855b6e4a52caf59e87f7c95
use Drupal\Core\File\FileSystem;
use Drupal\Core\File\MimeType\MimeTypeGuesser;
use Drupal\Core\Logger\LoggerChannelFactoryInterface;
use Drupal\Core\Logger\LoggerChannelInterface;
use Drupal\Core\Messenger\Messenger;
use Drupal\Core\Session\AccountProxy;
use Drupal\Core\StringTranslation\TranslationInterface;
use Drupal\smtp\Plugin\Mail\SMTPMailSystem;
use Drupal\Tests\UnitTestCase;
use PHPMailer\PHPMailer\PHPMailer;
<<<<<<< HEAD
use PHPMailer\PHPMailer\Exception as PHPMailerException;
=======
>>>>>>> ca7e00e50634fae43855b6e4a52caf59e87f7c95
use Prophecy\Argument;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Validate requirements for SMTPMailSystem.
 *
 * @group SMTP
 */
class SMTPMailSystemTest extends UnitTestCase {

<<<<<<< HEAD
  /**
   * The email validator.
   *
   * @var \Drupal\Component\Utility\EmailValidatorInterface
   */
  protected $emailValidator;

  /**
   * {@inheritdoc}
   */
  protected function setUp() {
    $this->mockConfigFactory = $this->getConfigFactoryStub([
      'smtp.settings' => ['smtp_timeout' => 30],
      'system.site' => ['name' => 'Mock site name'],
    ]);
=======
  private $emailValidator;

  /**
   * Test setup.
   */
  public function setup() {
    $this->mockConfig = $this->prophesize(Config::class);
    $this->mockConfigFactory = $this->prophesize(ConfigFactoryInterface::class);
    $this->mockConfigFactory->get('smtp.settings')->willReturn($this->mockConfig->reveal());
    $this->mockConfigFactory->getEditable('smtp.settings')->willReturn($this->mockConfig->reveal());
>>>>>>> ca7e00e50634fae43855b6e4a52caf59e87f7c95

    $this->mockLogger = $this->prophesize(LoggerChannelFactoryInterface::class);
    $this->mockLogger->get('smtp')->willReturn($this->prophesize(LoggerChannelInterface::class));
    $this->mockMessenger = $this->prophesize(Messenger::class);
    $this->mockCurrentUser = $this->prophesize(AccountProxy::class);
    $this->mockFileSystem = $this->prophesize(FileSystem::class);
    $this->mimeTypeGuesser = $this->prophesize(MimeTypeGuesser::class);

    $mockContainer = $this->mockContainer = $this->prophesize(ContainerInterface::class);
<<<<<<< HEAD
    $mockContainer->get('config.factory')->willReturn($this->mockConfigFactory);
=======
    $mockContainer->get('config.factory')->willReturn($this->mockConfigFactory->reveal());
>>>>>>> ca7e00e50634fae43855b6e4a52caf59e87f7c95
    $mockContainer->get('logger.factory')->willReturn($this->mockLogger->reveal());
    $mockContainer->get('messenger')->willReturn($this->mockMessenger->reveal());
    $mockContainer->get('current_user')->willReturn($this->mockCurrentUser->reveal());
    $mockContainer->get('file_system')->willReturn($this->mockFileSystem->reveal());
    $mockContainer->get('file.mime_type.guesser')->willReturn($this->mimeTypeGuesser->reveal());

    $mockStringTranslation = $this->prophesize(TranslationInterface::class);
    $mockStringTranslation->translate(Argument::any())->willReturnArgument(0);
    $mockStringTranslation->translate(Argument::any(), Argument::any())->willReturnArgument(0);
    $mockStringTranslation->translateString(Argument::any())->willReturn('.');
    $mockContainer->get('string_translation')->willReturn($mockStringTranslation->reveal());

    // Email validator.
    $this->emailValidator = new EmailValidator();
    $mockContainer->get('email.validator')->willReturn($this->emailValidator);
    \Drupal::setContainer($this->mockContainer->reveal());
  }

  /**
   * Provides scenarios for getComponents().
   */
  public function getComponentsProvider() {
    return [
      [
        // Input.
        'name@example.com',
        // Expected.
        [
          'name' => '',
          'email' => 'name@example.com',
        ],
      ],
      [
        ' name@example.com',
        [
          'name' => '',
          'input' => 'name@example.com',
          'email' => 'name@example.com',
        ],
      ],
      [
        'name@example.com ',
        [
          'name' => '',
          'input' => 'name@example.com',
          'email' => 'name@example.com',
        ],
      ],
      [
        'some name <address@example.com>',
        [
          'name' => 'some name',
          'email' => 'address@example.com',
        ],
      ],
      [
        '"some name" <address@example.com>',
        [
          'name' => 'some name',
          'email' => 'address@example.com',
        ],
      ],
      [
        '<address@example.com>',
        [
          'name' => '',
          'email' => 'address@example.com',
        ],
      ],
    ];
  }

  /**
   * Test getComponents().
   *
   * @dataProvider getComponentsProvider
   */
  public function testGetComponents($input, $expected) {
<<<<<<< HEAD
    $mailSystem = new SMTPMailSystemTestHelper([], '', [], $this->mockLogger->reveal(), $this->mockMessenger->reveal(), $this->emailValidator, $this->mockConfigFactory, $this->mockCurrentUser->reveal(), $this->mockFileSystem->reveal(), $this->mimeTypeGuesser->reveal());
=======
    $mailSystem = new SMTPMailSystemTestHelper([], '', [], $this->mockLogger->reveal(), $this->mockMessenger->reveal(), $this->emailValidator, $this->mockConfigFactory->reveal(), $this->mockCurrentUser->reveal(), $this->mockFileSystem->reveal(), $this->mimeTypeGuesser->reveal());
>>>>>>> ca7e00e50634fae43855b6e4a52caf59e87f7c95

    $ret = $mailSystem->publiGetComponents($input);

    if (!empty($expected['input'])) {
      $this->assertEquals($expected['input'], $ret['input']);
    }
    else {
      $this->assertEquals($input, $ret['input']);
    }

    $this->assertEquals($expected['name'], $ret['name']);
    $this->assertEquals($expected['email'], $ret['email']);
  }

  /**
   * Provides scenarios for testMailValidator().
   */
  public function mailValidatorProvider() {
    $emailValidatorPhpMailerDefault = new EmailValidatorPhpMailerDefault();
    $emailValidatorDrupal = new EmailValidator();
    return [
      'Without umlauts, PHPMailer default validator, no exception' => [
        'test@drupal.org',
        'PhpUnit Localhost <phpunit@localhost.com>',
        $emailValidatorPhpMailerDefault,
        NULL,
      ],
      'With umlauts in local part, PHPMailer default validator, exception' => [
        'testmüller@drupal.org',
        'PhpUnit Localhost <phpunit@localhost.com>',
        $emailValidatorPhpMailerDefault,
<<<<<<< HEAD
        PHPMailerException::class,
=======
        \PHPMailer\PHPMailer\Exception::class,
>>>>>>> ca7e00e50634fae43855b6e4a52caf59e87f7c95
      ],
      'With umlauts in domain part, PHPMailer default validator, exception' => [
        'test@müllertest.de',
        'PhpUnit Localhost <phpunit@localhost.com>',
        $emailValidatorPhpMailerDefault,
<<<<<<< HEAD
        PHPMailerException::class,
=======
        \PHPMailer\PHPMailer\Exception::class,
>>>>>>> ca7e00e50634fae43855b6e4a52caf59e87f7c95
      ],
      'Without top-level domain in domain part, PHPMailer default validator, exception' => [
        'test@drupal',
        'PhpUnit Localhost <phpunit@localhost.com>',
        $emailValidatorPhpMailerDefault,
<<<<<<< HEAD
        PHPMailerException::class,
=======
        \PHPMailer\PHPMailer\Exception::class,
>>>>>>> ca7e00e50634fae43855b6e4a52caf59e87f7c95
      ],
      'Without umlauts, Drupal mail validator, no exception' => [
        'test@drupal.org',
        'PhpUnit Localhost <phpunit@localhost.com>',
        $emailValidatorDrupal,
        NULL,
      ],
      'With umlauts in local part, Drupal mail validator, no exception' => [
        'testmüller@drupal.org',
        'PhpUnit Localhost <phpunit@localhost.com>',
        $emailValidatorDrupal,
        NULL,
      ],
      'With umlauts in domain part, Drupal mail validator, no exception' => [
        'test@müllertest.de',
        'PhpUnit Localhost <phpunit@localhost.com>',
        $emailValidatorDrupal,
        NULL,
      ],
      'Without top-level domain in domain part, Drupal mail validator, no exception' => [
        'test@drupal',
        'PhpUnit Localhost <phpunit@localhost.com>',
        $emailValidatorDrupal,
        NULL,
      ],
    ];
  }

<<<<<<< HEAD
=======

>>>>>>> ca7e00e50634fae43855b6e4a52caf59e87f7c95
  /**
   * Test mail() with focus on the mail validator.
   *
   * @dataProvider mailValidatorProvider
   */
  public function testMailValidator(string $to, string $from, EmailValidatorInterface $validator, $exception) {
    $this->emailValidator = $validator;

<<<<<<< HEAD
    $mailSystem = new SMTPMailSystemTestHelper(
      [],
=======
    $mailSystem = new SMTPMailSystemTestHelper([],
>>>>>>> ca7e00e50634fae43855b6e4a52caf59e87f7c95
      '',
      [],
      $this->mockLogger->reveal(),
      $this->mockMessenger->reveal(),
      $validator,
<<<<<<< HEAD
      $this->mockConfigFactory,
      $this->mockCurrentUser->reveal(),
      $this->mockFileSystem->reveal(),
      $this->mimeTypeGuesser->reveal()
    );
=======
      $this->mockConfigFactory->reveal(),
      $this->mockCurrentUser->reveal(),
      $this->mockFileSystem->reveal(),
      $this->mimeTypeGuesser->reveal());
>>>>>>> ca7e00e50634fae43855b6e4a52caf59e87f7c95
    $message = [
      'to' => $to,
      'from' => $from,
      'body' => 'Some test content for testMailValidatorDrupal',
      'headers' => [
        'content-type' => 'text/plain',
      ],
      'subject' => 'testMailValidatorDrupal',
    ];

    if (isset($exception)) {
      $this->expectException($exception);
    }
<<<<<<< HEAD
    // Call function.
    $result = $mailSystem->mail($message);

    // More important than the result is that no exception was thrown, if
    // $exception is unset.
=======
    // Call function
    $result = $mailSystem->mail($message);

    // More important than the result is that no exception was thrown, if
    // $exception is unset
>>>>>>> ca7e00e50634fae43855b6e4a52caf59e87f7c95
    self::assertTrue($result);
  }

}

/**
 * Test helper for SMTPMailSystemTest.
 */
class SMTPMailSystemTestHelper extends SMTPMailSystem {

  /**
   * Exposes getComponents for testing.
   */
  public function publiGetComponents($input) {
    return $this->getComponents($input);
  }

  /**
   * Dummy of smtpMailerSend.
   */
<<<<<<< HEAD
  public function smtpMailerSend($mailerArr) {
    return TRUE;
=======
  function smtpMailerSend($mailerArr) {
    return true;
>>>>>>> ca7e00e50634fae43855b6e4a52caf59e87f7c95
  }

}

/**
<<<<<<< HEAD
 * An adaptor class wrapping the default PHPMailer validator.
 */
class EmailValidatorPhpMailerDefault implements EmailValidatorInterface {

  /**
   * {@inheritdoc}
   *
   * This function validates in same way the PHPMailer class does in its
   * default behavior.
   */
=======
 * Test helper email validator implementation for default behaviour of PHPMailer.php
 */
class EmailValidatorPhpMailerDefault implements EmailValidatorInterface {

  // This function validates in same way the PHPMailer class does in its default behaviour.
>>>>>>> ca7e00e50634fae43855b6e4a52caf59e87f7c95
  public function isValid($email) {
    PHPMailer::$validator = 'php';
    return PHPMailer::validateAddress($email);
  }

}
