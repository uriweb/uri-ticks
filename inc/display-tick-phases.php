<?php
/**
 * Display Tick Phases shortcode
 *
 * @package uri-ticks
 */

/**
 * The shortcode
 *
 * @param arr $atts the attributes.
 * @param str $content the content.
 */
function uri_ticks_shortcode_display_tick_phases( $atts, $content = null ) {

	$atts = shortcode_atts(
	   array(
		   'species' => '',
	   ),
	$atts
	);

	ob_start();

	?>

	<div id="uri-tick-phases-wrapper" data-active-region="new-england">
		<div class="map-container">
			<?php include( URI_TICKS_DIR_PATH . '/i/us_states.svg' ); ?>
		</div>
		<div class="phases-container">
			<div class="phases-wrapper">
				<h2>Tick Phases</h2>
				<div class="phases-list">
					<?php echo uri_ticks_get_the_phases( $atts['species'] ); ?>
				</div>
			</div>
		</div>
	</div>

	<?php

	return ob_get_clean();

}
add_shortcode( 'uri-display-tick-phases', 'uri_ticks_shortcode_display_tick_phases' );


function uri_ticks_get_the_phases( $s ) {

	$args = array(
		'post_type' => 'tick',
		'category_name' => $s,
		'order' => 'ASC',
	);

	$the_query = new WP_Query( $args );
	$output = '';

	if ( $the_query->have_posts() ) {
		$output .= '<ul>';
		while ( $the_query->have_posts() ) {
			$the_query->the_post();
			$output .= '<li>' . uri_ticks_phase_output() . '</li>';
		}
		$output .= '</ul>';
	} else {
		// no posts found
	}
	/* Restore original Post Data */
	wp_reset_postdata();

	return $output;

}

function uri_ticks_phase_output() {

	$regions = uri_ticks_get_the_regions();

	$output = '<h1>' . get_the_title() . '</h1>';

	foreach ( $regions as $r => $rname ) {

		$output .= '<div class="phase-region-' . $r . '">';
		$output .= '<h2>' . $rname . '</h2>';

		$output .= '<div class="uri-tick-activity-wrapper">';
		$output .= '<h3>Activity</h3>';
		$output .= '<div class="activity-graph">';
		$output .= do_shortcode( '[uri-display-tick-activity title="" region="' . str_replace( '-', '_', $r ) . '"]' );
		$output .= '</div>';
		$output .= '</div>';

		$output .= '<div class="uri-tick-diseases-wrapper">';
		$output .= '<h3>Known Diseases Transmitted</h3>';
		$output .= '<div class="disease-list">';
		$output .= uri_ticks_diseases_output( $r );
		$output .= '</div>';
		$output .= '</div>';

		$output .= '</div>';

	}

	return $output;

}

/**
 * Build the disease output
 */
function uri_ticks_diseases_output( $r ) {

	$diseases = get_field( str_replace( '-', '_', $r ) . '_diseases' );

	if ( ! $diseases ) {
		return '<div class="results-label no-diseases">No known diseases in this region.</div>';
	}

	$output .= '<ul class="uri-tick-diseases">';

	foreach ( $diseases as $d ) {
		$output .= '<li>';
		$output .= '<div class="disease-name">' . get_the_category_by_ID( $d ) . '</div>';
		$output .= '<div class="disease-description">' . category_description( $d ) . '</div>';
		$output .= '</li>';
	}

	$output .= '</ul>';

	return $output;

}