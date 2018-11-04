<?php

/**
 * Shortcode
 * @since 1.8.0
 * @todo test with 4.2.3 / 4.3
 * @return string
 * @param $atts
 * @param $content
 */
function jqu_shortcode($atts, $content = null)
{
    return '<script> jQuery(function($) { ' . $content . ' }); </script>';
}

if (get_option('jqu_shortcode')) {
    add_shortcode('jquery', 'jqu_shortcode');
    add_shortcode('jq', 'jqu_shortcode');
}
