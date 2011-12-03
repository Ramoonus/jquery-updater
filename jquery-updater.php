<?php
/*
Plugin Name: jQuery updater
Plugin URI: http://www.ramoonus.nl/wordpress/jquery-updater/
Description: This plugin updates jQuery to the latest (stable) version.
Version: 1.7.1
Author: Ramoonus
Author URI: http://www.ramoonus.nl/
License: GPL2
*/

function rw_jquery_update() {
		wp_deregister_script('jquery'); 
		wp_enqueue_script('jquery', plugins_url('/js/jquery-1.7.1.min.js', __FILE__), false, '1.7.1');	
		//return;
}
add_action('init', 'rw_jquery_update');
?>