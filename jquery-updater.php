<?php
/*
Plugin Name: jQuery Updater
Plugin URI: http://www.ramoonus.nl/wordpress/jquery-updater/
Description: This plugin updates jQuery to the latest  stable version.
Version: 2.0.0.1
Author: Ramoonus
Author URI: http://www.ramoonus.nl/
License: GPL3
*/

function rw_jquery_update() {
	/* do not interfere with /wp-admin/ */
	if ( !is_admin() ) {
		wp_deregister_script('jquery'); 
		wp_enqueue_script('jquery', plugins_url('/js/jquery-2.0.0.min.js', __FILE__), false, '2.0.0');	
		wp_enqueue_script('jquery-migrate', plugins_url('/js/jquery-migrate-1.1.1.min.js.js', __FILE__), false, '1.1.1');	
	}
}
add_action('init', 'rw_jquery_update');

/* Declare Shortcode */
function rw_jquery_shortcode( $atts, $content = null ) {
   return '<script>jQuery(function($) { '    . $content . ' }); </script>';
}
//add_shortcode( 'jquery', 'rw_jquery_shortcode' ); // [jquery]
//add_shortcode( 'jq', 'rw_jquery_shortcode' ); // [jq]
?>