=== Bloginfo Shortcode ===
Contributors: ethanpil
Tags: shortcode, bloginfo
Requires at least: 3.0
Tested up to: 3.6.1
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Add a [blog] shortcode to the Wordpress editor to include data from bloginfo()

== Description ==

This plugin adds a shortcode [blog] to pull info from like the template tag bloginfo(). Its very simple to use and supports the same values as bloginfo().

Why a shortcode and not the function in PHP? Sometimes I need to implement slight variations of the same site. This allows me to have the values propagate into the post content as needed without remembering every place that needs changes.

Its used like this:

    [blog info="name"] 

This is the equivalent of the following in PHP:

    bloginfo('name');

Here are some example uses:

	[blog info="name"] - Displays the "Site Title" set in Settings > General.
	[blog info="description"] - Displays the "Tagline" set in Settings > General.
    [blog info="wpurl"] - Displays the "WordPress address (URL)" set in Settings > General.
    [blog info="url"] - Displays the "Site address (URL)" set in Settings > General.
	[blog info="admin_email"] - Displays the "E-mail address" set in Settings > General. 

See here for all the usable parameters: http://codex.wordpress.org/Function_Reference/bloginfo

Fork away: https://github.com/ethanpil/wp-bloginfo-shortcode

== Installation ==

1. Upload `wp-bloginfo-shortcode.php` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Include the [blog info=""] shortcode in your editor....

== Frequently Asked Questions ==

= I dont see any settings or options! =

There arent any!

= How to I enable it? =

If the plugins system has it on then its working.

== Screenshots ==

There is nothing to see here.

== Changelog ==

= 1.0 =
* Hello World!
