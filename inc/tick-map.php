<?php
/**
 * Tick Map shortcode
 *
 * @package uri-ticks
 */

/**
 * The shortcode
 *
 * @param arr $atts the attributes.
 * @param str $content the content.
 */
function uri_ticks_shortcode_tick_map( $atts, $content = null ) {

	// Attributes.
	$atts = shortcode_atts(
		   array(),
	   $atts
	   );

	ob_start();

	include( URI_TICKS_DIR_PATH . '/i/us_states.svg' );

	$output = ob_get_clean();

	return $output;

}
add_shortcode( 'uri-tick-map', 'uri_ticks_shortcode_tick_map' );
