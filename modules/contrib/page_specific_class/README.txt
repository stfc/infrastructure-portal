CONTENTS OF THIS FILE
---------------------

 * Introduction
 * Requirements
 * Recommended modules
 * Installation
 * Configuration
 * Maintainers


INTRODUCTION
------------

Page Specific Class intends to add class in body tag page-wise.

 * For a full description of the module, visit the project page:
   https://www.drupal.org/project/page_specific_class

 * To submit bug reports and feature suggestions, or to track changes:
   https://www.drupal.org/project/issues/search/page_specific_class


REQUIREMENTS
------------

No special requirements.


RECOMMENDED MODULES
-------------------

 No recommended modules.

INSTALLATION
------------

 * Install as you would normally install a contributed Drupal module.
   See: https://www.drupal.org/node/895232 for further information.


CONFIGURATION
-------------

 * Visit the page specific class setting form at
   (/admin/config/page-class/settings) or Configuration >> User Interface >> 
    Page Specific Class.


 * Enter the urls along with class("|" seperated) in textarea and save the form.
 * For example: Enter below value in textarea 
  
   /node/1|abc
   /page-example|page1 page2 page3
   /hello-world|xyz
   /<front>|home-page-class
   /*|all-page

 * When you visit "/node/1" page , in body tag "abc" class has added. Because of
   (/node/1|abc) settings.
 * When you visit "/page-example" page , in body tag "page1 page2 page3" class,
   has added. Because of (/page-example|page1 page2 page3) settings.if you want,
   to add multiple classes then enter multiple classes by comma separated.

 * When you visit "/hello-world" page , in body tag "xyz" class has added.
   Because of (/hello-world|xyz) settings.
 * When you visit home page , in body tag "home-page-class" class has added.
   Because of (/<front>|home-page-class) settings.
 * When you visit any page page , in body tag "all-page" class has added.
   Because of (/*|all-page) settings.

 * You can add class to body tag of any page like 
   . Node Page
   . Views Page
   . Custom Route


MAINTAINERS
-----------

Current maintainers:
 * Hardik Patel - https://www.drupal.org/u/hardik_patel_12
