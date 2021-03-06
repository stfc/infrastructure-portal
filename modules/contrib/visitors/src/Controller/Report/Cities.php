<?php

/**
 * @file
 * Contains Drupal\visitors\Controller\Report\Cities.
 */

namespace Drupal\visitors\Controller\Report;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Datetime\Date;
use Drupal\Core\Datetime\DateFormatterInterface;
use Drupal\Core\Form\FormBuilderInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Component\Utility\UrlHelper;
use Drupal\Core\Url;
use Drupal\Core\Link;

class Cities extends ControllerBase {
  /**
   * The date service.
   *
   * @var \Drupal\Core\Datetime\DateFormatterInterface
   */
  protected $date;

  /**
   * The form builder service.
   *
   * @var \Drupal\Core\Form\FormBuilderInterface
   */
  protected $formBuilder;

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('date.formatter'),
      $container->get('form_builder')
    );
  }

  /**
   * Constructs a Cities object.
   *
   * @param \Drupal\Core\Datetime\DateFormatterInterface $date
   *   The date service.
   *
   * @param \Drupal\Core\Form\FormBuilderInterface $form_builder
   *   The form builder service.
   */
  public function __construct(DateFormatterInterface $date_formatter, FormBuilderInterface $form_builder) {
    $this->date        = $date_formatter;
    $this->formBuilder = $form_builder;
  }

  /**
   * Returns a cities page.
   *
   * @return array
   *   A render array representing the cities page content.
   */
  public function display($country) {
    $form = $this->formBuilder->getForm('Drupal\visitors\Form\DateFilter');
    $header = $this->_getHeader();
    return array(
      '#title' => t('Visitors from') . ' ' . t($country),
      'visitors_date_filter_form' => $form,
      'visitors_table' => array(
        '#type'  => 'table',
        '#header' => $header,
        '#rows'   => $this->_getData($header, $country),
      ),
      'visitors_pager' => array('#type' => 'pager')
    );
  }

  /**
   * Returns a table header configuration.
   *
   * @return array
   *   A render array representing the table header info.
   */
  protected function _getHeader() {
    return array(
      '#' => array(
        'data'      => t('#'),
      ),
      'visitors_city' => array(
        'data'      => t('City'),
        'field'     => 'visitors_city',
        'specifier' => 'visitors_city',
        'class'     => array(RESPONSIVE_PRIORITY_LOW),
      ),
      'count' => array(
        'data'      => t('Count'),
        'field'     => 'count',
        'specifier' => 'count',
        'class'     => array(RESPONSIVE_PRIORITY_LOW),
        'sort'      => 'desc',
      ),
    );
  }

  /**
   * Returns a table content.
   *
   * @param array $header
   *   Table header configuration.
   *
   * @return array
   *   Array representing the table content.
   */
  protected function _getData($header, $country) {
    $items_per_page = \Drupal::config('visitors.config')->get('items_per_page');
    $original_country =  ($country == '(none)') ? '' : $country;

    $query = \Drupal::database()->select('visitors', 'v')
      ->extend('Drupal\Core\Database\Query\PagerSelectExtender')
      ->extend('Drupal\Core\Database\Query\TableSortExtender');

    $query->addExpression('COUNT(visitors_city)', 'count');
    $query->fields('v', array('visitors_city'));
    $query->condition('v.visitors_country_name', $original_country);
    visitors_date_filter_sql_condition($query);
    $query->groupBy('visitors_city');
    $query->orderByHeader($header);
    $query->limit($items_per_page);

    $count_query = \Drupal::database()->select('visitors', 'v');
    $count_query->addExpression('COUNT(DISTINCT visitors_city)');
    $count_query->condition('v.visitors_country_name', $original_country);
    visitors_date_filter_sql_condition($count_query);
    $query->setCountQuery($count_query);
    $results = $query->execute();

    $rows = array();

    $page = isset($_GET['page']) ? $_GET['page'] : 0;
    $i = 0 + ($page  * $items_per_page);

    foreach ($results as $data) {
      if ($data->visitors_city == '') {
        $data->visitors_city = '(none)';
      }
      $visitors_city_url = Url::fromRoute('visitors.city_hits',array("country"=>$country,"city"=>$data->visitors_city));
      $visitors_city_link = Link::fromTextAndUrl($this->t($data->visitors_city),$visitors_city_url);
      $visitors_city_link = $visitors_city_link->toRenderable();
      $rows[] = array(
        ++$i,
        render($visitors_city_link),
        $data->visitors_city,
        $data->count
      );
    }
    return $rows;
  }
}

