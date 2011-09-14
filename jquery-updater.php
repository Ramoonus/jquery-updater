<?php
/*
Plugin Name: jQuery updater
Plugin URI: http://www.ramoonus.nl/wordpress/jquery-updater/
Description: This plugin updates jQuery to the latest (stable) version.
Version: 1.6.4
Author: Ramoonus
Author URI: http://www.ramoonus.nl/
License: GPL2
*/
?>
<?php
// Update jQuery
function rw_jquery_update() {
	if (!is_admin()) { // when not in admin screen
		wp_deregister_script('jquery'); // deregister
		// wp_register_script( $handle, $src, $deps, $ver, $in_footer );
		wp_register_script('jquery', plugins_url('/js/jquery-1.6.4.min.js', __FILE__), false, '1.6.4');
		wp_enqueue_script('jquery'); // load
	}
}
// load
add_action('init', 'rw_jquery_update');
?>