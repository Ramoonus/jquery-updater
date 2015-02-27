<?php
// If uninstall not called from WordPress, then exit.
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}

/**
 * Define all options in use in an array
 */
$options = array(
	'jqu_compat_blockui', 
	'jqu_compat_blockui', 
	'jqu_shortcode', 
	'jqu_replace_jquery', 
	'jqu_replace_jquery_migrate', 
	'jqu_replace_jquery_admin', 
	'jqu_replace_jquery_login', 
	'jqu_replace_jquery_mobile', 
	'jqu_replace_jquery_ui'
	);

/**
 * While have an option, delete it
 */
foreach( $options as $option ) {
	delete_option($option);
}
