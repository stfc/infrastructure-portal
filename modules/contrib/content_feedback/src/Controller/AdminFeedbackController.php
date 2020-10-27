<?php

namespace Drupal\content_feedback\Controller;

use Drupal\content_feedback\Form\ContentFeedbackClass;
use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Link;
use Drupal\Core\Datetime\DrupalDateTime;

/**
 * Returns responses for content_feedback routes.
 */
class AdminFeedbackController extends ControllerBase {

  /**
   * Content Feedbacks Admin Page.
   *
   * @param string $type
   *   The type of the overview form ('open' or 'resolved').
   *
   * @return array
   *   Returns renderable array that display all content feedbacks.
   */
  public function content($type = 'open') {
    $header = [
      [
        'data' => $this->t('Date'),
        'field' => 'updated',
        'sort' => 'desc',
      ],
      [
        'data' => $this->t('User'),
        'field' => 'name',
        'sort' => 'asc',
      ],
      'email' => $this->t('Email'),
      'path' => $this->t('Location'),
      'ipaddress' => $this->t('IP Address'),
      'message' => $this->t('Feedback'),
      'operations' => $this->t('Actions'),
    ];

    $rows = [];

    $feedbacksList = ContentFeedbackClass::getAllContentFeedbacks($header, $type);
    if ($feedbacksList) {
      foreach ($feedbacksList as $content) {
        $actionLink = [];

        $actionLink[] = Link::createFromRoute(
          $this->t('Edit'),
          'content_feedback_edit.form', ['id' => $content->id]
        )->toRenderable();
        $actionLink[] = Link::createFromRoute(
          $this->t('Delete'),
          'content_feedback_delete.form', ['id' => $content->id]
        )->toRenderable();

        $actionLinks = render($actionLink);
        $submitDate = DrupalDateTime::createFromTimestamp($content->updated,
          new \DateTimeZone(date_default_timezone_get())
        );

        $rows[] = [
          'data' => [
            $submitDate->format('m/d/Y - H:i'),
            $content->name,
            $content->email,
            $content->path,
            $content->ipaddress,
            $content->message,
            $actionLinks,
          ],
        ];
      }

      // The table description.
      $build = [
        '#markup' => ($type == 'open') ? '<h3>' . $this->t('Open Content Feedbacks') . '</h3>' :
        '<h3>' . $this->t('Resolved Content Feedbacks') . '</h3>',
      ];

      // Generate the table.
      $build['config_table'] = [
        '#theme' => 'table',
        '#header' => $header,
        '#rows' => $rows,
        '#attributes' => [
          'id' => 'fb-table',
        ],
      ];

      // Finally add the pager.
      $build['pager'] = [
        '#type' => 'pager',
      ];
    }
    else {
      $build = [
        '#type' => 'markup',
        '#markup' => '<p>' . $this->t('No Content Feedbacks Found.') . '</p>',
      ];
    }

    return $build;
  }

}
