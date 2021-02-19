<?php

namespace Drupal\content_feedback\Form;

use Drupal\Core\Database\Database;

/**
 * CRUD functions for ContentFeedback.
 */
class ContentFeedbackClass {

  /**
   * Inserting new content feedback.
   *
   * @param string $name
   *   Name of submitter.
   * @param string $email
   *   Email of submitter.
   * @param string $message
   *   Feedback message.
   * @param string $path
   *   Page url where feedback given.
   * @param string $ipaddress
   *   IP Address.
   * @param int $timestamp
   *   Current Timestamp.
   *
   * @throws \Exception
   */
  public static function addContentFeedback($name, $email, $category, $message, $path, $ipaddress, $timestamp) {
    $connection = Database::getConnection();
    $connection->insert('content_feedback')->fields(
      [
        'name' => $name,
        'email' => $email,
        'category' => $category,
        'message' => $message,
        'path' => $path,
        'ipaddress' => $ipaddress,
        'created' => $timestamp,
        'updated' => $timestamp,
      ]
    )->execute();
  }

  /**
   * Get all content feedbacks.
   *
   * @param array $header
   *   The table header.
   * @param string $type
   *   The type of the overview form ('open' or 'resolved').
   *
   * @return array
   *   Return associative array of all feedbacks.
   */
  public static function getAllContentFeedbacks(array $header, $type) {
    $connection = Database::getConnection();
    $fields = [
      'id',
      'name',
      'email',
      'category',
      'message',
      'path',
      'ipaddress',
      'status',
      'updated',
    ];
    $status = ($type == 'open') ? 1 : 2;
    $list = $connection->select('content_feedback', 'cf');
    $list->fields('cf', $fields);
    $list->condition('status', $status);
    $table_sort = $list->extend('Drupal\Core\Database\Query\TableSortExtender')->orderByHeader($header);
    $pager = $table_sort->extend('Drupal\Core\Database\Query\PagerSelectExtender')->limit(50);
    $results = $pager->execute()->fetchAll();

    return $results;
  }

  /**
   * Get content feedback details.
   *
   * @param int $id
   *   Id of feedback.
   *
   * @return array
   *   Return associative array of feedback.
   */
  public static function getFeedbackById($id) {
    $connection = Database::getConnection();
    $fields = [
      'id',
      'name',
      'email',
      'category',
      'message',
      'path',
      'ipaddress',
      'status',
    ];
    $feedback = $connection->select('content_feedback', 'cf')
      ->fields('cf', $fields)
      ->condition('id', $id);
    $executed = $feedback->execute();
    $result = $executed->fetchAssoc();

    return $result;
  }

  /**
   * Check if content feedback exists.
   *
   * @return bool
   *   Returns if feedback exists or not.
   */
  public static function checkFeedback($id) {
    $connection = Database::getConnection();
    $check = $connection->select('content_feedback', 'cf')
      ->fields('cf', ['id'])
      ->condition('id', $id)
      ->countQuery()
      ->execute()
      ->fetchField();

    return $check;
  }

  /**
   * Update content feedback.
   *
   * @return int
   *   Returns id of the updated content feedback.
   *
   * @throws \Exception
   */
  public static function updateFeedback($status, $name, $email,$category, $ip, $message, $path, $id) {
    $connection = Database::getConnection();
    $updated = $connection->update('content_feedback')
      ->fields(
        [
          'status' => $status,
          'name' => $name,
          'email' => $email,
          'category' => $category,
          'ipaddress' => $ip,
          'message' => $message,
          'path' => $path,
          'updated' => time(),
        ]
      )
      ->condition('id', $id)
      ->execute();

    return $updated;
  }

  /**
   * Delete content feedback.
   *
   * @param int $id
   *   Id of content feedback to be deleted.
   */
  public static function deleteContentFeedback($id) {
    $connection = Database::getConnection();
    $connection->delete('content_feedback')
      ->condition('id', $id)
      ->execute();
  }

}
