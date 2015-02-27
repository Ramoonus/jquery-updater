<?php
/**
 * Shortcode
 * @since 1.8.0
 * @todo toggle
 * @return string
 */ 
function jqu_shortcode( $atts, $content = null ) {
   return '<script> jQuery(function($) { '    . $content .    ' }); </script>';
}

if( get_option( 'jqu_shortcode') ) {
   add_shortcode( 'jquery', 'jqu_shortcode' );
   add_shortcode( 'jq', 'jqu_shortcode' );
}
