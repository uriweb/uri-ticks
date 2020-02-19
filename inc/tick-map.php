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

	$regions = uri_ticks_get_the_regions();
	$months = uri_ticks_get_the_months();

	ob_start();

	?>

	<div id="uri-tick-map-wrapper" data-active-region="new-england" data-active-month="<?php echo strtolower( gmdate( 'F' ) ); ?>">
		<div class="map-container">
			<?php include( URI_TICKS_DIR_PATH . '/i/us_states.svg' ); ?>
		</div>
		<div class="species-container">
			<div class="species-wrapper">
				<h2>Tick Activity</h2>
				<div class="species-menu">
					<div class="species-menu-select-region">
						<select>
							<option>Select a region</option>
							<?php foreach ( $regions as $r => $rname ) : ?>
							<option value="<?php echo $r; ?>"><?php echo $rname; ?></option>
							<?php endforeach; ?>
						</select>
					</div>
					<div class="species-menu-select-month">
						<select>
							<option>Select a month</option>
							<?php foreach ( $months as $m ) : ?>
							<option value="<?php echo $m; ?>"><?php echo ucfirst( $m ); ?></option>
							<?php endforeach; ?>
						</select>
					</div>
				</div>
				<div class="species-list">
					<div class="results-label instruction-label">
						<p>Select a region to begin searching for ticks, and adjust the time of year to see how tick activity changes.</p>
						<p>Results will appear here.</p>
					</div>
					<?php
					foreach ( $regions as $r => $rname ) :
						?>

					<div class="species-region" id="species-region-<?php echo $r; ?>">
						<h3><?php echo $rname; ?></h3>
						<?php echo uri_ticks_map_get_tick_posts( $atts, $r ); ?>
					</div>

					<?php endforeach; ?>
				</div>
			</div>
		</div>
		<div class="time-slider">
			<div class="time-slider-container">
				<label id="uri-tick-map-timeframe-label" for="uri-tick-map-timeframe">Month</label>
				<input type="range" min="1" max="12" value="<?php echo gmdate( 'n' ); ?>" class="slider" id="uri-tick-map-timeframe">
				<div class="time-slider-labels">
					<?php
					foreach ( $months as $m ) :
						?>
						<div class="time-slider-label" data-label-name="<?php echo $m; ?>"><?php echo ucfirst( substr( $m, 0, 3 ) ); ?></div>
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
 *
 * @param arr $atts the attributes.
 * @param str $r the region key.
 */
function uri_ticks_map_get_tick_posts( $atts, $r ) {

	$months = uri_ticks_get_the_months();
	$output = '';

	foreach ( $months as $m ) {
		$output .= uri_ticks_get_ticks_by_month( $atts, $r, $m );
	}

	return $output;

}

/**
 * Get tick posts by month
 *
 * @param arr $atts the attributes.
 * @param str $r the region key.
 * @param str $m the month key.
 */
function uri_ticks_get_ticks_by_month( $atts, $r, $m ) {

	$meta_key = str_replace( '-', '_', $r ) . '_activity_' . $m;
	$args = array(
		'post_type' => 'tick',
		'meta_key' => $meta_key,
		'meta_value' => array( '', null ),
		'meta_compare' => 'NOT IN',
		'orderby' => 'meta_value_num',
	);

	// The Query
	$the_query = new WP_Query( $args );

	$output .= '<div class="activity-container activity-' . $m . '">';
	$output .= '<h4 class="title">' . ucfirst( $m ) . '</h4>';
	$output .= '<ul class="activity-list">';

	// The Loop
	if ( $the_query->have_posts() ) {
		while ( $the_query->have_posts() ) {
			$the_query->the_post();
			$meta_val = get_field( $meta_key );
			$option_max = get_option( 'uri_ticks_activity_default_max' );
			$p = intval( $meta_val ) / intval( $option_max ) * 100;
			$classes = '';
			if ( strval( $atts['threshold'] ) == $meta_val ) {
				$classes = 'inactive';
			}
			$output .= '<li><a href="' . get_the_permalink() . '" class="' . $classes . '" data-activity-percent="' . $p . '">';
			$output .= '<div class="species-image">' . get_the_post_thumbnail() . '</div>';
			$output .= '<div class="species-meta">';
			$output .= '<div class="species-category">' . implode( ', ', uri_ticks_map_return_cat_names() ) . '</div>';
			$output .= '<div class="species-tag">' . implode( ', ', uri_ticks_map_return_cat_names( 'tags' ) ) . '</div>';
			$output .= '<div class="species-activity-wrapper">';
			$output .= '<div class="species-activity"><div class="species-activity-bar" style="width:' . $p . '%;"></div></div>';
			$output .= '</div>';
			$output .= '</div>';
			$output .= '</a></li>';
		}
	} else {
		$output .= '<li><div class="results-label no-results-label">No ticks present in this region.</div></li>';
	}

	$output .= '</ul>';
	$output .= '</div>';

	/* Restore original Post Data */
	wp_reset_postdata();

	return $output;

}

/**
 * Return category or tag names
 *
 * @param str $type specify 'cats' or 'tags'.
 */
function uri_ticks_map_return_cat_names( $type = 'cats' ) {

	switch ( $type ) {
		case 'cats':
			$cats = get_the_category();
			break;
		case 'tags':
			$cats = get_the_tags();
			break;
	}

	$names = array();

	foreach ( $cats as $c ) {
		array_push( $names, $c->name );
	}

	return $names;

}
