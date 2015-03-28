<?php
/**
 * Fixes compatibility issues with JS libraries
 *
 * @since 2.1.4
 */

/**
 * Detect BlockUI
 *
 * @since 2.1.4
 * @return boolean
 * @todo todo: load newer version of this library? give warning in admin
 */
function jq_detect_blockui() {
	if ( wp_script_is( 'jquery-blockui', 'enqueued' ) || wp_script_is( 'blockui', 'enqueued' ) ) {
		return true;

	} else {
		return false;
	}
}

/**
 * Retrieve if blockui will be replaced and if possible
 */
if ( get_option( 'jqu_compat_blockui' ) && jq_detect_blockui() ) {
	/* Deregister */
	wp_deregister_script( 'jquery-blockui' );
	wp_deregister_script( 'blockui' );
	/* Enqueue */

}
