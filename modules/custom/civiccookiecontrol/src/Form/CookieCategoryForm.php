<?php

namespace Drupal\civiccookiecontrol\Form;

use Drupal\Core\Cache\CacheBackendInterface;
use Drupal\Core\Entity\EntityForm;
use Drupal\Core\Entity\EntityStorageException;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Routing\RouteBuilderInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * The form to add/edit cookie categories.
 */
class CookieCategoryForm extends EntityForm
{

    protected $cache;

    protected $thirdPartyCookiesNum;

    protected $routerBuilder;

    /**
     * CookieCategoryForm constructor.
     *
     * @param \Drupal\Core\Entity\EntityTypeManagerInterface $entityTypeManager
     *   The entityTypeManager.
     */
    public function __construct(EntityTypeManagerInterface $entityTypeManager, CacheBackendInterface $cache, RouteBuilderInterface $routeBuilder)
    {
        $this->entityTypeManager = $entityTypeManager;
        $this->cache = $cache;
        $this->routerBuilder = $routeBuilder;
    }

    /**
     * {@inheritdoc}
     */
    public static function create(ContainerInterface $container)
    {
        return new static(
            $container->get('entity_type.manager'),
            $container->get('cache.data'),
            $container->get('router.builder')
        );
    }

    /**
     * {@inheritdoc}
     */
    public function form(array $form, FormStateInterface $form_state)
    {
        $form = parent::form($form, $form_state);

        $cookieCategory = $this->entity;

        if ($this->operation == 'edit') {
            $form['#title'] = $this->t('Edit Cookie Category: @name', ['@name' => $cookieCategory->label()]);
        } else {
            $form['#title'] = $this->t('Add Cookie Category');
        }

        $form['id'] = [
            '#type' => 'machine_name',
            '#default_value' => $cookieCategory->id(),
            '#machine_name' => [
                'exists' => [$this, 'exist'],
            ],
            '#disabled' => !$cookieCategory->isNew(),
            '#access' => FALSE,
        ];

        $form['cookieName'] = [
            '#type' => 'textfield',
            '#title' => $this->t('Cookie Name'),
            '#maxlength' => 255,
            '#default_value' => $cookieCategory->label(),
            '#description' => $this->t("A unique identifier for the category, that the module will use to set an acceptance cookie for when user's opt in."),
            '#required' => TRUE,
        ];

        $form['cookieLabel'] = [
            '#type' => 'textfield',
            '#title' => $this->t('Cookie Label'),
            '#maxlength' => 512,
            '#default_value' => $cookieCategory->cookieLabel,
            '#description' => $this->t("The descriptive title assigned to the category and displayed by the module."),
            '#required' => TRUE,
        ];

        $form['cookieDescription'] = [
            '#type' => 'text_format',
            '#title' => $this->t('Cookie Description'),
            '#default_value' => $cookieCategory->cookieDescription,
            '#description' => $this->t("The full description assigned to the category and displayed by the module."),
            '#required' => TRUE,
            '#format' => 'full_html'
        ];

        $form['cookies'] = [
            '#type' => 'textfield',
            '#title' => $this->t('Cookies'),
            '#maxlength' => 255,
            '#default_value' => $cookieCategory->cookies,
            '#description' => $this->t("The name of the cookies that you wish to protect after a user opts in (comma seperated values ex. _ga, _gid, _gat, __utma)."),
            '#required' => TRUE,
        ];

        $thirdPartyCookies = $this->parseThirdPartyCookies($form_state);

        if (empty($form_state->get('thirdPartyCookiesCount'))) {
            if (!empty($this->getEntity()->getThirdPartyCookiesCount())) {
                $form_state->set('thirdPartyCookiesCount', $this->getEntity()->getThirdPartyCookiesCount());
            } else {
                $form_state->set('thirdPartyCookiesCount', 0);
            }
        }

        $form['thirdPartyCookies'] = [
            '#type' => 'fieldset',
            '#title' => $this->t('Add third party cookies'),
            '#prefix' => '<div id="third-party-cookie-wrapper">',
            '#suffix' => '</div>',
            '#description' => $this->t("Only applicable if the category will set third party cookies on acceptance. Please provide the Name and Opt Out Link for each third party cookie."),
        ];

        for ($it = 0; $it < $form_state->get('thirdPartyCookiesCount'); $it++) {
            $form['thirdPartyCookies']['thirdPartyCookieName_' . ($it)] = [
                '#type' => 'textfield',
                '#title' => $this->t('Third Party Cookie Name'),
                '#validated' => TRUE,
                '#default_value' => $thirdPartyCookies[$it]->name,
                '#description' => $this->t("The name of the third party cookie."),
            ];
            $form['thirdPartyCookies']['thirdPartyCookieOptOutLink_' . ($it)] = [
                '#type' => 'url',
                '#title' => $this->t('Third Party Cookie Opt Out Link'),
                '#default_value' => $thirdPartyCookies[$it]->optOutLink,
                '#suffix' => '<hr><br>',
                '#description' => $this->t("The opt out link of the third party cookie."),
                '#states' => [
                    // Action to take.
                    'required' => [
                        ':input[name=thirdPartyCookieName_' . ($it) . ']' => [
                            'filled' => TRUE,
                        ],
                    ],
                ],
            ];
        }

        $form['thirdPartyCookies']['warning']['#markup'] = "<div class=\"messages messages--warning\">We recommend that you add any plugins that may set third party cookies to the appropriate category's onAccept function, so that they only run after a user has given their consent. Similarly, the onRevoke function could be used to stop the plugin; though this would be dependent on the plugin offering such methods. How to do this specifically will depend on the plugin itself.</div>";

        $form['thirdPartyCookies']['del_ajax_button'] = [
            '#type' => 'submit',
            '#value' => $this->t('Remove third party cookie'),
            '#submit' => [[$this, 'delThirdPartyCookieSubmit']],
            '#limit_validation_errors' => [],
            '#ajax' => [
                'callback' => [$this, 'delThirdPartyCookieCallback'],
                'wrapper' => 'third-party-cookie-wrapper',
                'method' => 'replace',
            ],
        ];

        $form['thirdPartyCookies']['add_ajax_button'] = [
            '#type' => 'submit',
            '#value' => $this->t('Add third party cookie'),
            '#submit' => [[$this, 'addThirdPartyCookieSubmit']],
            '#limit_validation_errors' => [],
            '#ajax' => [
                'callback' => [$this, 'addThirdPartyCookieCallback'],
                'wrapper' => 'third-party-cookie-wrapper',
                'method' => 'replace',
            ],
        ];

        $form['onAcceptCallback'] = [
            '#type' => 'textarea',
            '#title' => $this->t('On Accept Callback'),
            '#default_value' => $cookieCategory->onAcceptCallback,
            '#description' => $this->t(
                "Callback function that will fire on user's opting into this cookie category. For example: <br>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga'); <br><br>

ga('create', 'UA-XXXXX-Y', 'auto');<br>
ga('send', 'pageview');"
            ),
            //'#required' => TRUE,
        ];

        $form['onRevokeCallback'] = [
            '#type' => 'textarea',
            '#title' => $this->t('On Revoke Callback'),
            '#default_value' => $cookieCategory->onRevokeCallback,
            '#description' => $this->t("Callback function that will fire on user's opting out of this cookie category. Should any thirdPartyCookies be set, the module will automatically display a warning that manual user action is needed. For example: window['ga-disable-UA-XXXXX-Y'] = true;"),
            //'#required' => TRUE,
        ];

        $form['recommendedState'] = [
            '#type' => 'select',
            '#title' => $this->t('Recommended State'),
            '#options' => [
                TRUE => $this->t('On'),
                FALSE => $this->t('Off'),
            ],
            '#default_value' => $cookieCategory->getRecommendedState() ? 1 : 0,
            '#description' => $this->t('Defines whether or not this category should be accepted (opted in) as part of the user granting consent
      to the site\'s recommended settings. If true, the UI will update to show the category toggled \'on\' and the user\'s consent will be recorded if logConsent is enabled.'),
        ];

        $form['lawfulBasis'] = [
            '#type' => 'select',
            '#title' => $this->t('Lawful Basis'),
            '#options' => [
                'consent' => $this->t('Consent'),
                'legitimate interest' => $this->t('Legitimate interest'),
            ],
            '#default_value' => $cookieCategory->getLawfulBasis(),
            '#description' => $this->t('Possible values are either consent or legitimate interest.
          If the latter, the UI will show the category toggled \'on\', though no record of consent will exist.
          If you choose to rely on legitimate interest, you are taking on extra responsibility for considering and protecting people’s rights and interests;
          and must include details of your legitimate interests in your privacy statement. <a href=\'https://ico.org.uk/for-organisations/guide-to-data-protection/guide-to-the-general-data-protection-regulation-gdpr/lawful-basis-for-processing/legitimate-interests/\'>Read more from the ICO</a>'),
        ];

        // You will need additional form elements for your custom properties.
        return $form;
    }

