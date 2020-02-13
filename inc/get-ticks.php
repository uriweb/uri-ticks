<?php
/**
 * Get Ticks shortcode
 *
 * @package uri-ticks
 */

/**
 * The shortcode
 *
 * @param arr $atts the attributes.
 * @param str $content the content.
 */
function uri_ticks_shortcode_get_ticks( $atts, $content = null ) {

	// Attributes.
	$atts = shortcode_atts(
		   array(
			   'meta_key' => '',
		   ),
	   $atts
	   );

	return uri_ticks_query_ticks( $atts );

}
add_shortcode( 'uri-get-ticks', 'uri_ticks_shortcode_get_ticks' );


/**
 * The query
 *
 * @param arr $atts the attributes.
 */
function uri_ticks_query_ticks( $atts ) {

	$args = array(
		'post_type' => 'tick',
		'meta_key' => $atts['meta_key'],
		'meta_value' => '0',
		'meta_compare' => '>',
		'orderby' => 'meta_value_num',
	);

	// The Query
	$the_query = new WP_Query( $args );

	// The Loop
	if ( $the_query->have_posts() ) {
		$output = '<ul>';
		while ( $the_query->have_posts() ) {
			$the_query->the_post();
			$output .= '<li>' . get_the_title() . '</li>';
		}
		$output .= '</ul>';
	} else {
		// no posts found
	}
	/* Restore original Post Data */
	wp_reset_postdata();

	return $output;

}
