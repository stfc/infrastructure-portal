<?php

namespace Drupal\civiccookiecontrol\Form;

use Drupal\Core\Cache\CacheBackendInterface;
use Drupal\Core\Entity\EntityForm;
use Drupal\Core\Entity\EntityStorageException;
use Drupal\Core\Entity\EntityTypeManager;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Core\Form\FormStateInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * The form to add/edit excluded countries.
 */
class ExcludedCountryForm extends EntityForm
{

  protected $cache;
    /**
     * ExcludedCountryForm constructor.
     *
     * @param \Drupal\Core\Entity\EntityTypeManagerInterface $entityTypeManager
     *   The entityTypeManager.
     */
    public function __construct(EntityTypeManagerInterface $entityTypeManager, CacheBackendInterface $cache)
    {
        $this->entityTypeManager = $entityTypeManager;
        $this->cache = $cache;
    }

    /**
     * {@inheritdoc}
     */
    public static function create(ContainerInterface $container)
    {
        return new static(
            $container->get('entity_type.manager'),
            $container->get('cache.data')
        );
    }

    /**
     * {@inheritdoc}
     */
    public function form(array $form, FormStateInterface $form_state)
    {
        $form = parent::form($form, $form_state);

        $excludedCountry = $this->entity;

        if ($this->operation == 'edit') {
            $form['#title'] = $this->t('Edit Excluded Country Iso Code: @name', ['@name' => $excludedCountry->label()]);
        } else {
            $form['#title'] = $this->t('Add Excluded Country Iso Code');
        }

        $form['id'] = [
            '#type' => 'machine_name',
            '#default_value' => $excludedCountry->id(),
            '#machine_name' => [
                'exists' => [$this, 'exist'],
            ],
            '#disabled' => !$excludedCountry->isNew(),
            '#access' => FALSE,
        ];

        $form['excludedCountryIsoCode'] = [
            '#type' => 'textfield',
            '#title' => $this->t('Excluded Country Iso Code'),
            '#maxlength' => 255,
            '#default_value' => $excludedCountry->label(),
            '#description' => $this->t("Excluded Country Iso Code"),
            '#required' => TRUE,
        ];

        return $form;
    }

    /**
     * {@inheritdoc}
     */
    public function save(array $form, FormStateInterface $form_state)
    {
        try {
            $excludedCountry = $this->entity;
            $machineName = str_replace(" ", "_", $form_state->getValue('excludedCountryIsoCode'));
            if ($excludedCountry->isNew()) {
                $excludedCountry->id = $machineName;
            }

            $status = $excludedCountry->save();

            if ($status) {
                $this->messenger()->addMessage(
                    $this->t(
                        'Saved the %label Excluded Country.', [
                            '%label' => $excludedCountry->label(),
                        ]
                    )
                );
            } else {
                $this->messenger()->addMessage(
                    $this->t(
                        'The %label Excluded Country was not saved.', [
                            '%label' => $excludedCountry->label(),
                        ]
                    )
                );
            }

            $this->cache->delete('civiccookiecontrol_config');
            $form_state->setRedirect('entity.excludedcountry.collection');
        } catch (EntityStorageException $ex) {
            $this->messenger()->addMessage(
                $this->t(
                    'The %label Excluded Country already exist.', [
                        '%label' => $excludedCountry->label(),
                    ]
                )
            );

            $form_state->setRedirect('entity.excludedcountry.collection');
        }
    }

    /**
     * Helper function to check whether an Example configuration entity exists.
     */
    public function exist($id)
    {
        $entity = $this->entityTypeManager->getStorage('excludedcountry')->getQuery()
            ->condition('id', $id)
            ->execute();
        return (bool)$entity;
    }

}
