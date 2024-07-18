=== jQuery Updater ===
Contributors: Ramoonus
Donate link: http://www.ramoonus.nl/donate/
Tags: jquery, update, jquery ui, javascript, jq
Requires at least: 6.0
Tested up to: 6.6
Stable tag: 3.7.1.3
Requires PHP: 5.6

This plugin updates jQuery to the latest stable version on your website.

== Description ==
This plugin updates [jQuery](http://jquery.com/) to the latest official stable version, which is most likely not available within the latest stable release of WordPress.
jQuery Migrate is also included for backwards compatibility. 

No files are replaced, therefore deactivation of this plugin returns your site to it`s original state.

Since WordPress 5.6 includes an up-to-date version of jQuery 3, upgrading shouldn't`t be necessary in most cases. 

**Warning**

If you are not familiar with beta testing, bugfixing, javascript or running bleeding edge software it`s **not** recommended.
I will not provide help on JavaScript and jQuery, only on plugin related issues (PHP)!

**Reporting problems**

Please post bug reports and request for help on [WordPress.org Support Forums](https://wordpress.org/support/plugin/jquery-updater). 

If you run into any bugs, turning this plugin off will fully deactivate everything.

**Work in Progress**

* Options screen to enable/disable
* Option to choose a specific jQuery version
* Automatic cache flushing

For more information on the development visit the plugins [GitHub](https://github.com/Ramoonus/jQuery-Updater/issues)

== Installation ==
1. Upload `jquery-updater/` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Sit back and enjoy

== Frequently Asked Questions ==
1. Q: Do I need this plugin if I`m running the latest version of WordPress on my site?
A: No

2. Q: This plugin breaks my site! How do I fix it?
A: Using an up-to-date jQuery could break your site on the client-side.

== Upgrade Notice ==
Please clear the server and browser cache after upgrading/disabling this plugin.

== Changelog ==
= 3.7.1.1 =
* Updated [jQuery Migrate 3.5.0](https://github.com/jquery/jquery-migrate/releases/tag/3.5.0)
* Compatible with WP 6.6

= 3.7.1.1 =
* Updated [jQuery Migrate 3.4.1](https://github.com/jquery/jquery-migrate/releases/tag/3.4.1), as requested by wtrojanowski 
* Compatible with WP 6.5

= 3.7.1 =
* Updated to [jQuery 3.7.1](https://blog.jquery.com/2023/08/28/jquery-3-7-1-released-reliable-table-row-dimensions/)
* Compatible with WP 6.4

= 3.7.0 =
* Updated to [jQuery 3.7.0](https://blog.jquery.com/2023/05/11/jquery-3-7-0-released-staying-in-order/)
* Compatible with WP 6.3

= 3.6.4 =
* Updated to [jQuery 3.6.4](https://blog.jquery.com/2023/03/08/jquery-3-6-4-released-selector-forgiveness/)
* Typo fix

= 3.6.3 =
* Updated to [jQuery 3.6.3](https://blog.jquery.com/2022/12/20/jquery-3-6-3-released-a-quick-selector-fix/)

= 3.6.2 =
* Updated to [jQuery 3.6.2](https://blog.jquery.com/2022/12/13/jquery-3-6-2-released/)
* Supports PHP 8.2

= 3.6.1 =
* Updated to [jQuery 3.6.1](https://blog.jquery.com/2022/08/26/jquery-3-6-1-maintenance-release/)
* Include slim version (not in use)
* Supports WordPress 6.1

= 3.6.0.2 =
* Supports WordPress 6.0
* Updated [jQuery Migrate](https://github.com/jquery/jquery-migrate) to 3.4.0
* Included map files (by WPorg forum request)
* Included short.debug.js

= 3.6.0.1 =
* Fixes missing jQuery Migrate minified file
* Supports WordPress 5.8
* Supports WordPress 5.9

= 3.6.0 =
* Updated [jQuery to 3.6.0](http://blog.jquery.com/2021/03/02/jquery-3-6-0-released/)
* Updated jQuery Migrate to 3.3.2
* Requires atleast WordPress 5.6+
* Supports WordPress 5.7
* Improved readme

= 3.5.1.2 =
* Bumped supported version to WordPress 5.5
* Removed (hidden) options screen for now

= 3.5.1.1 = 
* Bugfix: Fixed a typo

= 3.5.1 =
* Updated [jQuery to 3.5.1](https://blog.jquery.com/2020/05/04/jquery-3-5-1-released-fixing-a-regression/)
* Updater [jQuery Migrate to 3.3.0](https://github.com/jquery/jquery-migrate/#readme)
* Changed priority from 1 to 10 (default)
* Crafted placeholders for more options

= 3.5.0 =
* Updated [jQuery to 3.5.0](http://blog.jquery.com/2020/04/10/jquery-3-5-0-released/)
* Updater [jQuery Migrate to 3.1.0](https://github.com/jquery/jquery-migrate/#readme)
* Added option page, without any options
* Added an activation message

= 3.4.1.3 =
* registering scripts not queuing

= 3.4.1.2 =
* Reverted back queuing

= 3.4.1.1 =
As requested on the wordpress.org support forms: 
* Added jQuery (update) to the login screen
* Improved queuing

= 3.4.1 =
* Updated [jQuery to 3.4.1](http://blog.jquery.com/2019/05/01/jquery-3-4-1-triggering-focus-events-in-ie-and-finding-root-elements-in-ios-10/)

= 3.4.0 =
* Updated [jQuery to 3.4.0](http://blog.jquery.com/2019/04/10/jquery-3-4-0-released/)

= 3.3.1 =
* Updated [jQuery to 3.3.1](http://blog.jquery.com/2018/01/20/jquery-3-3-1-fixed-dependencies-in-release-tag/)

= 3.3.0 =
* Updated [jQuery to 3.3.0](http://blog.jquery.com/2018/01/19/jquery-3-3-0-a-fragrant-bouquet-of-deprecations-and-is-that-a-new-feature/)

= 3.2.1 =
* Updated jQuery to 3.2.1

= 3.2.0 =
* Updated jQuery to 3.2.0
* Removed upgrade notice

= 3.1.1 =
* Updated jQuery to 3.1.1

= 3.1.0 =
* [Updated jQuery to 3.1.0](https://blog.jquery.com/2016/07/07/jquery-3-1-0-released-no-more-silent-errors/)
* Updated minimum supported WordPress version to 4.2 (from 4.0)
* Validated and tested with WordPress version 4.6

= 3.0.0 =
* [Updated jQuery to 3.0.0](https://blog.jquery.com/2016/06/09/jquery-3-0-final-released/)
* [Updated jQuery Migrate to 3.0.0]()https://blog.jquery.com/2016/06/09/jquery-3-0-final-released/
* Updated minimum supported WordPress version to 4.0 (from 3.8)

= 2.2.4 =
* Updated jQuery to 2.2.4
* Updated jQuery Migrate to 1.4.1

= 2.2.3 =
* [Updated jQuery to 2.2.3](http://blog.jquery.com/2016/02/22/jquery-1-12-1-and-2-2-1-released/)
* Updated Upgrade Notice

= 2.2.2 =
* [Updated jQuery to 2.2.2](http://blog.jquery.com/2016/02/22/jquery-1-12-1-and-2-2-1-released/)
* Updated Upgrade Notice

= 2.2.1 =
* [Updated jQuery to 2.2.1](http://blog.jquery.com/2016/02/22/jquery-1-12-1-and-2-2-1-released/)
* Updated Readme

= 2.2.0.1 =
* Updated jQuery Migrate to 1.3.1
* Removed unused files

= 2.2.0 =
* Made the core translation ready
* [Updated jQuery to 2.2.0](http://blog.jquery.com/2016/01/08/jquery-2-2-and-1-12-released/)
* Replaced comments with PHPDoc
* Removed some unused files

= 2.1.4 =
* Updated jQuery to 2.1.4
* Updated Readme

= 2.1.3 =
* Updated jQuery to 2.1.3
* Fixed a bug with jQuery Migrate not properly loading
* Updated minimum WordPress version to 3.9
* Removed some unit testing scripts

= 2.1.1 =
* Updated jQuery to 2.1.1

= 2.1.0 = 
* Updated jQuery to 2.1.0

= 2.0.3 = 
* Updated jQuery to 2.0.3
* Updated [jQuery Migrate](http://github.com/jquery/jquery-migrate/) to 1.2.1
* Improved documentation with FAQ and removed screenshots. (who wants to see screenshots of javascript?)
* Added jQuery 1.x as fallback
* Fallback: Updated jQuery to 1.10.2
* Since WordPress  3.6 this plugin cannot break the dashboard.

= 2.0.0.1 / 2.0.0.2 =
* Added [jQuery Migrate](http://github.com/jquery/jquery-migrate/)

= 2.0.0 = 
jQuery 2.0 has the same API as jQuery 1.9, but does not support Internet Explorer 6, 7, or 8. All the notes in the jQuery 1.9 Upgrade Guide apply here as well. Since IE 6/7/8 are still relatively common, we recommend using the 1.x version unless you are certain no IE 6/7/8 users are visiting the site.

* Updated jQuery to 2.0.0 [releasenotes](http://blog.jquery.com/2013/04/18/jquery-2-0-released/) 

= 1.9.1 = 
* Updated jQuery to 1.9.1 [releasenotes](http://blog.jquery.com/2013/02/04/jquery-1-9-1-released/) 

= 1.9.0 = 
* Updated jQuery to 1.9.0

= 1.8.3 = 
* Updated jQuery to 1.8.3
* Improved code styling and documentation

= 1.8.2 = 
* Updated jQuery to 1.8.2
* Fixed a bug in the Dashboard
* Minor code improvement

= 1.8.1 = 
* Updated jQuery to 1.8.1

= 1.8.0 = 
* Updated jQuery to 1.8.0  [releasenotes](http://blog.jquery.com/2012/08/09/jquery-1-8-released/) 

= 1.7.2 = 
* Updated jQuery to 1.7.2
* Readme fix

= 1.7.1 =
* Updated jQuery to 1.7.1 [releasenotes](http://blog.jquery.com/2011/11/21/jquery-1-7-1-released/) 
* Minor code optimalisation 
* Readme update
 
= 1.7.0 =
* Updated jQuery to 1.7 [releasenotes](http://blog.jquery.com/2011/11/03/jquery-1-7-released/) 
* Readme update
* Minor code optimalisation

= 1.6.4 =
* Updated jQuery to 1.6.4 [releasenotes](http://blog.jquery.com/2011/09/12/jquery-1-6-4-released/)

= 1.6.3 =
* Updated jQuery to 1.6.3

= 1.6.2.1 =
* Updated jQuery to 1.6.3 rc 1 (minified)

= 1.6.2 =
* Updated jQuery to 1.6.2 (minified)

= 1.6.1.1.1 =
* Promise: less numbers when 1.6.2 comes out
* Updated jQuery to 1.6.2 rc 1 (
* Warning beta release: unminified, un-conflicted

= 1.6.1.1 =
* Adds jQuery.noConflict(); to the javascript file for compatibility 

= 1.6.1 =
* Updated jQuery to 1.6.1

= 1.6.0.1 =
* jQuery 1.6.1 rc 1 (fixes a known WP bug untill 3.2 is released)

= 1.6.0 = 
* Equals 1.1.2 but has the same number as jQuery 

= 1.1.2 =
* jQuery 1.6.0

= 1.1.1 =
* Loads the javascript from the plugin directory instead of googles server. 

= 1.1.0 =
* Added jQuery 1.5.2.min to the javascript directory
* Removed jQuery UI to a seperate plugin

= 1.0.1 =
* Updated jQuery UI to 1.8.12 (on Googles CDN)
* Fixed version 1..0 (should be 1.0)

= 1.0 =
* First version, uses jQuery 1.5.2 on Googles CDN

== Screenshots ==
No screenshot available.

