<?php
/**
 * Options Update and Installer
 *
 * @version 3.0.0
 * @since 2.1.4
 */

/**
 * Install
 *
 * @todo turn into array, work out some dummy code
 * @return void
 * @since 2.1.4
 * @version 2.1.4
 */
function jqu_db_install()
{

    $newoptions = array();

    //foreach($newoptions as $option)

    // If Version Number does not exists // Fresh Install
    if (!get_option('jqu_db_version')) {
        add_option('jqu_db_version', '2.1.4');
        // Default options:
        add_option('jqu_compat_blockui', 0); // No
        add_option('jqu_shortcode', 0); // No
        add_option('jqu_replace_jquery', 1); // Yes
        add_option('jqu_replace_jquery_migrate', 1); // Yes
        add_option('jqu_replace_jquery_admin', 0); // No
        add_option('jqu_replace_jquery_login', 0); // No
        add_option('jqu_replace_jquery_mobile', 0); // No
        add_option('jqu_replace_jquery_ui', 0); // No
        add_option('jqu_include_noconflict', 1); // Yes
        add_option('jqu_jquery_version', '2.2.0'); // 2.1.4
        add_option('jqu_jquery_get_footer', 0); // False
        add_option('jqu_jquery_migrate_version', '1.3.0');
        add_option('jqu_jquery_ui_version', '1.11.4');
        add_option('jqu_qunit_version', '1.21.0');

    }

    
    unset $newoptions;
}

/**
 * Update
 *
 * @return void
 * @since 2.1.4
 * @version 3.0.0
 */
function jqu_db_update()
{

    if (version_compare(get_option('jqu_db_version'), '2.1.4', '<=')) {
        // Update DB Version to latest
        update_option('jqu_jquery_version', '2.1.4');
    } /**
     * Upgrade 2.1.4 --> 2.2.0
     */
    elseif (version_compare(get_option('jqu_db_version'), '2.1.4', '=')) {
        update_option('jqu_db_version', '2.2.0');
        update_option('jqu_jquery_version', '1.3.0'); // minimum requirement
    } /**
     * jQuery Branch 1.x
     * 1.11.3 --> 1.12.0
     */
    elseif (version_compare(get_option('jqu_db_version'), '1.11.3', '=')) {
        update_option('jqu_jquery_version', '1.12.0');
    }

    /**
     * QUnit
     */
    if (version_compare(get_option('jqu_qunit_version'), '1.17.1', '<=')) {
        // Update DB Version
        update_option('jqu_qunit_version', '1.21.0');
    }
}
