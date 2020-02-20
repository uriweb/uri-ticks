<?php
/**
 * Display Tick Activity shortcode
 *
 * @package uri-ticks
 */

/**
 * The shortcode
 *
 * @param arr $atts the attributes.
 * @param str $content the content.
 */
function uri_ticks_shortcode_display_tick_activity( $atts, $content = null ) {

	$atts = shortcode_atts(
	   array(
		   'title' => 'Activity',
		   'region' => '',
		   'legend' => 'descriptive',
		   'min' => '',
		   'max' => '',
	   ),
	$atts
	);

	return uri_ticks_activity_graph_output( $atts );

}
add_shortcode( 'uri-display-tick-activity', 'uri_ticks_shortcode_display_tick_activity' );


/**
 * Build the output
 *
 * @param arr $atts the attributes.
 */
function uri_ticks_activity_graph_output( $atts ) {

	$activity = get_field( $atts['region'] . '_activity' );

	$min = 0;
	$option_min = get_option( 'uri_ticks_activity_default_min' );
	if ( ! empty( $option_min ) ) {
		$min = intval( $option_min );
	}
	if ( ! empty( $atts['min'] ) ) {
		$min = intval( $atts['min'] );
	}

	$max = max( $activity );
	$option_max = get_option( 'uri_ticks_activity_default_max' );
	if ( ! empty( $option_max ) ) {
		$max = intval( $option_max );
	}
	if ( ! empty( $atts['max'] ) ) {
		$max = intval( $atts['max'] );
	}

	$label_high = 'High';
	$label_low = 'Low';
	if ( 'numeric' == $atts['legend'] ) {
		$label_high = $max;
		$label_low = $min;
	}

	$output = '<div class="uri-ticks-activity">';

	if ( ! empty( $atts['title'] ) ) {
		$output .= '<h1>' . $atts['title'] . '</h1>';
	}

	$output .= '<div class="uri-ticks-activity-graph">';

	$output .= '<div class="uri-ticks-activity-legend">';
	$output .= '<div class="uri-ticks-activity-legend-upper">' . $label_high . '</div>';
	$output .= '<div class="uri-ticks-activity-legend-lower">' . $label_low . '</div>';
	$output .= '</div>';

	foreach ( $activity as $m => $v ) {

		$p = max( 0, ( intval( $v ) - $min ) / ( $max - $min ) * 100 );

		$output .= '<div class="uri-ticks-activity-column">';

		$output .= '<div class="uri-ticks-activity-bar-wrapper">';
		$output .= '<div class="uri-ticks-activity-bar" style="height:' . ( 100 - $p ) . '%" title="' . $v . '"></div>';
		$output .= '</div>';

		$output .= '<div class="uri-ticks-activity-label">' . ucfirst( substr( $m, 0, 3 ) ) . '</div>';

		$output .= '</div>';

	}

	$output .= '</div>';
	$output .= '</div>';

	return $output;

}
