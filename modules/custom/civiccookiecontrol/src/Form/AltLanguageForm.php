<?php

namespace Drupal\civiccookiecontrol\Form;

use Drupal\Component\Serialization\Json;
use Drupal\Component\Utility\Xss;
use Drupal\Core\Cache\CacheBackendInterface;
use Drupal\Core\Entity\EntityForm;
use Drupal\Core\Entity\EntityStorageException;
use Drupal\Core\Entity\EntityTypeManager;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\node\Entity\Node;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Form to add/edit Alternative Languages.
 */
class AltLanguageForm extends EntityForm {

  private $cookieCategories;
  protected $cache;
  protected $entityTypeManager;


  /**
   * CookieCategoryForm constructor.
   *
   * @param \Drupal\Core\Entity\EntityTypeManagerInterface $entityTypeManager
   *   The entityTypeManager.
   */
  public function __construct(EntityTypeManagerInterface $entityTypeManager, CacheBackendInterface $cache) {
    $this->entityTypeManager = $entityTypeManager;
    $this->cache = $cache;
    $this->cookieCategories = $entityTypeManager->getStorage('cookiecategory')->loadMultiple();
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('entity_type.manager'),
      $container->get('cache.data')
    );
  }

  /**
   * {@inheritdoc}
   */
  public function form(array $form, FormStateInterface $form_state) {
    $form = parent::form($form, $form_state);

    $altLanguage = $this->entity;

    if ($this->operation == 'edit') {
      $form['#title'] = $this->t('Edit Alternative Language: @name', ['@name' => $altLanguage->label()]);
    }
    else {
      $form['#title'] = $this->t('Add Alternative Language');
    }

      $form['ccc'] = [
          '#type' => 'details',
          '#title' => $this->t('Cookie Control Widget Translations'),
        '#open' => TRUE,
      ];

    $form['ccc']['id'] = [
      '#type' => 'machine_name',
      '#default_value' => $altLanguage->id(),
      '#machine_name' => [
        'exists' => [$this, 'exist'],
      ],
      '#disabled' => !$altLanguage->isNew(),
      '#access' => FALSE,
    ];

    $form['ccc']['altLanguageIsoCode'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Alternative Language (Iso Code)'),
      '#maxlength' => 125,
      '#default_value' => $altLanguage->label(),
      '#description' => $this->t("The Language Iso code Name."),
      '#required' => TRUE,
    ];

    if ($this->config('civiccookiecontrol.settings')
        ->get('civiccookiecontrol_api_key_version') == 9) {
      $form['ccc']['altLanguageLocation'] = [
        '#type' => 'textfield',
        '#title' => $this->t('Alternative Language Location'),
        '#maxlength' => 125,
        '#default_value' => $altLanguage->getAltLanguageLocation(),
        '#description' => $this->t("An array holding the ISO 3166 two letter country codes, for which this locale is valid. For United States in particular, you can also pass the ISO code of a particular state."),
        '#required' => FALSE,
      ];
    }

    if (($this->config('iab.settings')->get('iabCMP') == 0) || ($this->config('iab2.settings')->get('iabCMP') == 0)) {

      if ($this->config('civiccookiecontrol.settings')
          ->get('civiccookiecontrol_api_key_version') == 9) {
        $form['ccc']['altLanguageMode'] = [
          '#type' => 'radios',
          '#options' => [
            'GDPR' => 'GDPR',
            'CCPA' => 'CCPA',
            'hidden' => 'Hidden'
          ],
          '#title' => $this->t('Determines the mode in which Cookie Control runs for alternative language'),
          '#maxlength' => 255,
          '#default_value' => $altLanguage->altLanguageMode,
          '#description' => $this->t("Determines the mode Cookie Control will run in for a certain locale. Using the hidden option means Cookie Control will be hidden, and all onAccept functions will run immediately. For EU countries the GDPR option is always enforced by Cookie Control."),
          '#required' => FALSE,
        ];
      }

      $form['ccc']['container'] = [
        '#type' => 'container',
        '#states' => [
          'invisible' => [
            ':input[name=altLanguageMode]' => [
              'value' => 'hidden',
            ],
          ],
        ],
      ];

      $form['ccc']['container']['altLanguageTitle'] = [
        '#type' => 'textfield',
        '#title' => $this->t('Title in Alternative Language'),
        '#maxlength' => 255,
        '#default_value' => $altLanguage->altLanguageTitle,
        '#description' => $this->t("Title in Alternative Language"),
        '#required' => TRUE,
      ];

      $form['ccc']['container']['altLanguageIntro'] = [
        '#type' => 'text_format',
        '#format' => 'full_html',
        '#title' => $this->t('Intro in Alternative Language'),
        '#default_value' => $altLanguage->altLanguageIntro,
        '#description' => $this->t("Intro in Alternative Language"),
        '#required' => TRUE,
      ];

      $form['ccc']['container']['altLanguageAcceptRecommended'] = [
        '#type' => 'textfield',
        '#title' => $this->t('Accept Recommended Settings Text in Alternative Language'),
        '#maxlength' => 512,
        '#default_value' => $altLanguage->altLanguageAcceptRecommended,
        '#description' => $this->t("Accept Text in Alternative Language"),
        '#required' => TRUE,
      ];

      $form['ccc']['container']['altLanguageAcceptSettings'] = [
        '#type' => 'textfield',
        '#title' => $this->t('Accept Settings Text in Alternative Language'),
        '#maxlength' => 512,
        '#default_value' => $altLanguage->altLanguageAcceptSettings,
        '#description' => $this->t("Accept Settings Text in Alternative Language"),
        '#required' => TRUE,
      ];

      $form['ccc']['container']['altLanguageRejectSettings'] = [
        '#type' => 'textfield',
        '#title' => $this->t('Reject Settings Text in Alternative Language'),
        '#maxlength' => 512,
        '#default_value' => $altLanguage->altLanguageRejectSettings,
        '#description' => $this->t("Reject Settings Text in Alternative Language"),
        '#required' => TRUE,
      ];

      $form['ccc']['container']['altLanguageNecessaryTitle'] = [
        '#type' => 'textfield',
        '#title' => $this->t('Necessary Title in Alternative Language'),
        '#maxlength' => 255,
        '#default_value' => $altLanguage->altLanguageNecessaryTitle,
        '#description' => $this->t("Necessary Title in Alternative Language"),
        '#required' => TRUE,
      ];

      $form['ccc']['container']['altLanguageNecessaryDescription'] = [
        '#type' => 'text_format',
        '#format' => 'full_html',
        '#title' => $this->t('Necessary Description in Alternative Language'),
        '#default_value' => $altLanguage->altLanguageNecessaryDescription,
        '#description' => $this->t("Necessary Description in Alternative Language"),
        '#required' => TRUE,
      ];

      $form['ccc']['container']['altLanguageThirdPartyTitle'] = [
        '#type' => 'textfield',
        '#title' => $this->t('Third Party Title in Alternative Language'),
        '#maxlength' => 512,
        '#default_value' => $altLanguage->altLanguageThirdPartyTitle,
        '#description' => $this->t("Third Party Title in Alternative Language"),
        '#required' => TRUE,
      ];

      $form['ccc']['container']['altLanguageThirdPartyDescription'] = [
        '#type' => 'text_format',
        '#format' => 'full_html',
        '#title' => $this->t('Third Party Description in Alternative Language'),
        '#default_value' => $altLanguage->altLanguageThirdPartyDescription,
        '#description' => $this->t("Third Party Description in Alternative Language"),
        '#required' => TRUE,
      ];

      $form['ccc']['container']['altLanguageOn'] = [
        '#type' => 'textfield',
        '#title' => $this->t('On Text in Alternative Language'),
        '#maxlength' => 128,
        '#default_value' => $altLanguage->altLanguageOn,
        '#description' => $this->t("On Text in Alternative Language"),
        '#required' => TRUE,
      ];

      $form['ccc']['container']['altLanguageOff'] = [
        '#type' => 'textfield',
        '#title' => $this->t('Off Text in Alternative Language'),
        '#maxlength' => 128,
        '#default_value' => $altLanguage->altLanguageOff,
        '#description' => $this->t("Off Text in Alternative Language"),
        '#required' => TRUE,
      ];

      $form['ccc']['container']['altLanguageNotifyTitle'] = [
        '#type' => 'textfield',
        '#title' => $this->t('Notify Title Text in Alternative Language'),
        '#maxlength' => 512,
        '#default_value' => $altLanguage->altLanguageNotifyTitle,
        '#description' => $this->t("Notify Title Text in Alternative Language"),
        '#required' => TRUE,
      ];

      $form['ccc']['container']['altLanguageNotifyDescription'] = [
        '#type' => 'text_format',
        '#format' => 'full_html',
        '#title' => $this->t('Notify Description Text in Alternative Language'),
        '#default_value' => $altLanguage->altLanguageNotifyDescription,
        '#description' => $this->t("Notify Description Text in Alternative Language"),
        '#required' => TRUE,
      ];

      $form['ccc']['container']['altLanguageAccept'] = [
        '#type' => 'textfield',
        '#title' => $this->t('Accept Text in Alternative Language'),
        '#maxlength' => 512,
        '#default_value' => $altLanguage->altLanguageAccept,
        '#description' => $this->t("Accept Text in Alternative Language"),
        '#required' => TRUE,
      ];

      $form['ccc']['container']['altLanguageReject'] = [
        '#type' => 'textfield',
        '#title' => $this->t('Reject Text in Alternative Language'),
        '#maxlength' => 512,
        '#default_value' => $altLanguage->altLanguageReject,
        '#description' => $this->t("Reject Text in Alternative Language"),
        '#required' => TRUE,
      ];


      $form['ccc']['container']['altLanguageSettings'] = [
        '#type' => 'textfield',
        '#title' => $this->t('Settings Text in Alternative Language'),
        '#maxlength' => 512,
        '#default_value' => $altLanguage->altLanguageSettings,
        '#description' => $this->t("Settings Text in Alternative Language"),
        '#required' => TRUE,
      ];

      $optCookiesAltLang = $this->entity->getAltLanguageOptionalCookies();

      $i = 0;
      foreach ($this->cookieCategories as $cookieCat) {
        $form['ccc']['container']['altLanguageOptionalCookiesLabel_' . $cookieCat->id()] = [
          '#type' => 'textfield',
          '#title' => ucfirst($cookieCat->getCookieName()) . " " . $this->t('Label in Alternative Language'),
          '#maxlength' => 512,
          '#default_value' => $optCookiesAltLang[$i]['label'],
          '#description' => ucfirst($cookieCat->getCookieName()) . " " . $this->t("Cookie Label in Alternative Language"),
          '#required' => TRUE,
        ];

        $form['ccc']['container']['altLanguageOptionalCookiesDescription_' . $cookieCat->id()] = [
          '#type' => 'text_format',
          '#format' => 'full_html',
          '#title' => ucfirst($cookieCat->getCookieName()) . " " . $this->t('Optional Cookies Description in Alternative Language'),
          '#default_value' => $optCookiesAltLang[$i]['description'],
          '#description' => ucfirst($cookieCat->getCookieName()) . " " . $this->t("Cookie Description in Alternative Language"),
          '#required' => TRUE,
        ];
        $i++;
      }

      $form['ccc']['container']['altLanguageStmtDescrText'] = [
        '#type' => 'textarea',
        '#title' => $this->t('Statements Description Text in Alternative Language'),
        '#default_value' => $altLanguage->altLanguageStmtDescrText,
        '#description' => $this->t("Statements Description Text in Alternative Language"),
        '#required' => FALSE,
      ];

      $form['ccc']['container']['altLanguageStmtNameText'] = [
        '#type' => 'textfield',
        '#title' => $this->t('Statements Name Text in Alternative Language'),
        '#maxlength' => 512,
        '#default_value' => $altLanguage->altLanguageStmtNameText,
        '#description' => $this->t("Statements Name Text in Alternative Language"),
        '#required' => FALSE,
      ];

      global $base_url;
      $form['ccc']['container']['altLanguageStmtUrl'] = [
        '#type' => 'number',
        '#title' => $this->t('Statement URL for Alternative Language'),
        '#size' => 5,
        '#min' => 1,
        '#step' => 1,
        '#field_prefix' => $base_url . '/node/',
        '#default_value' => $altLanguage->altLanguageStmtUrl,
        '#description' => $this->t("Statement URL in Alternative Language"),
        '#required' => FALSE,
      ];

      $form['ccc']['container']['altLanguageStmtDate'] = [
        '#type' => 'date',
        '#title' => $this->t('Statement Updated Date for Alternative Language'),
        '#format' => 'd/m/Y',
        '#date_date_format' => 'd/m/Y',
        '#default_value' => $altLanguage->altLanguageStmtDate,
        '#required' => FALSE,
      ];
    }
    $form['ccc']['container']['altLanguageCloseLabel'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Close Label Text in Alternative Language'),
      '#maxlength' => 512,
      '#default_value' => $altLanguage->altLanguageCloseLabel,
      '#description' => $this->t("Close Label Text in Alternative Language"),
      '#required' => TRUE,
    ];

    $form['ccc']['container']['altLanguageAccessibilityAlert'] = [
      '#type' => 'textarea',
      '#title' => $this->t('Accessibility Alert in Alternative Language'),
      '#maxlength' => 512,
      '#default_value' => $altLanguage->altLanguageAccessibilityAlert,
      '#description' => $this->t("Accessibility Alert in Alternative Language"),
      '#required' => TRUE,
    ];


    if (($this->config('iab.settings')->get('iabCMP') == 1) && ( $this->config('civiccookiecontrol.settings')->get('civiccookiecontrol_api_key_version') ==8) ) {
          $form['iabTexts'] = [
              '#type' => 'details',
              '#title' => $this->t('IAB Texts in Alternative Language'),
              '#open' => FALSE,
          ];

          $form['iabTexts']['altLanguageIabLabelText'] = [
              '#type' => 'textfield',
              '#title' => $this->t('IAB Label in Alternative Language'),
              '#description' => $this->t('Replacement text for "Ad Vendors" in Alternative Language'),
              '#default_value' => $altLanguage->altLanguageIabLabelText,
          ];
          $form['iabTexts']['altLanguageIabDescriptionText'] = [
              '#type' => 'text_format',
              '#format' => 'full_html',
              '#title' => $this->t('IAB Description in Alternative Language'),
              '#description' => $this->t('Set the description text for IAB in Alternative Language'),
              '#default_value' => $altLanguage->altLanguageIabDescriptionText,
          ];
          $form['iabTexts']['altLanguageIabConfigureText'] = [
              '#type' => 'textfield',
              '#title' => $this->t('IAB Configure Text in Alternative Language'),
              '#description' => $this->t('Set the label for the IAB cofiguration button in Alternative Language'),
              '#default_value' => $altLanguage->altLanguageIabConfigureText,
          ];
          $form['iabTexts']['altLanguageIabPanelTitleText'] = [
              '#type' => 'textfield',
              '#title' => $this->t('IAB Panel Title in Alternative Language'),
              '#description' => $this->t('Set the title for the IAB panel in Alternative Language.'),
              '#default_value' => $altLanguage->altLanguageIabPanelTitleText,
          ];

          $form['iabTexts']['altLanguageIabPanelIntroText'] = [
              '#type' => 'text_format',
              '#format' => 'full_html',
              '#title' => $this->t('IAB Panel Introduction Text in Alternative Language'),
              '#description' => $this->t('Set the introductory text for the IAB panel in Alternative Language.'),
              '#default_value' => $altLanguage->altLanguageIabPanelIntroText,
          ];
          $form['iabTexts']['altLanguageIabAboutIabText'] = [
              '#type' => 'text_format',
              '#format' => 'full_html',
              '#title' => $this->t('About IAB Text in Alternative Language'),
              '#description' => $this->t('Set the about AIB text in Alternative Language.'),
              '#default_value' => $altLanguage->altLanguageIabAboutIabText,
          ];

          $form['iabTexts']['altLanguageIabIabNameText'] = [
              '#type' => 'textfield',
              '#title' => $this->t('IAB Name Text in Alternative Language'),
              '#description' => $this->t('Set the IAB name text in Alternative Language.'),
              '#default_value' => $altLanguage->altLanguageIabIabNameText,
          ];

          $form['iabTexts']['altLanguageIabIabLinkText'] = [
              '#type' => 'url',
              '#title' => $this->t('IAB Link in Alternative Language'),
              '#description' => $this->t('Set the URL for IAB link in Alternative Language.'),
              '#default_value' => $altLanguage->altLanguageIabIabLinkText,
          ];

          $form['iabTexts']['altLanguageIabPanelBackText'] = [
              '#type' => 'textfield',
              '#title' => $this->t('IAB Panel Back Text in Alternative Language'),
              '#description' => $this->t('Set the text for the "Back" button in Alternative Language.'),
              '#default_value' => $altLanguage->altLanguageIabPanelBackText,
          ];
          $form['iabTexts']['altLanguageIabVendorTitleText'] = [
              '#type' => 'textfield',
              '#title' => $this->t('IAB Vendor Title Text in Alternative Language'),
              '#description' => $this->t('Set the text for  Vendor Title in Alternative Language'),
              '#default_value' => $altLanguage->altLanguageIabVendorTitleText,
          ];
          $form['iabTexts']['altLanguageIabVendorConfigureText'] = [
              '#type' => 'textfield',
              '#title' => $this->t('IAB Vendor Configure Text in Alternative Language'),
              '#description' => $this->t('Set the text for IAB vendors configuration button in Alternative Language.'),
              '#default_value' => $altLanguage->altLanguageIabVendorConfigureText,
          ];
          $form['iabTexts']['altLanguageIabVendorBackText'] = [
              '#type' => 'textfield',
              '#title' => $this->t('IAB Back to Vendor purposes title in Alternative Language'),
              '#description' => $this->t('Sets label for the back to vendor purposes button in Alternative Language.'),
              '#default_value' => $altLanguage->altLanguageIabVendorBackText,
          ];
          $form['iabTexts']['altLanguageIabAcceptAllText'] = [
              '#type' => 'textfield',
              '#title' => $this->t('IAB Accept All Label in Alternative Language'),
              '#description' => $this->t('Sets label for the "Accept All" button in Alternative Language.'),
              '#default_value' => $altLanguage->altLanguageIabAcceptAllText,
          ];
          $form['iabTexts']['altLanguageIabRejectAllText'] = [
              '#type' => 'textfield',
              '#title' => $this->t('IAB Reject All Label in Alternative Language'),
              '#description' => $this->t('Sets label for the "Reject All" button in Alternative Language.'),
              '#default_value' => $altLanguage->altLanguageIabRejectAllText,
          ];
          $form['iabTexts']['altLanguageIabBackText'] = [
              '#type' => 'textfield',
              '#title' => $this->t('IAB Back Button Label in Alternative Language'),
              '#description' => $this->t('Sets label for the "Back" button in Alternative Language.'),
              '#default_value' => $altLanguage->altLanguageIabBackText,
          ];
      }elseif (($this->config('iab2.settings')->get('iabCMP') == 1) && ( $this->config('civiccookiecontrol.settings')->get('civiccookiecontrol_api_key_version') ==9) ) {
        $form['iab2Texts'] = [
          '#type' => 'details',
          '#title' => $this->t('IAB (V2.2) Texts in Alternative Language'),
          '#open' => TRUE,
          '#states' => [
            'invisible' => [
              ':input[name=altLanguageMode]' => [
                'value' => 'hidden',
              ],
            ],
          ],
        ];

        $form ['iab2Texts']['altLanguageIabPanelTitleText'] = [
          '#type' => 'textarea',
          '#title' => $this->t('IAB Panel Title in Alternative Language'),
          '#description' => $this->t('The title of the IAB Panel in Alternative Language'),
          '#default_value' => $altLanguage->altLanguageIabPanelTitleText
        ];

        $form ['iab2Texts']['altLanguageIabPanelIntro1'] = [
          '#type' => 'text_format',
          '#format' => 'full_html',
          '#title' => $this->t('IAB Panel Intro 1 Text in Alternative Language'),
          '#description' => $this->t('IAB Panel Intro 1 Text in Alternative Language'),
          '#default_value' => $altLanguage->altLanguageIabPanelIntro1
        ];

        $form ['iab2Texts']['altLanguageIabPanelIntro2'] = [
          '#type' => 'text_format',
          '#format' => 'full_html',
          '#title' => $this->t('IAB Panel Intro 2 Text in Alternative Language'),
          '#description' => $this->t('IAB Panel Intro 2 Text in Alternative Language'),
          '#default_value' => $altLanguage->altLanguageIabPanelIntro2
        ];

        $form ['iab2Texts']['altLanguageIabPanelIntro3'] = [
          '#type' => 'text_format',
          '#format' => 'full_html',
          '#title' => $this->t('IAB Panel Intro 3 Text in Alternative Language'),
          '#description' => $this->t('IAB Panel Intro 3 Text in Alternative Language'),
          '#default_value' => $altLanguage->altLanguageIabPanelIntro3
        ];

        $form ['iab2Texts']['altLanguageIabAboutIab'] = [
          '#type' => 'textarea',
          '#title' => $this->t('About IAB in Alternative Language' ),
          '#description' => $this->t('About IAB text area in Alternative Language.'),
          '#default_value' => $altLanguage->altLanguageIabAboutIab
        ];

        $form ['iab2Texts']['altLanguageIabName'] = [
          '#type' => 'textarea',
          '#title' => $this->t('IAB Name in Alternative Language'),
          '#default_value' => $altLanguage->altLanguageIabName
        ];

        $form ['iab2Texts']['altLanguageIabLink'] = [
          '#type' => 'url',
          '#title' => $this->t('IAB Link in Alternative Language'),
          '#description' => $this->t('Set the URL for IAB link in Alternative Language.'),
          '#default_value' => $altLanguage->altLanguageIabLink
        ];

        $form ['iab2Texts']['altLanguageIabPurposes'] = [
          '#type' => 'textfield',
          '#title' => $this->t('IAB Purposes in Alternative Language'),
          '#description' => $this->t('Set the purposes text in Alternative Language.'),
          '#default_value' => $altLanguage->altLanguageIabPurposes
        ];

        $form ['iab2Texts']['altLanguageIabSpecialPurposes'] = [
          '#type' => 'textfield',
          '#title' => $this->t('IAB Special Purposes in Alternative Language'),
          '#description' => $this->t('Set the special purposes text in Alternative Language.'),
          '#default_value' => $altLanguage->altLanguageIabSpecialPurposes
        ];

        $form ['iab2Texts']['altLanguageIabFeatures'] = [
          '#type' => 'textfield',
          '#title' => $this->t('IAB Features in Alternative Language'),
          '#description' => $this->t('Set the features text in Alternative Language.'),
          '#default_value' => $altLanguage->altLanguageIabFeatures
        ];

        $form ['iab2Texts']['altLanguageIabSpecialFeatures'] = [
          '#type' => 'textfield',
          '#title' => $this->t('IAB Special Features in Alternative Language'),
          '#description' => $this->t('Set the special features text in Alternative Language.'),
          '#default_value' => $altLanguage->altLanguageIabSpecialFeatures
        ];

        $form ['iab2Texts']['altLanguageIabDataUse'] = [
          '#type' => 'textfield',
          '#title' => $this->t('IAB Data use in Alternative Language'),
          '#description' => $this->t('Set the data use text in Alternative Language.'),
          '#default_value' => $altLanguage->altLanguageIabDataUse
        ];

        $form ['iab2Texts']['altLanguageIabVendors'] = [
          '#type' => 'textfield',
          '#title' => $this->t('IAB Vendors in Alternative Language'),
          '#description' => $this->t('Set the vendors text in Alternative Language.'),
          '#default_value' => $altLanguage->altLanguageIabVendors
        ];

        $form ['iab2Texts']['altLanguageIabOn'] = [
          '#type' => 'textfield',
          '#title' => $this->t('IAB On text in Alternative Language'),
          '#description' => $this->t('Set On text in Alternative Language.'),
          '#default_value' => $altLanguage->altLanguageIabOn
        ];

        $form ['iab2Texts']['altLanguageIabOff'] = [
          '#type' => 'textfield',
          '#title' => $this->t('IAB Off text in Alternative Language'),
          '#description' => $this->t('Set Off text in Alternative Language.'),
          '#default_value' => $altLanguage->altLanguageIabOff
        ];


        $form ['iab2Texts']['altLanguageIabPurposeLegitimateInterest'] = [
          '#type' => 'textarea',
          '#title' => $this->t('IAB Purpose Legitimate Interest in Alternative Language'),
          '#description' => $this->t('Set the purpose legitimate interest text in Alternative Language.'),
          '#default_value' => $altLanguage->altLanguageIabPurposeLegitimateInterest
        ];

        $form ['iab2Texts']['altLanguageIabVendorLegitimateInterest'] = [
          '#type' => 'textarea',
          '#title' => $this->t('IAB Vendor Legitimate Interest in Alternative Language'),
          '#description' => $this->t('Set the vendor legitimate interest text in Alternative Language.'),
          '#default_value' => $altLanguage->altLanguageIabVendorLegitimateInterest
        ];

        $form ['iab2Texts']['altLanguageIabObjectPurposeLegitimateInterest'] = [
          '#type' => 'textarea',
          '#title' => $this->t('IAB Object Purpose Legitimate Interest in Alternative Language'),
          '#description' => $this->t('Set the object purpose legitimate interest text in Alternative Language.'),
          '#default_value' => $altLanguage->altLanguageIabObjectPurposeLegitimateInterest
        ];

        $form ['iab2Texts']['altLanguageIabObjectVendorLegitimateInterest'] = [
          '#type' => 'textarea',
          '#title' => $this->t('IAB Object Vendor Legitimate Interest in Alternative Language'),
          '#description' => $this->t('Set the object vendor legitimate interest in Alternative Language.'),
          '#default_value' => $altLanguage->altLanguageIabObjectVendorLegitimateInterest
        ];

        $form ['iab2Texts']['altLanguageIabRelyConsent'] = [
          '#type' => 'textfield',
          '#title' => $this->t('IAB Rely Consent in Alternative Language'),
          '#description' => $this->t('Set the rely consent text in Alternative Language.'),
          '#default_value' => $altLanguage->altLanguageIabRelyConsent
        ];

        $form ['iab2Texts']['altLanguageIabRelyLegitimateInterest'] = [
          '#type' => 'textfield',
          '#title' => $this->t('IAB Rely Legitimate Interest in Alternative Language'),
          '#description' => $this->t('Set the rely legitimate interest text in Alternative Language.'),
          '#default_value' => $altLanguage->altLanguageIabRelyLegitimateInterest
        ];

        $form ['iab2Texts']['altLanguageIabSavePreferences'] = [
          '#type' => 'textfield',
          '#title' => $this->t('IAB Save Preferences in Alternative Language'),
          '#description' => $this->t('Set the save preferences text in Alternative Language.'),
          '#default_value' => $altLanguage->altLanguageIabSavePreferences
        ];

        $form ['iab2Texts']['altLanguageIabAcceptAll'] = [
          '#type' => 'textfield',
          '#title' => $this->t('IAB Accept All in Alternative Language'),
          '#description' => $this->t('Set Accept All text in Alternative Language.'),
          '#default_value' => $altLanguage->altLanguageIabAcceptAll
        ];

        $form ['iab2Texts']['altLanguageIabRejectAll'] = [
          '#type' => 'textfield',
          '#title' => $this->t('IAB Reject All in Alternative Language'),
          '#description' => $this->t('Set Reject All text in Alternative Language.'),
          '#default_value' => $altLanguage->altLanguageIabRejectAll
        ];


      }
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    if (($this->config('iab.settings')->get('iabCMP') == 0) || ($this->config('iab2.settings')->get('iabCMP') == 0)) {
      if ($form_state->getValue(['altLanguageStmtUrl']) > 0) {
        $node_storage = $this->entityTypeManager->getStorage('node');
        $node = $node_storage->load($form_state->getValue('altLanguageStmtUrl'));
        // If no node can be loaded give the user a suitable message prompt.
        if (!$node) {
          $form_state->setErrorByName('altLanguageStmtUrl', $this->t('The specified privacy policy node id does not exist. Leave blank if you have not yet created a policy page.'));
        }
      }
      elseif (!is_int($form_state->getValue(['altLanguageStmtUrl']))) {
        $form_state->setErrorByName('altLanguageStmtUrl', $this->t('Please provide a valid node id.'));
      }

    }
    parent::validateForm($form, $form_state);
  }


  /**
   * {@inheritdoc}
   */
  public function save(array $form, FormStateInterface $form_state) {
    try {



      $altOptionalCookies = [];
      foreach ($this->cookieCategories as $cookieCat) {
        $altOptionalCookie = [];
        $altOptionalCookie['label'] = $form_state->getValue('altLanguageOptionalCookiesLabel_' . $cookieCat->id());
        $altOptionalCookie['description'] = $form_state->getValue('altLanguageOptionalCookiesDescription_' . $cookieCat->id())['value'];
        $altOptionalCookies[] = $altOptionalCookie;
      }

      $altLanguage = $this->entity;
      $altLanguage->setAltLanguageIntro($form_state->getValue('altLanguageIntro')['value']);
      $altLanguage->setAltLanguageNecessaryDescription($form_state->getValue('altLanguageNecessaryDescription')['value']);
      $altLanguage->setAltLanguageThirdPartyDescription($form_state->getValue('altLanguageThirdPartyDescription')['value']);
      $altLanguage->setAltLanguageThirdPartyDescription($form_state->getValue('altLanguageThirdPartyDescription')['value']);
      $altLanguage->setAltLanguageNotifyDescription($form_state->getValue('altLanguageNotifyDescription')['value']);
      $altLanguage->setAltLanguageIabDescriptionText($form_state->getValue('altLanguageIabDescriptionText')['value']);
      $altLanguage->setAltLanguageIabPanelIntroText($form_state->getValue('altLanguageIabPanelIntroText')['value']);
      $altLanguage->setAltLanguageIabAboutIabText($form_state->getValue('altLanguageIabAboutIabText')['value']);
      $altLanguage->setAltLanguageIabPanelIntro1($form_state->getValue('altLanguageIabPanelIntro1')['value']);
      $altLanguage->setAltLanguageIabPanelIntro2($form_state->getValue('altLanguageIabPanelIntro2')['value']);
      $altLanguage->setAltLanguageIabPanelIntro3($form_state->getValue('altLanguageIabPanelIntro3')['value']);

      $machineName = 'alt_language_' . $form_state->getValue('altLanguageIsoCode');
      if ($altLanguage->isNew()) {
        $altLanguage->id = $machineName;
      }

      $altLanguage->setAltLanguageOptionalCookies(Xss::filter(json_encode($altOptionalCookies, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES)));

      $status = $altLanguage->save();
      if ($status) {
          $this->messenger()->addMessage(
          $this->t(
            'Saved the %label Alternative Language.', [
              '%label' => $altLanguage->label(),
            ]
          )
        );
      }
      else {
          $this->messenger()->addMessage(
          $this->t(
            'The %label Alternative Language was not saved.', [
              '%label' => $altLanguage->label(),
            ]
          )
        );
      }
      $this->cache->delete('civiccookiecontrol_config');
      $form_state->setRedirect('entity.altlanguage.collection');
    } catch (EntityStorageException $ex) {
        $this->messenger()->addMessage(
        $this->t(
          'The %label  Alternative Language already exist.', [
            '%label' => $altLanguage->label(),
          ]
        )
      );

      $form_state->setRedirect('entity.altlanguage.collection');
    }

  }

  /**
   * Check whether an Alternative configuration entity exists.
   */
  public function exist($id) {
    $entity = $this->entityTypeManager->getStorage('altlanguage')->getQuery()
      ->condition('id', $id)
      ->execute();
    return (bool) $entity;
  }

}
