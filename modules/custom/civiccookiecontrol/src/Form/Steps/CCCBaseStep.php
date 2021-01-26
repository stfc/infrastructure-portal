<?php

namespace Drupal\civiccookiecontrol\Form\Steps;

use Drupal\Core\TempStore\TempStoreException;
use Symfony\Component\Yaml\Yaml;

/**
 * Class BaseStep.
 *
 * @package Drupal\civiccookiecontrol\Forms\Step
 */
abstract class CCCBaseStep implements CCCStepInterface {
  public $cccFormElements;
  public $tempStore;
  public $fileSystem;
  public $countryManager;
  /**
   * Multi steps of the form.
   *
   * @var CCCStepInterface
   */
  protected $step;

  /**
   * Values of element.
   *
   * @var array
   */
  protected $values;

  /**
   * BaseStep constructor.
   */
  public function __construct() {
    $this->step = $this->setStep();
  }

  /**
   * {@inheritdoc}
   */
  public function getStep() {
    return $this->step;
  }

  /**
   * {@inheritdoc}
   */
  public function isLastStep() {
    return FALSE;
  }

  /**
   * {@inheritdoc}
   */
  public function setValues($values) {
    $this->values = $values;
  }

  /**
   * {@inheritdoc}
   */
  public function getValues() {
    return $this->values;
  }

  /**
   * {@inheritdoc}
   */
  public function getFieldNames() {
    return [];
  }

  /**
   * {@inheritdoc}
   */
  public function getFieldsValidators() {
    return [];
  }

  /**
   * {@inheritdoc}
   */
  abstract protected function setStep();

  /**
   * @return mixed
   */
  public function getStepManager() {
    return $this->stepManager;
  }

  /**
   * @param mixed $stepManager
   */
  public function setStepManager($stepManager): void {
    $this->stepManager = $stepManager;
  }


  public function loadFormElements(){

    $cccFormElements = $this->tempStore->get('cccFormElements');

    if (empty($cccFormElements)) {
      $ymlFiles = $this->fileSystem->scanDirectory(DRUPAL_ROOT . '/' . drupal_get_path('module', 'civiccookiecontrol') . "/src/Form/CookieControlFormElements", '/.*\.yml$/');
      foreach ($ymlFiles as $file_path => $ymlFile) {
        $file_contents = file_get_contents($file_path);
        $formItems = Yaml::parse($file_contents);
        foreach ($formItems as $key => $element) {

          if (in_array(8, $element['cookieVersion'])) {
            $this->cccFormElements[8][$ymlFile->name][$key] = $element;
          }
          if (in_array(9, $element['cookieVersion'])) {
            if ($element['#type'] == 'radios' && array_key_exists('#cc9options', $element)) {
              $element['#options'] = array_merge($element['#options'], $element['#cc9options']);
            }
            $this->cccFormElements[9][$ymlFile->name][$key] = $element;
          }
          unset($element['cookieVersion']);
          unset($element['#cc9options']);
        }
      }
      try {
        $this->tempStore->set('cccFormElements', $this->cccFormElements);
      } catch (TempStoreException $e) {
        \Drupal::logger('civiccookiecontrol')->notice($ex->getMessage());
      }
    }else{
      $this->cccFormElements = $cccFormElements;
    }
  }
}
