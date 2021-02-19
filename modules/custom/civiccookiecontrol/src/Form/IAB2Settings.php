<?php

namespace Drupal\civiccookiecontrol\Form;

use Drupal\Component\Serialization\Json;
use Drupal\Core\Ajax\AjaxResponse;
use Drupal\Core\Ajax\AlertCommand;
use Drupal\Core\Ajax\CssCommand;
use Drupal\Core\Ajax\HtmlCommand;
use Drupal\Core\Ajax\InvokeCommand;
use Drupal\Core\Cache\CacheBackendInterface;
use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Core\Locale\CountryManager;
use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Link;
use Drupal\Core\Routing\RouteBuilderInterface;
use Drupal\dblog\Plugin\views\wizard\Watchdog;
use Drupal\node\Entity\Node;
use GuzzleHttp\Exception\RequestException;
use Symfony\Component\DependencyInjection\ContainerInterface;


/**
 * The configuration form for cookie control settings.
 */
class IAB2Settings extends ConfigFormBase {

  protected $countryManager;

  protected $itemsCount;

  protected $config;

  protected $cache;

  protected $routerBuilder;

  /**
   * Constructor.
   */
  public function __construct(CountryManager $countryManager, ConfigFactoryInterface $config, CacheBackendInterface $cache, RouteBuilderInterface $routeBuilder) {
    $this->countryManager = $countryManager;
    $this->config = $config->getEditable('iab2.settings');
    $this->cache = $cache;
    $this->routerBuilder = $routeBuilder;
    _check_cookie_categories();
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    // Instantiates this form class.
    return new static(
    // Load the service required to construct this class.
      $container->get('country_manager'),
      $container->get('config.factory'),
      $container->get('cache.data'),
      $container->get('router.builder')
    );
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'iab2_config_form';
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $configData = $this->config->get();
    foreach ($configData as $key => $configValue) {
      if (strpos($key, 'iab') !== FALSE) {
        if (is_array($form_state->getValue($key)) && array_key_exists('format', $form_state->getValue($key))) {
          $this->config->set($key, $form_state->getValue($key)['value']);
        }
        elseif (strpos($key, 'Text') !== FALSE) {
          if ($form_state->getValue($key) != '') {
            $this->config->set($key, str_replace([
              "\r\n",
              "\n",
              "\r",
            ], '', $form_state->getValue($key)))->save();
          }
        }
        else {
          $this->config->set($key, $form_state->getValue($key))->save();
        }
      }
    }
    $this->cache->delete('civiccookiecontrol_config');
    $this->routerBuilder->rebuild();
    parent::submitForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return ['iab2.settings'];
  }


