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
 * @todo load newer version of this library? give warning in admin
 */
function jq_detect_blockui()
{
    if (wp_script_is('jquery-blockui', 'enqueued') || wp_script_is('blockui', 'enqueued')) {
        return true;
    } else {
        return false;
    }
}

/**
 * Retrieve if blockui will be replaced and if possible
 *
 * @since 2.1.4
 * @return boolean
 */
if (get_option('jqu_compatibility_blockui') && jq_detect_blockui()) {
    wp_deregister_script('jquery-blockui');
    wp_deregister_script('blockui');
}
