<?php
/*
Plugin Name: jQuery Updater
Plugin URI: http://www.ramoonus.nl/wordpress/jquery-updater/
Description: This plugin updates jQuery to the latest  stable version.
Version: 2.1.0
Author: Ramoonus
Author URI: http://www.ramoonus.nl/
License: GPL3
*/


// Register main function
function rw_jquery_updater() {

		wp_deregister_script('jquery'); 

		wp_enqueue_script('jquery', plugins_url('/js/jquery-2.1.1.min.js', __FILE__), false, '2.1.1');	

		// @since 2.0.0 also load the migrate plugin
		wp_enqueue_script('jquery-migrate', plugins_url('/js/jquery-migrate-1.2.1.min.js', __FILE__), array('jquery'), '1.2.1'); // require jquery, as loaded above	
}
add_action('wp_enqueue_scripts', 'rw_jquery_updater');


// Enable Localisation
load_plugin_textdomain('jqupdater', false, basename( dirname( __FILE__ ) ) . '/languages' );


// Admin Screen
/*

*/
