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
		<h1 class="title">Life Cycle Stages</h1>
		<div class="map-container">
			<?php include( URI_TICKS_DIR_PATH . '/i/us_states.svg' ); ?>
			<div class="instructions">Select a region to see how seasonal activity and diseases carried by this tick change across the country.</div>
		</div>
		<div class="phases-container">
			<div class="phases-wrapper">
				<?php echo uri_ticks_get_the_phases( $atts['species'] ); ?>
			</div>
		</div>
	</div>

	<?php

	return ob_get_clean();

}
add_shortcode( 'uri-display-tick-phases', 'uri_ticks_shortcode_display_tick_phases' );


/**
 * Get the tick phases
 *
 * @param str $s The category name to pull.
 */
function uri_ticks_get_the_phases( $s ) {

	$the_parent_id = get_the_ID();

	$args = array(
		'post_type' => 'tick',
		'category_name' => $s,
		'order' => 'ASC',
	);

	$the_query = new WP_Query( $args );
	$output = '';

	if ( $the_query->have_posts() ) {
		$output .= '<ul class="phases-list">';
		while ( $the_query->have_posts() ) {
			$the_query->the_post();
			if ( ! uri_ticks_get_field( 'uri_ticks_hide_on_species_page' ) ) {
				$output .= '<li class="phase-item">' . uri_ticks_phase_output( $the_parent_id ) . '</li>';
			}
		}
		$output .= '</ul>';
	} else {
		// no posts found
	}
	/* Restore original Post Data */
	wp_reset_postdata();

	return $output;

}


/**
 * Build the tick phase output
 *
 * @param num $id The post ID.
 */
function uri_ticks_phase_output( $id ) {

	$regions = uri_ticks_get_the_regions();

	$output = '<h1>' . implode( ', ', uri_ticks_return_cat_names( 'tags' ) ) . '</h1>';
	$output .= uri_ticks_get_the_images();
	$output .= '<ul class="phase-regions-list">';

	foreach ( $regions as $r => $rname ) {

		if ( uri_ticks_has_abundance( $r, $id ) ) {

			$output .= '<li class="phase-region phase-region-' . $r . '">';
			$output .= '<h2>' . $rname . ' Region</h2>';

			$output .= '<div class="uri-tick-activity-wrapper">';
			$output .= '<h3>Activity</h3>';
			$output .= uri_ticks_activity_graph_output( $r );
			$output .= '</div>';

			$output .= '<div class="uri-tick-diseases-wrapper">';
			$output .= '<h3>Known Diseases Transmitted</h3>';
			$output .= '<div class="disease-list">';
			$output .= uri_ticks_diseases_output( $r );
			$output .= '</div>';
			$output .= '</div>';

			$output .= '</li>';

		}
	}

	$output .= '</ul>';

	return $output;

}

/**
 * Build the disease output
 *
 * @param str $r The region key.
 */
function uri_ticks_diseases_output( $r ) {

	$diseases = get_field( str_replace( '-', '_', $r ) . '_diseases' );

	if ( ! $diseases ) {
		return '<div class="results-label no-diseases">No known diseases in this region at this time.</div>';
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

/**
 * Build the graph output
 *
 * @param arr $r the region key.
 */
function uri_ticks_activity_graph_output( $r ) {

	$activity = get_field( str_replace( '-', '_', $r ) . '_activity' );

	$sum = 0;
	foreach ( $activity as $m => $v ) {
		$sum += intval( $v );
	}

	if ( 0 == $sum ) {
		$output = '<div class="results-label no-activity">No activity data for this region at this time.</div>';
		return $output;
	}

	$min = 0;
	$option_min = get_option( 'uri_ticks_activity_default_min' );
	if ( ! empty( $option_min ) ) {
		$min = intval( $option_min );
	}

	$max = 4;
	$option_max = get_option( 'uri_ticks_activity_default_max' );
	if ( ! empty( $option_max ) ) {
		$max = intval( $option_max );
	}

	$output = '<div class="uri-ticks-activity">';
	$output .= '<div class="uri-ticks-activity-graph">';

	/*
	$output .= '<div class="uri-ticks-activity-legend">';
	$output .= '<div class="uri-ticks-activity-legend-upper">High</div>';
	$output .= '<div class="uri-ticks-activity-legend-lower">Low</div>';
	$output .= '</div>';
	*/

	foreach ( $activity as $m => $v ) {

		$p = max( 0, ( intval( $v ) - $min ) / ( $max - $min ) * 100 );

		$output .= '<div class="uri-ticks-activity-column">';

		$output .= '<div class="uri-ticks-activity-bar-wrapper">';
		$output .= '<div class="uri-ticks-activity-bar" style="height:' . ( 100 - $p ) . '%" title="' . $v . '"></div>';
		$output .= '</div>';

		$classes = '';
		if ( strtolower( gmdate( 'F' ) ) == $m ) {
			$classes = ' current';
		}

		$output .= '<div class="uri-ticks-activity-label' . $classes . '">' . ucfirst( substr( $m, 0, 3 ) ) . '</div>';

		$output .= '</div>';

	}

	$output .= '</div>';
	$output .= '</div>';

	return $output;

}


/**
 * Return whether the species has abunance in the region
 *
 * @param str $r The region key.
 * @param num $id The post id.
 *
 * @return boolval
 */
function uri_ticks_has_abundance( $r, $id ) {

	$has_abundance = false;
	$abundance = get_field( str_replace( '-', '_', $r ) . '_abundance', $id );

	if ( ! empty( $abundance ) || 0 != intval( $abundance ) || null != $abundance ) {
		$has_abundance = true;
	}

	return $has_abundance;

}


/**
 * Build the images output
 */
function uri_ticks_get_the_images() {

	$thumbnail = get_the_post_thumbnail();
	$img = get_field( 'secondary_image' );
	$has_images = false;

	$output = '<div class="species-images">';

	if ( $thumbnail ) {
		$output .= '<div class="main-image">' . $thumbnail . '<div class="img-caption">Top</div></div>';
		$has_images = true;
	}

	if ( $img && null !== $img ) {
		$output .= '<div class="secondary-image"><img src="' . $img['url'] . '" alt="' . $img['alt'] . '" srcset="' . wp_get_attachment_image_srcset( $img['id'] ) . '" /><div class="img-caption">Bottom</div></div>';
		$has_images = true;
	}

	if ( ! $has_images ) {
		$output .= '<div class="results-label no-images">There are no images of this tick available.</div>';
	}

	$output .= '</div>';

	return $output;

}
