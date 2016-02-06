<?php
/**
 * Front-end
 * When someone visits a page
 */

/**
 * Script Debug
 *
 * @link https://pippinsplugins.com/use-script_debug-enable-non-minified-asset-files/
 * @since 2.1.4
 * @return string
 * @version 1.0
 */
$suffix = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '' : '.min';

/**
 * jQuery
 *
 * @since 1.0
 * @return void
 * @version 2.1.4
 */
function rw_jquery_updater() {
	$ver    = rw_jquery_get_version();
	$footer = false; // @todo make dynamic via get_option()

	wp_deregister_script( 'jquery' );
	wp_enqueue_script( 'jquery', plugins_url( '/js/jquery/jquery-' . $ver . $suffix . '.js', __FILE__ ), false, $ver, $footer );
}

/**
 * Retrieve jQuery version from database\
 * @return string
 * @since 3.0.0
 */
function rw_jquery_get_version() {
    // always filled upon plugin activation
    $ver = get_option('jqu_jquery_version');

    // upon null, use 2.1.4
	if ( !$ver ) {
        $ver = '2.1.4';
    }

    return $ver;
}

/**
 * Retrieve if jQuery should be loaded in footer
 *
 * @return boolean
 * @since 3.0.0
 * @todo validate
 */
function rw_jquery_get_footer() {
    $footer = get_option('jqu_jquery_get_footer');

    // upon empty use false
    if ( !$footer ) {
		$footer = 0;
    }

    return $footer;

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
 */
function rw_jquery_migrate() {
	$ver = '1.2.1'; // @todo make dynamic via get_option()

	wp_deregister_script( 'jquery-migrate' );
	wp_enqueue_script( 'jquery-migrate', plugins_url( '/js/migrate/jquery-migrate-' . $ver . $suffix . '.js', __FILE__ ), array( 'jquery' ), $ver );
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
 * @version 1.4.5
 */
function jqu_mobile() {
	function jqu_jquery_ui() {
		$ver ='1.4.5';

		// JS
		wp_enqueue_script( 'jquery-mobile', plugins_url( '/js/mobile/jquery.mobile-' . $ver . $suffix . '.js', __FILE__ ), array( 'jquery' ), $ver );
		// CSS
		wp_enqueue_style( 'jquery-mobile-css', plugins_url( '/css/mobile/jquery.mobile-' . $ver . $suffix . '.css', __FILE__ ), false, $ver );

}

if ( get_option( 'jqu_replace_jquery_mobile' ) ) {
	add_action( 'wp_enqueue_scripts', 'rw_jquery_updater' );
}

/**
 * jQuery UI
 *
 * @since 2.1.4
 * @return void
 * @version 1.11.4
 */
function jqu_jquery_ui() {
	$ver ='1.11.4';

	// JS
	wp_enqueue_script( 'jquery-ui', plugins_url( '/js/ui/jquery-ui-' . $ver . $suffix . '.js', __FILE__ ), array( 'jquery' ), $ver );
	// CSS
	wp_enqueue_style( 'jquery-ui-css', plugins_url( '/css/ui/jquery-ui-' . $ver . $suffix . '.css', __FILE__ ), false, $ver );

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
 * @version 1.0
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
	$ver = '1.17.1';

	// JS
	wp_enqueue_script( 'qunit', plugins_url( '/js/qunit/qunit-' . $ver . $suffix . '.js', __FILE__ ), array( 'jquery' ), $ver );
	// CSS
	wp_enqueue_style( 'qunit-css', plugins_url( '/css/qunit/qunit-' . $ver . '.css', __FILE__ ), false, $ver );

}

if ( get_option( 'jqu_qunit' ) ) {
	add_action( 'wp_enqueue_scripts', 'jqu_qunit_loader' );
}
