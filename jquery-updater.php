<?php
/*
Plugin Name: jQuery updater
Plugin URI: http://www.ramoonus.nl/wordpress/jquery-updater/
Description: This plugin updates jQuery to the latest (stable) version.
Version: 1.7
Author: Ramoonus
Author URI: http://www.ramoonus.nl/
License: GPL2
*/

// Update jQuery
function rw_jquery_update() {
		// deregister wordpress` jQuery
		wp_deregister_script('jquery'); 
		// register new jQuery and load it
		wp_enqueue_script('jquery', plugins_url('/js/jquery-1.7.min.js', __FILE__), false, '1.7');
		
		//return;
}
// load
add_action('init', 'rw_jquery_update');
?>