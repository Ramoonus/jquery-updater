<?php
/*
 Plugin Name: jQuery Updater
 Plugin URI: http://www.ramoonus.nl/wordpress/jquery-updater/
 Description: This plugin updates jQuery to the latest  stable version.
 Version: 3.0.0-beta
 Author: Ramoonus
 Author URI: http://www.ramoonus.nl/
 Network: true
 License: GPLv3
 Text Domain: jquery-updater
 Domain Path: /languages
 GitHub Plugin URI: https://github.com/ramoonus/jQuery-Updater/
 GitHub Branch: master
 */

namespace Ramoonus\jQueryUpdater;

/**
 * Security
 * Exit if accessed directly.
 * @since 2.1.4
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Check minimum required WordPress version
 *
 * @since 3.0
 * @version 1.0
 * @return boolean
 */
function rw_jqu_minimum_wp_version() {

    global $wp_version;

	if(version_compare($wp_version, '4.5', '>=' )) {
        return 1;
    }

    return 0;
}

/**
 * Init jQuery (old function)
 * @return void
 * @author Ramon "Ramoonus" van Belzen
 * @version 3.0.0
 * @since 2.0.0
 * @copyright 2015
 */
function jqu_init() {
	//
}

add_action( 'init', 'jqu_init' );

/**
 * Load front or backend scripts
 * @since 2.1.4
 * @todo run updater only on activation
 */
define('rw_jquery_plugin_dir', plugin_dir_path( __FILE__ ) );

// if is admin
if ( is_admin() ) {
	/* Back End */
	include_once( rw_jquery_plugin_dir . 'inc/db-updater.php' );

	/* Get options and aliases */
    include_once( rw_jquery_plugin_dir . 'inc/options.php' );
} else {
	/* Front End */
    include_once( rw_jquery_plugin_dir . 'inc/engine.php' );
}
/**
 * Always load compatibility and deprecated
 * @since 2.1.4
 */
include_once( rw_jquery_plugin_dir . 'inc/compatibility.php' );
include_once( rw_jquery_plugin_dir . 'inc/deprecated.php' );
