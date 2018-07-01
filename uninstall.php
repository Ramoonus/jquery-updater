<?php
// If uninstall not called from WordPress, then exit.
if (!defined('WP_UNINSTALL_PLUGIN')) {
    exit;
}

/**
 * Uninstaller wrapper
 *
 * @since 4.0
 * @todo return false on error
 * @return bool
 * @version 3.1
 */
function rw_jqu_uninstall()
{

    /**
     * Define all options in use in an array
     *
     * @version 2.1.4
     */
    $options = array(
        'jqu_compatibility_blockui',
        'jqu_shortcode',
        'jqu_replace_jquery',
        'jqu_replace_jquery_migrate',
        'jqu_replace_jquery_admin',
        'jqu_replace_jquery_login',
        'jqu_replace_jquery_mobile',
        'jqu_replace_jquery_ui',
        'jqu_include_noconflict',
        'jqu_qunit'
    );

    /**
     * While have an option, delete it
     *
     * @version 1.0
     */
    foreach ($options as $option) {
        delete_option($option);
    }

    return true;
}

rw_jqu_uninstall();
