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
?>
<?php
// Update jQuery
function rw_jquery_update() {
	//if (!is_admin()) { // when not in admin screen
		wp_deregister_script('jquery'); // deregister
		// wp_register_script( $handle, $src, $deps, $ver, $in_footer );
		wp_enqueue_script('jquery', plugins_url('/js/jquery-1.7.min.min.js', __FILE__), false, '1.7');
	//}
}
// load
add_action('init', 'rw_jquery_update');
?>