<?php 
/**
 * Migrate WP jQuery Updater
 * https://github.com/Remzi1993/wp-jquery-updater
 *
 * @version 1.0.0
 * @since 4.0.0
 * @author Ramoonus
 */

// Retrieve
get_option('wpj_updater_jquery_url');
get_option('wpj_updater_jquery_migrate_url');

// Convert 

// Delete
delete_option('wpj_updater_jquery_url');
delete_option('wpj_updater_jquery_migrate_url');

// Disable WPJ
function jqu_wpj_deactivate() {
    deactivate_plugins('wp-jquery-updater/wp-jquery-updater.php');
    
    
}
// Admin Notice
function jqu_wpj_deactivate_notice() {
    $class = 'notice notice-error';
    $message = __( 'jQuery Updater has disabled WP jQuery Updater', 'sample-text-domain' );
    
    printf( '<div class="%1$s"><p>%2$s</p></div>', esc_attr( $class ), esc_html( $message ) ); 
}

add_action( 'admin_notices', 'jqu_wpj_deactivate_notice' );
register_activation_hook(__FILE__, 'jqu_wpj_deactivate');
?>