<?php

namespace Drupal\Tests\page_specific_class\Functional;

use Drupal\Core\Url;
use Drupal\node\Entity\Node;
use Drupal\Tests\BrowserTestBase;

/**
 * Ensure that the page_specific_class forms work properly.
 *
 * @group page_specific_class
 *
 * @ingroup page_specific_class
 */
class PageSpecificTest extends BrowserTestBase {

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'seven';

  /**
   * Our module dependencies.
   *
   * @var string[]
   */
  public static $modules = ['page_specific_class', 'node'];

  /**
   * The installation profile to use with this test.
   *
   * @var string
   */
  protected $profile = 'standard';

  /**
   * {@inheritdoc}
   */
  protected function setUp(): void {
    parent::setUp();
    $admin_user = $this->drupalCreateUser([
      'administer site configuration',
      'access administration pages',
    ]);
    $this->drupalLogin($admin_user);
  }

  /**
   * {@inheritdoc}
   */
  public function testFunctional() {
    $this->doTestRoutes();
    $this->doTestForm();
  }

  /**
   * Check routes defined by page_specific_class.
   */
  public function doTestRoutes() {
    $assertion = $this->assertSession();
    // Check configuration route accessible or not.
    $path = Url::fromRoute("page_specific_class.settings");
    $this->drupalGet($path);
    $assertion->statusCodeEquals(200);
  }

  /**
   * Check class added by page_specific_class.
   */
  public function doTestForm() {
    $assertion = $this->assertSession();
    // Create node.
    $node = Node::create([
        'type' => 'page',
        'title' => 'Node Example',
    ]);
    $node->save();
    $nid = $node->id();
   // Go to configuration page and enter details and save the form.
    $path = Url::fromRoute("page_specific_class.settings");
    $this->drupalGet($path);
    $edit = ['url_with_class' => "/node/$nid|custom-node"];
    $this->drupalPostForm(Url::fromRoute('page_specific_class.settings'), $edit, 'Save configuration');
    // Check configuration is saved.
    $assertion->pageTextContains('The configuration options have been saved.');
    // Go to the node page,  and chek on body tag "custom-node" class
    // is present.
    $this->drupalGet("/node/$nid");
    $body_class_element = $this->xpath("//body[contains(@class, 'custom-node')]");
    $this->assertTrue(!empty($body_class_element), 'custom-node class not found.');
  }

}
