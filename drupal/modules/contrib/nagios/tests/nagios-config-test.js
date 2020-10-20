/**
 * @file
 * To execute this test, install the qd_screenshottest module with Composer.
 *
 * Then, on a Bash command line, run this statement:
 * `screenshottest modules/contrib/nagios`
 */

require('modules/exert-profiles')('minimal', 'standard');
require('modules/start')('admin', 'admin');

// Enable the modules for this test. If the following line fails, you have to
// add this line to your settings.php:
//   $settings['extension_discovery_scan_tests'] = TRUE;
require('modules/drush')('en nagios nagios_hook_test_module --quiet');

// Check if checkboxes are enabled.
casper.thenOpen('http://localhost/admin/config/system/nagios/ignored_modules');
casper.then(function () {
  casper.test.assertTitle('Ignored modules | Drush Site-Install');
  var attr = casper.getElementAttribute('#edit-modules-update', 'disabled');
  casper.test.assert(!attr, 'The checkbox is enabled');
});

// Disable the nagios module hooks.
casper.thenOpen('http://localhost/admin/config/system/nagios');
casper.thenClick('#edit-nagios-enable-nagios');
casper.thenClick('#edit-submit');

// Checkboxes should now be disabled.
casper.thenOpen('http://localhost/admin/config/system/nagios/ignored_modules');
casper.then(function () {
  var attr = casper.getElementAttribute('#edit-modules-update', 'disabled');
  casper.test.assertEquals(attr, "disabled", "The checkbox is disabled");
});

// Enable status page over HTTP
casper.thenOpen('http://localhost/admin/config/system/nagios');
casper.then(function () {
  casper.fill('#nagios-settings', {
    'nagios_ua': 'ForOurTest',
    'nagios_enable_status_page': true,
    'nagios_enable_status_page_get': 1,
    'nagios_enable_nagios': 1
  }, false);
});
casper.thenClick('#edit-submit');
casper.waitForText('The configuration options have been saved.');

// Visit the nagios status page to see if the example module reports its
// example errors:
casper.thenOpen('http://localhost/nagios?unique_id=ForOurTest');
casper.waitForText('NAGIOS_CHECK_KEY:WARNING=Text description for the problem');
casper.then(function () {
  casper.test.assertTextExists('Nagios Hook Test Module');
});

// Add 'Nagios Hook Test Module' to the list of ignored modules.
casper.thenOpen('http://localhost/admin/config/system/nagios/ignored_modules');
casper.then(function () {
  casper.fill('#nagios-ignored-modules', {
    'modules[nagios_hook_test_module]': 'nagios_hook_test_module',
  }, false);
});
casper.thenClick('#edit-submit');
casper.waitForText('The configuration options have been saved.');

// Now, nagios_hook_test_module_requirements should no longer be called.
casper.thenOpen('http://localhost/nagios?unique_id=ForOurTest');
casper.waitForText('NAGIOS_CHECK_KEY:WARNING=Text description for the problem');
casper.then(function () {
  casper.test.assertTextDoesntExist('Nagios Hook Test Module', 'Test module requirements are ignored');
});
