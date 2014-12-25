<?php
/*
Plugin Name: jQuery Updater
Plugin URI: http://www.ramoonus.nl/wordpress/jquery-updater/
Description: This plugin updates jQuery to the latest  stable version.
Version: 2.1.3
Author: Ramoonus
Author URI: http://www.ramoonus.nl/
License: GPL3
*/

// Enable Localisation
load_plugin_textdomain('jquery_updater', false, basename( dirname( __FILE__ ) ) . '/languages' );

// Register main function
function rw_jquery_updater() {

		// jQuery
		// Deregister core jQuery
		wp_deregister_script('jquery');
	// Register
		wp_enqueue_script('jquery', plugins_url('/js/jquery-2.1.3.min.js', __FILE__), false, '2.1.3');

		// jQuery Migrate
		// @since 2.0.0
		// Deregister core jQuery Migrate
		wp_deregister_script('jquery-migrate');
		// Register
		wp_enqueue_script('jquery-migrate', plugins_url('/js/jquery-migrate-1.2.1.min.js', __FILE__), array('jquery'), '1.2.1'); // require jquery, as loaded above	
}
// Front-End
add_action('wp_enqueue_scripts', 'rw_jquery_updater');
// Back-End
// @since 2.1.3
//add_action('admin_enqueue_scripts', 'rw_jquery_updater');
//add_action('login_enqueue_scripts', 'rw_jquery_updater');


// Admin Screen