    /**
     * {@inheritdoc}
     */
    public function save(array $form, FormStateInterface $form_state)
    {
        try {
            $cookieCategory = $this->entity;
            $machineName = str_replace(" ", "_", $form_state->getValue('cookieName'));
            if ($cookieCategory->isNew()) {
                $cookieCategory->id = $machineName;
            }
            $cookieCategory->setCookieDescription($form_state->getValue('cookieDescription')['value']);
            $thirdPartyCookiesCount = $form_state->get('thirdPartyCookiesCount');
            $thirdPartyCookies = [];

            for ($item = 0; $item < $thirdPartyCookiesCount; $item++) {
                $thirdPartyCookie = [];
                if (!empty($form_state->getValue('thirdPartyCookieName_' . $item))) {
                    $thirdPartyCookie['name'] = $form_state->getValue('thirdPartyCookieName_' . $item);
                    $thirdPartyCookie['optOutLink'] = $form_state->getValue('thirdPartyCookieOptOutLink_' . $item);

                    $thirdPartyCookies[] = json_encode($thirdPartyCookie, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);// json_encode($thirdPartyCookie);
                }
            }

            $cookieCategory->setThirdPartyCookies(implode(';', $thirdPartyCookies));
            $cookieCategory->setThirdPartyCookiesCount($thirdPartyCookiesCount);

            $status = $cookieCategory->save();

            if ($status) {
                $this->messenger()->addMessage(
                    $this->t(
                        'Saved the %label Cookie Category.', [
                            '%label' => $cookieCategory->label(),
                        ]
                    )
                );
            } else {
                $this->messenger()->addMessage(
                    $this->t(
                        'The %label Cookie Category was not saved.', [
                            '%label' => $cookieCategory->label(),
                        ]
                    )
                );
            }
            $this->cache->delete('civiccookiecontrol_config');
            $this->routerBuilder->rebuild();
            $form_state->setRedirect('entity.cookiecategory.collection');
        } catch (EntityStorageException $ex) {
            $this->messenger()->addMessage(
                $this->t(
                    'The %label Cookie Category already exist.', [
                        '%label' => $cookieCategory->label(),
                    ]
                )
            );
            $this->routerBuilder->rebuild();
            $form_state->setRedirect('entity.cookiecategory.collection');
        }

    }

