<?php

/**
 * @file
 * Contains \Drupal\visitors\Plugin\Block\VisitorsBlock.
 */

namespace Drupal\visitors\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Visitors' block.
 *
 * @Block(
 *   id = "visitors_block",
 *   admin_label = @Translation("Visitors"),
 *   category = @Translation("Visitors")
 * )
 */
class VisitorsBlock extends BlockBase {
  protected $config;
  protected $items;

  /**
   * {@inheritdoc}
   */
  public function build() {
    $this->config = \Drupal::config('visitors.config');
    $this->items = array();

    $this->_showTotalVisitors();
    $this->_showUniqueVisitors();
    $this->_showRegisteredUsersCount();
    $this->_showLastRegisteredUser();
    $this->_showPublishedNodes();
    $this->_showUserIp();
    $this->_showSinceDate();

    return array(
      'visitors_info' => array(
        '#theme' => 'item_list',
        '#items' => $this->items,
      ),
    );
  }

  /**
   * Display total visitors count to visitors block.
   */
  protected function _showTotalVisitors() {
    if ($this->config->get('show_total_visitors')) {
      $query = \Drupal::database()->select('visitors');
      $query->addExpression('COUNT(*)');

      $count = $query->execute()->fetchField() +
        $this->config->get('start_count_total_visitors');

      $this->items[] = t('Total Visitors: %visitors',
        array('%visitors' => $count)
      );
    }
  }

  /**
   * Display unique visitors count to visitors block.
   */
  protected function _showUniqueVisitors() {
    if ($this->config->get('show_unique_visitor')) {
      $query = \Drupal::database()->select('visitors');
      $query->addExpression('COUNT(DISTINCT visitors_ip)');

      $unique_visitors = $query->execute()->fetchField();

      $this->items[] = t('Unique Visitors: %unique_visitors',
        array('%unique_visitors' => $unique_visitors)
      );
    }
  }

  /**
   * Display registered users count to visitors block.
   */
  protected function _showRegisteredUsersCount() {
    if ($this->config->get('show_registered_users_count')) {
      $query = \Drupal::database()->select('users');
      $query->addExpression('COUNT(*)');
      $query->condition('uid', '0', '>');

      $registered_users_count = $query->execute()->fetchField();

      $this->items[] = t('Registered Users: %registered_users_count',
        array('%registered_users_count' => $registered_users_count)
      );
    }
  }

  /**
   * Display last registered user to visitors block.
   */
  protected function _showLastRegisteredUser() {
    if ($this->config->get('show_last_registered_user')) {
      $last_user_uid = \Drupal::database()->select('users', 'u')
        ->fields('u', array('uid'))
        ->orderBy('uid', 'DESC')
        ->range(0, 1)
        ->execute()
        ->fetchField();

      $user = \Drupal::entityTypeManager()->getStorage('user')->load($last_user_uid);
      $username = array(
        '#theme' => 'username',
        '#account' => $user
      );

      $this->items[] = t('Last Registered User: @last_user',
        array('@last_user' => \Drupal::service('renderer')->render($username))
      );
    }
  }

  /**
   * Display published nodes count to visitors block.
   */
  protected function _showPublishedNodes() {
    if ($this->config->get('show_published_nodes')) {
      $query = \Drupal::database()->select('node', 'n');
      $query->innerJoin('node_field_data', 'nfd', 'n.nid = nfd.nid');
      $query->addExpression('COUNT(*)');
      $query->condition('nfd.status', '1', '=');

      $nodes = $query->execute()->fetchField();

      $this->items[] = t('Published Nodes: %nodes',
        array('%nodes' => $nodes)
      );
    }
  }

  /**
   * Display user ip to visitors block.
   */
  protected function _showUserIp() {
    if ($this->config->get('show_user_ip')) {
      $this->items[] = t('Your IP: %user_ip',
        array('%user_ip' => \Drupal::request()->getClientIp())
      );
    }
  }

  /**
   * Display the start date statistics to visitors block.
   */
  protected function _showSinceDate() {
    if ($this->config->get('show_since_date')) {
      $query = \Drupal::database()->select('visitors');
      $query->addExpression('MIN(visitors_date_time)');

      $since_date = $query->execute()->fetchField();

      $this->items[] = t('Since: %since_date',
        array('%since_date' => \Drupal::service('date.formatter')->format($since_date, 'short'))
      );
    }
  }
}

