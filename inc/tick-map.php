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
		   array(
			   'threshold' => 0,
		   ),
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
				<p class="instruction">Select a region</p>
				<?php

				$regions = uri_ticks_get_the_regions();
				foreach ( $regions as $r ) :
					?>

				<div class="species-region" id="species-region-<?php echo $r; ?>">
					<?php echo uri_ticks_map_get_tick_posts( $atts, $r ); ?>
				</div>

				<?php endforeach; ?>
			</div>
		</div>
		<div class="time-slider">
			<h2>Time slider</h2>
			<div class="time-slider-container">
				<input type="range" min="1" max="12" value="<?php echo date( 'n' ); ?>" class="slider" id="uri-tick-map-timeframe">
				<div class="time-slider-labels">
					<?php
					$months = uri_ticks_get_the_months();
					foreach ( $months as $m ) :
						?>
						<div><?php echo ucfirst( substr( $m, 0, 3 ) ); ?></div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>

	<?php

	return ob_get_clean();

}

/**
 * Get tick posts by region
 */
function uri_ticks_map_get_tick_posts( $atts, $r ) {

	$months = uri_ticks_get_the_months();
	$output = '';

	foreach ( $months as $m ) {
		$output .= uri_ticks_get_ticks_by_month( $atts, $r, $m );
	}

	return $output;

}

function uri_ticks_get_ticks_by_month( $atts, $r, $m ) {

	$meta_key = str_replace( '-', '_', $r ) . '_activity_' . $m;
	$args = array(
		'post_type' => 'tick',
		'meta_key' => $meta_key,
		'meta_value' => $atts['threshold'],
		'meta_compare' => '>',
		'orderby' => 'meta_value_num',
	);

	// The Query
	$the_query = new WP_Query( $args );

	$output = '<ul class="activity-' . $m . '">';
	$output .= '<h3 class="title">' . $r . ', ' . $m . '</h3>';

	// The Loop
	if ( $the_query->have_posts() ) {
		while ( $the_query->have_posts() ) {
			$the_query->the_post();
			$output .= '<li><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></li>';
		}
	} else {
		$output .= '<li>No activity</li>';
	}

	$output .= '</ul>';

	/* Restore original Post Data */
	wp_reset_postdata();

	return $output;

}
