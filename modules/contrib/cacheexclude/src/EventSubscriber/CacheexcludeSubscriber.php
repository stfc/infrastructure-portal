<?php

namespace Drupal\cacheexclude\EventSubscriber;

use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Drupal\node\NodeInterface;

/**
 * Class CacheexcludeSubscriber.
 *
 * @package Drupal\cacheexclude.
 */
class CacheexcludeSubscriber implements EventSubscriberInterface {

  /**
   * {@inheritdoc}
   */
  public static function getSubscribedEvents() {
    $events[KernelEvents::REQUEST][] = ['disableCacheForPage'];
    return $events;
  }

  /**
   * Subscriber Callback for the event.
   */
  public function disableCacheForPage() {

    // Get cacheexclude page configuration.
    $config = \Drupal::config('cacheexclude.settings');
    $pages = trim($config->get('cacheexclude_list'));

    // If the current page is one we want to exclude from the cache,
    // disable page cache temporarily.
    if (!empty($pages)) {
      $current_path = \Drupal::service('path.current')->getPath();
      $current_path_alias = \Drupal::service('path.alias_manager')->getAliasByPath($current_path);
      $path_matches = \Drupal::service('path.matcher')->matchPath($current_path, $pages);
      $alias_path_matches = \Drupal::service('path.matcher')->matchPath($current_path_alias, $pages);

      if ($path_matches || $alias_path_matches) {
        // Disable page cache temporarily.
        \Drupal::service('page_cache_kill_switch')->trigger();
        return;
      }
    }

    // Check if current node type is one we want to exclude from the cache.
    $node = \Drupal::routeMatch()->getParameter('node');
    if ($node instanceof NodeInterface) {
      $node_type = $node->getType();
    }

    $node_types = $config->get('cacheexclude_node_types');

    if (!empty($node_types)) {
      $node_types = array_filter($node_types);
    }

    if (isset($node_type) && isset($node_types)) {
      if (in_array($node_type, $node_types)) {
        // Disable page cache temporarily.
        \Drupal::service('page_cache_kill_switch')->trigger();
      }
    }
  }

}
