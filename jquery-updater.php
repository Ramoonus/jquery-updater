<?php
/*
Plugin Name: jQuery and jQuery UI updates
Plugin URI: http://www.ramoonus.nl
Description: Title says all
Version: 1..0.0
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
add_action('init', 'rw_jquery_update');

// Update jQuery UI
function rw_jquery_ui_update() { // when not in admin screen
	if (!is_admin()) { // deregister 
		wp_deregister_script('jquery-ui');
		wp_register_script('jquery-ui', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.11/jquery-ui.min.js', false, '1.8.11'); // re register
		wp_enqueue_script('jquery-ui'); // load
	}
}
add_action('init', 'rw_jquery_ui_update');
?>