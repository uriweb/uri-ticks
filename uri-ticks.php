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
 * Get Ticks shortcode
 */
include( URI_TICKS_DIR_PATH . '/inc/get-ticks.php' );

/**
 * Tick Map shortcode
 */
include( URI_TICKS_DIR_PATH . '/inc/tick-map.php' );

/**
 * Display Tick Activity shortcode
 */
include( URI_TICKS_DIR_PATH . '/inc/display-tick-activity.php' );
