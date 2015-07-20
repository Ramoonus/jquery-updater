<?php
/**
 * Options Update and Installer
 *
 * @version 2.1.4
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
function jqu_db_install() {

	$newoptions = array();

	//foreach($newoptions as $option)

	// If Version Number does not exists // Fresh Install
	if ( ! get_option( 'jqu_db_version' ) ) {
		add_option( 'jqu_db_version', '2.1.4' );
		// Default options:
		add_option( 'jqu_compat_blockui', 0 ); // No
		add_option( 'jqu_shortcode', 0 ); // No
		add_option( 'jqu_replace_jquery', 1 ); // Yes
		add_option( 'jqu_replace_jquery_migrate', 1 ); // Yes
		add_option( 'jqu_replace_jquery_admin', 0 ); // No
		add_option( 'jqu_replace_jquery_login', 0 ); // No
		add_option( 'jqu_replace_jquery_mobile', 0 ); // No
		add_option( 'jqu_replace_jquery_ui', 0 ); // No
		add_option( 'jqu_include_noconflict', 1 ); // Yes
	}

	unset $newoptions;
}

/**
 * Update
 *
 * @return void
 * @since 2.1.4
 * @version 2.1.4
 */
function jqu_db_update() {
	if ( version_compare( get_option( 'jqu_db_version' ), '2.1.4', '<=' ) ) {
		// Update DB Version to 2.1.4
		update_option( 'jqu_db_version', '2.1.4' );
	}
}

