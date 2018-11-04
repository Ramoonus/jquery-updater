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

    //foreach($new_options as $option)

    // If Version Number does not exists // Fresh Install
    if (!get_option('jqu_db_version')) {
        add_option('jqu_db_version', '3.0.0'); // Plugin version

        // Default options:
        add_option('jqu_compatibility_blockui', 0); // No
        add_option('jqu_shortcode', 0); // No
        add_option('jqu_replace_jquery', 1); // Yes
        add_option('jqu_replace_jquery_migrate', 1); // Yes
        add_option('jqu_replace_jquery_admin', 0); // No
        add_option('jqu_replace_jquery_login', 0); // No
        add_option('jqu_replace_jquery_mobile', 0); // No
        add_option('jqu_replace_jquery_ui', 0); // No
        add_option('jqu_include_noconflict', 1); // Yes
        add_option('jqu_jquery_get_footer', 0); // False
        add_option('jqu_slim', 0); // jQuery Slim
        
        // Version Numbers
        add_option('jqu_jquery_version', '3.0.0');
        add_option('jqu_jquery_migrate_version', '3.0.0');
        add_option('jqu_jquery_ui_version', '1.11.4');
        add_option('jqu_qunit_version', '1.21.0');
        add_option('jqu_mobile_version', '1.4.5');

    }

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

    // Plugin
    if (version_compare(get_option('jqu_db_version'), '2.1.4', '<=')) {
        // Update DB Version to latest
        update_option('jqu_db_version', '2.2.1');
    }
    /**
     * Upgrade 2.1.4 --> 2.2.0
     */
    elseif (version_compare(get_option('jqu_db_version'), '2.1.4', '=')) {
        update_option('jqu_db_version', '2.2.0');
    }

    /**
     * Upgrade 2.1.4 --> 2.2.0
     */
    elseif (version_compare(get_option('jqu_db_version'), '2.2.1', '=')) {
        update_option('jqu_db_version', '3.0.0');
    }

    // Upgrade jQuery 2.2.0 --> 2.2.1
    // @since 2.2.1
    // @todo tidy up if
    if (version_compare(get_option('jqu_jquery_version'), '2.2.0', '=')) {
        update_option('jqu_db_version', '2.2.4');
    }
    elseif (version_compare(get_option('jqu_jquery_version'), '1.12.0', '=')) {
        update_option('jqu_db_version', '1.12.1');
    }
    elseif (version_compare(get_option('jqu_jquery_version'), '1.12.1', '=')) {
        update_option('jqu_db_version', '1.12.4');
    }

    /**
     * QUnit
     */
    if (version_compare(get_option('jqu_qunit_version'), '1.17.1', '<=')) {
        // Update DB Version
        update_option('jqu_qunit_version', '1.21.0');
    }
}
