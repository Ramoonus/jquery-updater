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

/**
 * Security
 * Exit if accessed directly.
 * @since 2.1.4
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
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
}

add_action( 'init', 'jqu_init' );

/**
 * Load front or backend scripts
 * @since 2.1.4
 */
if ( is_admin() ) {
	/* Back End */
	require_once( plugin_dir_path( __FILE__ ) . 'inc/db-updater.php' );
	require_once( plugin_dir_path( __FILE__ ) . 'inc/options.php' );
} else {
	/* Front End */
	require_once( plugin_dir_path( __FILE__ ) . 'inc/engine.php' );
}
/**
 * Always load compat and deprecated
 * @since 2.1.4
 */
require_once( plugin_dir_path( __FILE__ ) . 'inc/compatibility.php' );
require_once( plugin_dir_path( __FILE__ ) . 'inc/deprecated.php' );

/**
 * Add Alpha and Beta includes
 * @since 2.1.4
 * @todo if conditions
 */
define('rw_jquery_updater_alpha' , false);
define('rw_jquery_updater_beta' , false);

if ( rw_jquery_updater_alpha = true ) { require_once( plugin_dir_path( __FILE__ ) . 'inc/alpha.php' ); }
if ( rw_jquery_updater_beta = true)   { require_once( plugin_dir_path( __FILE__ ) . 'inc/beta.php' );  }

/**
 * WPUpdatePhp
 *
 * @since 2.1.6
 * @todo disable self/plugin
 */

//require_once( plugin_dir_path( __FILE__ ) . 'inc/WPUpdatePhp.php' );

/*$updatePhp = new WPUpdatePhp( '5.3.0' );

if ( $updatePhp->does_it_meet_required_php_version( PHP_VERSION ) ) {
 // Instantiate new object here
}
*/