    /**
     * Helper function to check whether a Cookie Category configuration entity exists.
     */
    public function exist($id)
    {
        $entity = $this->entityTypeManager->getStorage('cookiecategory')->getQuery()
            ->condition('id', $id)
            ->execute();
        return (bool)$entity;
    }

    /**
     * The submit function to add/edit necessary cookies.
     */
    public function addThirdPartyCookieSubmit(array &$form, FormStateInterface &$form_state)
    {
        $items_count = ($form_state->get('thirdPartyCookiesCount')) + 1;
        $form_state->set('thirdPartyCookiesCount', $items_count);
        $form_state->setRebuild(TRUE);
    }

    /**
     * Ajax callback to add third party cookies.
     */
    public function addThirdPartyCookieCallback(array &$form, FormStateInterface &$form_state)
    {
        return $form['thirdPartyCookies'];
    }

    /**
     * Submit function to add third party cookies.
     */
    public function delThirdPartyCookieSubmit(array &$form, FormStateInterface &$form_state)
    {
        if ($form_state->get('thirdPartyCookiesCount') > 0) {
            $items_count = ($form_state->get('thirdPartyCookiesCount')) - 1;
            $form_state->set('thirdPartyCookiesCount', $items_count);
        }
        $form_state->setRebuild(TRUE);
    }

    /**
     * Ajax callback to delete third party cookies.
     */
    public function delThirdPartyCookieCallback(array &$form, FormStateInterface &$form_state)
    {
        // ['countries'];.
        return $form['thirdPartyCookies'];
    }

    /**
     * Function to parse third partycookies.
     */
    public function parseThirdPartyCookies(FormStateInterface &$form_state)
    {
        $cookieCategory = $this->entity;
        $thirdPartyCookiesStr = $cookieCategory->getThirdPartyCookies();
        $thirdPartyCookiesCount = $cookieCategory->getThirdPartyCookiesCount();

        $thirdPartyCookies = explode(';', $thirdPartyCookiesStr);

        $retArray = [];
        foreach ($thirdPartyCookies as $item) {
            $retArray[] = json_decode($item);
        }

        $form_state->setValue('thirdPartyCookiesCount', $thirdPartyCookiesCount);

        return $retArray;
    }

}
