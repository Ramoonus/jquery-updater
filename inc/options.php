<?php

/**
 * Options Page
 *
 * @since 2.1.4
 */

/**
 * Enable Localisation
 *
 * @since 2.1.1
 * @return void
 */
function jqu_init_localization()
{
    load_plugin_textdomain('jquery_updater', false, basename(dirname(__FILE__)) . '/languages');
}
add_action('plugins_loaded', 'jqu_init_localization');
