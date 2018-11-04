<?php
/*
 * Plugin Name: jQuery Updater
 * Plugin URI: https://github.com/Ramoonus/jQuery-Updater
 * Description: This plugin updates jQuery to the latest stable version.
 * Version: 4.0.0-beta
 * Author: Ramoonus and Remzi Cavdar
 * Author URI: http://www.ramoonus.nl/
 * Network: true
 * License: GPLv3
 * Text Domain: jquery-updater
 * Domain Path: /languages
 * GitHub Plugin URI: https://github.com/ramoonus/jQuery-Updater/
 * GitHub Branch: master
 */
namespace Ramoonus\jQueryUpdater;

/**
 * Security
 * Exit if accessed directly.
 *
 * @since 2.1.4
 * @version 1.0.0
 */
if (! defined('ABSPATH')) {
    exit();
}

/**
 * Check minimum required WordPress version
 *
 * @since 3.0
 * @version 2.0
 * @return boolean
 */
function rw_jqu_minimum_wp_version()
{
    global $wp_version;

    if (version_compare($wp_version, '4.9', '>=')) {
        add_action('admin_notices', 'rw_jqu_minimum_wp_version_notice');
    }
}

function rw_jqu_minimum_wp_version_notice()
{
    $class = 'notice notice-error';
    $message = __('jQuery Updater has disabled WP jQuery Updater', 'sample-text-domain');

    printf('<div class="%1$s"><p>%2$s</p></div>', esc_attr($class), esc_html($message));
}

/**
 * Translation Loader
 *
 * @version 1.0
 */
function jqu_init_localization()
{
    load_plugin_textdomain('jquery_updater', false, basename(dirname(__FILE__)) . '/languages');
}
add_action('plugins_loaded', 'jqu_init_localization');

/**
 * Init jQuery (old function)
 *
 * @return void
 * @author Ramon "Ramoonus" van Belzen
 * @version 3.0.0
 * @since 2.0.0
 * @copyright 2015
 */
function jqu_init()
{
    //
}

add_action('init', 'jqu_init');

/**
 * Load front or backend scripts
 *
 * @since 2.1.4
 * @todo run updater only on activation
 */
define('rw_jquery_plugin_dir', plugin_dir_path(__FILE__));

// if is admin
if (is_admin()) {
    /* Back End */
    include_once (rw_jquery_plugin_dir . 'inc/db-updater.php');

    /* Get options and aliases */
    include_once (rw_jquery_plugin_dir . 'inc/options.php');
} else {
    /* Front End */
    include_once (rw_jquery_plugin_dir . 'inc/engine.php');
}
/**
 * Always load compatibility and deprecated
 *
 * @since 2.1.4
 */
include_once (rw_jquery_plugin_dir . 'inc/compatibility.php');
// include_once( rw_jquery_plugin_dir . 'inc/deprecated.php' );

/**
 * Admin Page
 * version 1.0.0
 */
include_once rw_jquery_plugin_dir . 'inc/admin.php';

function jqu_admin_menu()
{
    add_management_page('jQuery Updater', 'jQuery Updater', 'administrator', 'wpj-updater-plugin-settings', 'wpj_updater_plugin_settings');
    add_action('admin_init', 'wpj_updater_plugin_register_settings');
}
add_action('admin_menu', 'jqu_admin_menu');
