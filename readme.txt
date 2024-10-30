=== LiveFyre Comments Have Been Disabled For This Post===
Contributors: powerblogservice,diywebmastery
Donate link: http://www.diywebmastery.com/donate
Tags: livefyre
Requires at least: 2.8
Tested up to: 3.2.1
Stable tag: 0.2
Hides LiveFyre when comments are disabled, suppressing unwanted LiveFyre messages and images.

== Description ==

* The LiveFyre commenting system currently does not allow the user to disable the "Comments have been disabled for this post" message that appears on all posts and pages where you have individually disabled comments, on a WordPress site. This plugin detects pages and posts where comments have been disabled, and suppresses the LiveFyre message text and images.
* After installing and activating the plugin, all Livefyre "Comments have been disabled for this post", messages will no longer appear.
* No configuration required, just activate the plugin.
* For more information, see http://www.diywebmastery.com/livefyre-comments-disabled/


== Installation ==

1. Use the standard WordPress plugin automatic updates system for updating to the latest version on use the manual steps below. 
1. Uncompress the downloaded zip archive in [WordPress install root]/wp-content/plugins
1. Activate the plugin in your WordPress plugins control panel - that's it. There are no settings for this plugin.

== Frequently Asked Questions ==

Q. How does this plugin work?

A. It works by using jQuery to detect where comments have been disabled, and in these cases only, hides the LiveFyre output.

Q. Will this plugin work with all WordPress themes?

A. It will work with all well written WordPress compliant themes that implement the wp_footer hook. It will need a tweak to change the action site to wp_header if your theme does not support wp_footer.


== Screenshots ==

1. Without this plugin, you get the Livefyre message about comments being disabled.
1. With the plugin activated, the same post looks like this, with no visible sign of LiveFyre

== Changelog ==

= 0.2 = Fixed screenshot filenames and added link to more information

= 0.1 = Initial Version

== Upgrade Notice ==

= 0.2 = 
* Optional - improved documentation

== How to Use The Plugin ==

Follow the installation instructions and activate the plugin. After that you are done - there is no more to do.

