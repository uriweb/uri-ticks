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

	return uri_ticks_map_build_output( $atts );

}
add_shortcode( 'uri-tick-map', 'uri_ticks_shortcode_tick_map' );


/**
 * Build the output
 *
 * @param arr $atts the attributes.
 */
function uri_ticks_map_build_output( $atts ) {

	ob_start();

	?>

	<div id="uri-tick-map-wrapper">
		<div class="map-container">
			<?php include( URI_TICKS_DIR_PATH . '/i/us_states.svg' ); ?>
		</div>
		<div class="species-container">
			<h2>Species</h2>
			<div class="species-list">
			</div>
		</div>
		<div class="time-slider">
			<p>Time slider</p>
		</div>
	</div>

	<?php

	return ob_get_clean();

}
