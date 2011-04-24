<?php
/*
Plugin Name: jQuery updater
Plugin URI: http://www.ramoonus.nl/wordpress/jquery-updater/
Description: This plugin should only be used for development purposes, this plugin updates jQuery and jQuery UI to the latest stable version.
Version: 1.1.0
Author: Ramoonus
Author URI: http://www.ramoonus.nl
License: GPL2
*/
?>
<?php
// Update jQuery
function rw_jquery_update() {
	if (!is_admin()) { // when not in admin screen
		wp_deregister_script('jquery'); // deregister
		// wp_register_script( $handle, $src, $deps, $ver, $in_footer );
		   wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js', false, '1.5.2'); // re register
		wp_enqueue_script('jquery'); // load
	}
}
// load
add_action('init', 'rw_jquery_update');
?>