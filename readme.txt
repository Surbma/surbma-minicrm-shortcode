=== Surbma | MiniCRM Shortcode ===
Contributors: Surbma, CherryPickStudios
Donate link: https://surbma.com/donate/
Tags: MiniCRM, shortcode
Requires at least: 5.1
Tested up to: 6.2
Stable tag: 2.0
Requires PHP: 7.0
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
2. Activate the Surbma | MiniCRM Shortcode plugin through the 'Plugins' menu in WordPress
3. That's it. Now you can use the shortcode. :)

== Frequently Asked Questions ==

= What is MiniCRM? =

MiniCRM is a hungarian CRM system. For more information, please visit the official MiniCRM website: <a href="https://www.minicrm.hu/" target="_blank">www.minicrm.hu</a>

= Can I customize the look of the form? =

No, you can't. You can control the look of your form in your MiniCRM admin area.

= What does Surbma mean? =

It is the reverse version of my last name. ;)

== Changelog ==

= 2.0 =

Release date: 2020-02-10

- TWEAK - Tested with WordPress 5.3 version.
- TWEAK - Updated to use a new way to deploy it to wp.org repo.

= 1.0.2 =

- Fix localization.
- Prevent direct access to the plugin.

= 1.0.1 =

- Added localization.
- Added hungarian translation.

= 1.0.0 =

- Initial release.