  public function saveIAB2Option(array $form, FormStateInterface $form_state) {
    $response = new AjaxResponse();
    $this->config->set('iabCMP', $form_state->getValue('iabCMP'))->save();
    return $response;
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['iab'] = [
      '#type' => 'details',
      '#title' => $this->t('IAB V2.0 Settings'),
      '#open' => TRUE,
    ];

    $form['iab']['iabCMP'] = [
      '#type' => 'radios',
      '#title' => $this->t("Enable IAB (TCF V2.2) Support."),
      '#options' => [
        TRUE => $this->t("Yes"),
        FALSE => $this->t('No'),
      ],
      '#ajax' => [
        'callback' => [$this, 'saveIAB2Option'],
        'effect' => 'change',
        'progress' => [
          'type' => 'throbber',
          'message' => $this->t('Updating IAB...'),
        ],
      ],
      '#default_value' => $this->config->get('iabCMP') ? 1 : 0,
      '#description' => $this->t("Whether or not Cookie Control supports the IAB's TCF v2.2."),
    ];

    $form['iab']['iabSettings'] = [
      '#type' => 'details',
      '#title' => $this->t('IAB Settings'),
      '#open' => FALSE,
      '#states' => [
        // Action to take.
        'invisible' => [
          ':input[name=iabCMP]' => [
            'value' => 0,
          ],
        ],
      ],
    ];

    $form['iab']['iabSettings']['iabLanguage'] = [
      '#type' => 'textfield',
      '#title' => $this->t('IAB ISO Language Code'),
      '#description' => $this->t('Two letter ISO language code that should be used to display information about IAB purposes.'),
      '#default_value' => $this->config->get('iabLanguage'),
    ];

    $form['iab']['iabSettings']['iabPublisherCC'] = [
      '#type' => 'textfield',
      '#title' => $this->t('IAB Country code'),
      '#description' => $this->t('The country code of the country that determines legislation of reference. Commonly, this corresponds to the country in which the publisher’s business entity is established.'),
      '#default_value' => $this->config->get('iabPublisherCC'),
    ];

    $form['iab']['iabSettings']['iabPanelTitle'] = [
      '#type' => 'textarea',
      '#title' => $this->t('IAB Panel Title'),
      '#description' => $this->t('The title of the IAB Panel'),
      '#default_value' => $this->config->get('iabPanelTitle'),
    ];

    $form['iab']['iabSettings']['iabPanelIntro1'] = [
      '#type' => 'text_format',
      '#format' => 'full_html',
      '#title' => $this->t('IAB Panel Intro 1 Text'),
      '#description' => $this->t('IAB Panel Intro 1 Text'),
      '#default_value' => $this->config->get('iabPanelIntro1'),
    ];

    $form['iab']['iabSettings']['iabPanelIntro2'] = [
      '#type' => 'text_format',
      '#format' => 'full_html',
      '#title' => $this->t('IAB Panel Intro 2 Text'),
      '#description' => $this->t('IAB Panel Intro 2 Text'),
      '#default_value' => $this->config->get('iabPanelIntro2'),
    ];

    $form['iab']['iabSettings']['iabPanelIntro3'] = [
      '#type' => 'text_format',
      '#format' => 'full_html',
      '#title' => $this->t('IAB Panel Intro 3 Text'),
      '#description' => $this->t('IAB Panel Intro 3 Text'),
      '#default_value' => $this->config->get('iabPanelIntro3'),
    ];

    $form['iab']['iabSettings']['iabAboutIab'] = [
      '#type' => 'text_format',
      '#format' => 'full_html',
      '#title' => $this->t('About IAB'),
      '#description' => $this->t('About IAB text area.'),
      '#default_value' => $this->config->get('iabAboutIab'),
    ];

    $form['iab']['iabSettings']['iabName'] = [
      '#type' => 'textfield',
      '#title' => $this->t('IAB Name'),
      '#default_value' => $this->config->get('iabName'),
    ];

    $form['iab']['iabSettings']['iabLink'] = [
      '#type' => 'url',
      '#title' => $this->t('IAB Link'),
      '#description' => $this->t('Set the URL for IAB link.'),
      '#default_value' => $this->config->get('iabLink'),
    ];


    $form['iab']['iabSettings']['iabPurposes'] = [
      '#type' => 'textfield',
      '#title' => $this->t('IAB Purposes'),
      '#description' => $this->t('Set the purposes text.'),
      '#default_value' => $this->config->get('iabPurposes'),
    ];

    $form['iab']['iabSettings']['iabSpecialPurposes'] = [
      '#type' => 'textfield',
      '#title' => $this->t('IAB Special Purposes'),
      '#description' => $this->t('Set the special purposes text.'),
      '#default_value' => $this->config->get('iabSpecialPurposes'),
    ];

    $form['iab']['iabSettings']['iabFeatures'] = [
      '#type' => 'textfield',
      '#title' => $this->t('IAB Features'),
      '#description' => $this->t('Set the features text.'),
      '#default_value' => $this->config->get('iabFeatures'),
    ];

    $form['iab']['iabSettings']['iabSpecialFeatures'] = [
      '#type' => 'textfield',
      '#title' => $this->t('IAB Special Features'),
      '#description' => $this->t('Set the special features text.'),
      '#default_value' => $this->config->get('iabSpecialFeatures'),
    ];

    $form['iab']['iabSettings']['iabDataUse'] = [
      '#type' => 'textfield',
      '#title' => $this->t('IAB Data use'),
      '#description' => $this->t('Set the data use text.'),
      '#default_value' => $this->config->get('iabDataUse'),
    ];

    $form['iab']['iabSettings']['iabVendors'] = [
      '#type' => 'textfield',
      '#title' => $this->t('IAB Vendors'),
      '#description' => $this->t('Set the vendors text.'),
      '#default_value' => $this->config->get('iabVendors'),
    ];

    $form['iab']['iabSettings']['iabPurposeLegitimateInterest'] = [
      '#type' => 'textarea',
      '#title' => $this->t('IAB Purpose Legitimate Interest'),
      '#description' => $this->t('Set the purpose legitimate interest text.'),
      '#default_value' => $this->config->get('iabPurposeLegitimateInterest'),
    ];

    $form['iab']['iabSettings']['iabVendorLegitimateInterest'] = [
      '#type' => 'textarea',
      '#title' => $this->t('IAB Vendor Legitimate Interest'),
      '#description' => $this->t('Set the vendor legitimate interest text.'),
      '#default_value' => $this->config->get('iabVendorLegitimateInterest'),
    ];

    $form['iab']['iabSettings']['iabObjectPurposeLegitimateInterest'] = [
      '#type' => 'textarea',
      '#title' => $this->t('IAB Object Purpose Legitimate Interest'),
      '#description' => $this->t('Set the object purpose legitimate interest text.'),
      '#default_value' => $this->config->get('iabObjectPurposeLegitimateInterest'),
    ];

    $form['iab']['iabSettings']['iabObjectVendorLegitimateInterest'] = [
      '#type' => 'textarea',
      '#title' => $this->t('IAB Object Vendor Legitimate Interest'),
      '#description' => $this->t('Set the object vendor legitimate interest.'),
      '#default_value' => $this->config->get('iabObjectPurposeLegitimateInterest'),
    ];

    $form['iab']['iabSettings']['iabRelyConsent'] = [
      '#type' => 'textfield',
      '#title' => $this->t('IAB Rely Consent'),
      '#description' => $this->t('Set the rely consent text.'),
      '#default_value' => $this->config->get('iabRelyConsent'),
    ];

    $form['iab']['iabSettings']['iabRelyLegitimateInterest'] = [
      '#type' => 'textfield',
      '#title' => $this->t('IAB Rely Legitimate Interest'),
      '#description' => $this->t('Set the rely legitimate interest text.'),
      '#default_value' => $this->config->get('iabRelyLegitimateInterest'),
    ];

    $form['iab']['iabSettings']['iabSavePreferences'] = [
      '#type' => 'textfield',
      '#title' => $this->t('IAB Save Preferences'),
      '#description' => $this->t('Set the save preferences text.'),
      '#default_value' => $this->config->get('iabSavePreferences'),
    ];

    $form['iab']['iabSettings']['iabAcceptAll'] = [
      '#type' => 'textfield',
      '#title' => $this->t('IAB Accept All'),
      '#description' => $this->t('Set Accept All text.'),
      '#default_value' => $this->config->get('iabAcceptAll'),
    ];

    $form['iab']['iabSettings']['iabRejectAll'] = [
      '#type' => 'textfield',
      '#title' => $this->t('IAB Reject All'),
      '#description' => $this->t('Set Reject All text.'),
      '#default_value' => $this->config->get('iabRejectAll'),
    ];

    $form_state->setCached(FALSE);

    $form['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Save IAB (TCF v2.0) Configuration'),
      '#button_type' => 'primary',
    ];

    return $form;

  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
  }

  /**
   * {@inheritdoc}
   */
}
