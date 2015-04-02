=== Surbma - MiniCRM Shortcode ===
Contributors: Surbma
Donate link: http://surbma.com/
Tags: MiniCRM, shortcode
Requires at least: 3.0
Tested up to: 4.1
Stable tag: 1.0.2
License: GPLv2
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A simple shortcode to include MiniCRM forms into WordPress.

== Description ==

A simple shortcode to include MiniCRM forms into WordPress. This is a very useful plugin if your user don't have a permission to embed javascript in the content.

The shortcode: `[minicrm id="THIS_IS_THE_ID"]`

Where id is the MiniCRM form id, that you want to display.

You can find the id at the end of your MiniCRM form script:
`<script src="https://r3.minicrm.hu/api/loader.js?THIS_IS_THE_ID"></script>`

== Installation ==

1. Upload `surbma-minicrm-shortcode` folder to the `/wp-content/plugins/` directory
2. Activate the Surbma - MiniCRM Shortcode plugin through the 'Plugins' menu in WordPress
3. That's it. Now you can use the shortcode. :)

== Frequently Asked Questions ==

= What is MiniCRM? =

MiniCRM is a hungarian CRM system. For more information, please visit the official MiniCRM website: <a href="http://www.minicrm.hu/" target="_blank">www.minicrm.hu</a>

= Can I customize the look of the form? =

No, you can't. You can control the look of your form in your MiniCRM admin area.

= What does Surbma mean? =

It is the reverse version of my last name. ;)

== Changelog ==

= 1.0.2 =

- Fix localization.
- Prevent direct access to the plugin.

= 1.0.1 =

- Added localization.
- Added hungarian translation.

= 1.0.0 =

- Initial release.