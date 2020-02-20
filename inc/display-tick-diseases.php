<?php
/**
 * Display Tick Diseases shortcode
 *
 * @package uri-ticks
 */

/**
 * The shortcode
 *
 * @param arr $atts the attributes.
 * @param str $content the content.
 */
function uri_ticks_shortcode_display_tick_diseases( $atts, $content = null ) {

	$atts = shortcode_atts(
	   array(),
	$atts
	);

	return uri_ticks_diseases_output();

}
add_shortcode( 'uri-display-tick-diseases', 'uri_ticks_shortcode_display_tick_diseases' );


/**
 * Build the output
 *
 * @param arr $atts the attributes.
 */
function uri_ticks_diseases_output() {

	$diseases = get_field( 'new_england_diseases' );

	$output = '<div class="uri-tick-diseases-wrapper">';
	$output .= '<h2>Known Diseases Transmitted</h2>';
	$output .= '<ul class="uri-tick-diseases">';

	foreach ( $diseases as $d ) {
		$output .= '<li>';
		$output .= '<div class="disease-name">' . get_the_category_by_ID( $d ) . '</div>';
		$output .= '<div class="disease-description">' . category_description( $d ) . '</div>';
		$output .= '</li>';
	}

	$output .= '</ul>';
	$output .= '</div>';

	return $output;

}
