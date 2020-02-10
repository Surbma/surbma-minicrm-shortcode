<?php

/*
Plugin Name: Surbma | MiniCRM Shortcode
Plugin URI: https://surbma.com/wordpress-plugins/
Description: A simple shortcode to include MiniCRM forms into WordPress.

Version: 2.0

Author: Surbma
Author URI: https://surbma.com/

License: GPLv2

Text Domain: surbma-minicrm-shortcode
Domain Path: /languages/
*/

// Prevent direct access to the plugin
if ( !defined( 'ABSPATH' ) ) {
	die( 'Good try! :)' );
}

// Localization
function surbma_minicrm_shortcode_init() {
	load_plugin_textdomain( 'surbma-minicrm-shortcode', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
}
add_action( 'plugins_loaded', 'surbma_minicrm_shortcode_init' );

function surbma_minicrm_shortcode_shortcode( $atts ) {
	extract( shortcode_atts( array(
		"id" => ''
	), $atts ) );
	return '<script src="https://r3.minicrm.hu/api/loader.js?'.$id.'"></script>';
}
add_shortcode( 'minicrm', 'surbma_minicrm_shortcode_shortcode' );
