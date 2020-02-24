<?php
/**
 * Plugin Name: URI Ticks
 * Plugin URI: http://www.uri.edu
 * Description: Creates custom posts, fields, and interaction for URI Tick Encounter data
 * Version: 0.1.0
 * Author: URI Web Communications
 * Author URI: https://today.uri.edu/
 *
 * @author: Brandon Fuller <bjcfuller@uri.edu>
 * @package uri-ticks
 */

// Block direct requests
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

define( 'URI_TICKS_DIR_PATH', plugin_dir_path( __FILE__ ) );

/**
 * Include css and js
 */
function uri_ticks_enqueues() {

	wp_register_style( 'uri-ticks-css', plugins_url( '/css/style.built.css', __FILE__ ) );
	wp_enqueue_style( 'uri-ticks-css' );

	wp_register_script( 'uri-ticks-js', plugins_url( '/js/script.built.js', __FILE__ ) );
	wp_enqueue_script( 'uri-ticks-js' );

}
add_action( 'wp_enqueue_scripts', 'uri_ticks_enqueues' );

/**
 * Return an array of regions
 */
function uri_ticks_get_the_regions() {
	return array(
		'en-central' => 'E/N Central',
		'es-central' => 'E/S Central',
		'mid-atlantic' => 'Mid Atlantic',
		'mountain' => 'Mountain',
		'new-england' => 'New England',
		'pacific' => 'Pacific',
		'south-atlantic' => 'South Atlantic',
		'wn-central' => 'W/N Central',
		'ws-central' => 'W/S Central',
	);
}


/**
 * Return an array of months
 */
function uri_ticks_get_the_months() {
	return array(
		'january',
		'february',
		'march',
		'april',
		'may',
		'june',
		'july',
		'august',
		'september',
		'october',
		'november',
		'december',
	);
}

/**
 * Return category or tag names
 *
 * @param str $type specify 'cats' or 'tags'.
 */
function uri_ticks_return_cat_names( $type = 'cats' ) {

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


/**
 * Settings
 */
include( URI_TICKS_DIR_PATH . '/inc/settings.php' );

/**
 * Custom fields
 */
include( URI_TICKS_DIR_PATH . '/inc/post-types.php' );

/**
 * Custom taxonomy
 */
include( URI_TICKS_DIR_PATH . '/inc/taxonomy.php' );

/**
 * Tick Map shortcode
 */
include( URI_TICKS_DIR_PATH . '/inc/tick-map.php' );

/**
 * Display Tick Diseases shortcode
 */
include( URI_TICKS_DIR_PATH . '/inc/display-tick-phases.php' );
