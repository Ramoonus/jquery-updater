<?php
/**
 * Front-end
 * When someone visits a page
 */

/**
 * Script Debug
 *
 * source: https://pippinsplugins.com/use-script_debug-enable-non-minified-asset-files/
 *
 * @since 2.1.4
 * @return string
 * @version 1.0

 */
$suffix = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '' : '.min';

/** jQuery
 * Deregister core jQuery
 *
 * @since 1.0
 * @return void
 * @version 2.1.4
 * @todo dynamic version loading
 */
function rw_jquery_updater() {
	wp_deregister_script( 'jquery' );
	wp_enqueue_script( 'jquery', plugins_url( '/js/jquery/jquery-2.1.43' . $suffix . '.js', __FILE__ ), false, '2.1.4' );
}

// Detect if to replace jQuery
if ( get_option( 'jqu_replace_jquery' ) ) {
	add_action( 'wp_enqueue_scripts', 'rw_jquery_updater' );
}
/**
 * jQuery Migrate
 *
 * @since 2.1.4
 * @return void
 * @version 1.2.1
 * @todo include $scriptdebug
 */
function rw_jquery_migrate() {
	wp_deregister_script( 'jquery-migrate' );
	wp_enqueue_script( 'jquery-migrate', plugins_url( '/js/migrate/jquery-migrate-1.2.1' . $suffix . '.js', __FILE__ ), array( 'jquery' ), '1.2.1' );
}

// Detect if to replace jQuery Migrate
if ( get_option( 'jqu_replace_jquery_migrate' ) ) {
	add_action( 'wp_enqueue_scripts', 'rw_jquery_migrate' );
}

/**
 * Add jQuery to Admin enqueue screen
 *
 * @todo  move to backend, make rw_jquery_updater global
 * @since 2.1.4
 */
if ( get_option( 'jqu_replace_jquery_admin' ) ) {
	add_action( 'admin_enqueue_scripts', 'rw_jquery_updater' );
}

/**
 * Add jQuery to login screen
 *
 * @since 2.1.4
 */
if ( get_option( 'jqu_replace_jquery_login' ) ) {
	add_action( 'login_enqueue_scripts', 'rw_jquery_updater' );
}

/**
 * jQuery Mobile
 *
 * @since 2.1.4
 * @return void
 */
function jqu_mobile() {
	// JS

	// CSS

}

if ( get_option( 'jqu_replace_jquery_mobile' ) ) {
	add_action( 'wp_enqueue_scripts', 'rw_jquery_updater' );
}

/**
 * jQuery UI
 *
 * @since 2.1.4
 * @return void
 */
function jqu_jquery_ui() {
	// JS

	// CS

}

if ( get_option( 'jqu_replace_jquery_ui' ) ) {
	add_action( 'wp_enqueue_scripts', 'jqu_jquery_ui' );
}

/**
 * jQuery Conflict
 *
 * @since 2.1.4
 * @return void
 * @todo minify / non minified version or deny $suffix
 */
function jqu_jquery_noconflict() {
	wp_enqueue_script( 'jquery-conflict', plugins_url( '/js/noconflict.js', __FILE__ ), array( 'jquery' ), '1.0' );

}

if ( get_option( 'jqu_include_noconflict' ) ) {
	add_action( 'wp_enqueue_scripts', 'jqu_jquery_noconflict' );
}

/**
 * QUnit
 *
 * @since 2.1.4
 * @version 1.17.1
 * @return void
 */
function jqu_qunit_loader() {
	// JS

	// CSS

}

if ( get_option( 'jqu_qunit' ) ) {
	add_action( 'wp_enqueue_scripts', 'jqu_qunit_loader' );
}
