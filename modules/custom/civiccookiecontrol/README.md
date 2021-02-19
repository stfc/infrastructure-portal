Cookie control module for drupal.

=== Civic Cookie Control 8 ===
Contributors: aperperis, ralliaf
Plugin Name: Civic Cookie Control 8
Widget URI: https://www.civicuk.com/cookie-control
Author URI: https://www.civicuk.com
Author: Civicuk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html


This module enables you to comply with the UK and EU law on cookies.

== Description ==

This Drupal plugin simplifies the implementation and customisation process of Cookie Control by [Civic UK](https://www.civicuk.com/).

With an elegant user-interface that doesn't hurt the look and feel of your site, Cookie Control is a mechanism for controlling user consent for the use of cookies on their computer.

There are several license types available, including:

**Community edition** - Provides all of the core functionality of Cookie Control, and is of course GDPR compliant. You can use it to test Cookie Control, or if you don't require any of its pro features.

**Pro edition** - Includes all of the pro features for use on a single website, priority support and updates during your subscription.

**Multisite Pro Edition** - Offers all of the pro features for use on up to ten websites, priority support and updates during your subscription.

**Pro edition** and **Multisite Pro Edition** support IAB (TCF v1.1).

To find out more about Cookie Control please visit [Civic's Cookie Control home page](https://www.civicuk.com/cookie-control).


**Please Note**:

You will need to obtain an API KEY from [Civic UK](https://www.civicuk.com/cookie-control/download) in order to use the module.

Cookie Control is simply a mechanism to enable you to comply with UK and EU law on cookies. **You need to determine** which elements of your website are using cookies (this can be done via a [Cookie Audit](https://www.civicuk.com/cookie-control/deployment#audit), and ensure they are connected to Cookie Control.


== Installation ==

1. Obtain an API Key from [Civic UK](https://www.civicuk.com/cookie-control/download) for the site that you wish to deploy Cookie Control.*
2. Add the module in the corresponding Drupal folder.
3. Enable the module.
4. Run "drush updb" or update the database from update.php.
5. Configure the module from the 'Configuration->Civic Cookie Control 8' menu.
6. All done. Good job!

* If you already have an API Key and are wanting to update your domain records with CIVIC, please visit [Civic UK](https://www.civicuk.com/cookie-control/download)

== Frequently Asked Questions ==

= API Key Error =

If you are using the free version your API key relates to a specific host domain.

So www.mydomain.org might work, but mydomain.org (without the www) might not.

Be sure that you enter the correct host domain when registering for your API key.

The recommended way of avoiding this problem is to create a 301 redirect so all requests to mydomain.org get forwarded to www.mydomain.org

This may have [SEO benefits](http://www.mattcutts.com/blog/seo-advice-url-canonicalization/) too as it makes it very clear to search engines which is the canonical (one true) domain.

= Is installing and configuring the plugin enough for compliance? =

Only if the only cookies your site uses are the Google Analytics ones.
If other plugins set cookies, it is possible that you will need to write additional JavaScript.
To determine what cookies your site uses do a a [Cookie Audit](https://www.civicuk.com/cookie-control/deployment#audit). You will need to do this in any case in order to have a compliant privacy policy.
It is your responsibility as a webmaster to know what cookies your site sets, what they do and when they expire. If you don't you may need to consult whoever put your site together.

= I'm getting an error message Cookie Control isn't working? =

Support for Cookie Control is available via the forum: [https://groups.google.com/forum/#!forum/cookiecontrol](https://groups.google.com/forum/#!forum/cookiecontrol/) or open a support ticket in [Support](https://www.civicuk.com/support)

= Update from previous version =

Users with plugin version 8.x-1.0-rc1 (downloaded directly from civicuk.com website) should backup their data,
delete the older plugin version and download the latest version from civicuk.com website. Then run "drush updb" or visit /update.php.
Your data will remain intact, however you will have to re assign the third party cookies inside each cookie category and then save your settings. Users with version prior to 1.6 should review all settings and select values for newly created configuration options.


== Changelog ==
= 8.x-2.1-rc1 =
* Added alternative appearance styles for the notify bar's settings button.
* Added encodeCookie property to better support RFC standards and certain types of server processing.
* Added subDomains property to offer more flexibility on how user consent is recorded.
* IAB support (TCF v1.1)

= 8.x-3.0-rc1 =
* Bug fixes and update of cookie control script

= 8.x-4.0-rc1 =
* Major code refactoring.
    * Module is now extended to support both cookiecontrol v8 and cookiecontrol v9 api keys.
    * Module is now extended to support bot IAB 1.1 (v8 licenses) and IAB 2.0 (v9 licenses)
    * Module is prepared for drupal 9.
* Added support for IAB TCF v2.0 for cookiecontrol v9 api keys. Support for v1.1 has been dropped since it is to be depreciated by IAB at the end of March 2020; certain IAB related public methods have been removed and the iabCMP text object has been updated accordingly. It is no longer necessary to set optionalCookies when in iab mode since IAB purposes will be the first panel settings.
* Added support for California Consumer Privacy Act (CCPA). – Cookie Control can work in either GDPR or CCPA mode based on the user’s location. For EU users only GDPR mode is applicable.
* Added new box option for the initialState property.
* Added sameSiteCookie property, to control whether SameSite:Strict is set to the CookieControl cookie. Setting this to false would mean Cookie Control can only work over HTTPS.
* Added acceptBehaviour property to control the behaviour of “Accept” buttons. They now default to accepting all cookies. Please note that this is different from the behaviour of v8 where only recommended cookies were accepted.
* Added locale property so that the selected locale is customisable. Thus user may select to user either the current drupal language for locale or the default browser locale.
* Added new closeOnGlobalChange option so that the there is control on whether the window should close or remain open when the user accepts/rejects cookies.
* Added settingsStyle option that determines the appearance of the settings button on the notification bar.
* Added branding sub-properties that control the styling of the reject buttons
* Added field to set the "Accept All" button text.
* Accessibility improvements and bug fixes.
* All apikeys now work under the following local adresses: localhost, 127.0.0.0/8, 10.0.0.0/8, 192.168.0.0/16, 172.16.0.0/12

= 8.x-4.1-rc1 =
* Added notifyDismissButton option to hide the X close icon on the notify bar.
* Added sameSiteValue property to control the value of the SameSite flag for the CookieControl cookie.
* Added some legal texts required by IAB TCFv2.0

= 8.x-4.2-rc1 =
* Added wysiwyg editor in description fields.
* Added overlay option within Accessibility Object.
