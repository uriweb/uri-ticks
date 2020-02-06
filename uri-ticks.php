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

/**
 * Include css and js
 */
function uri_plugin_template_enqueues() {

	wp_register_style( 'uri-plugin-template-css', plugins_url( '/css/style.built.css', __FILE__ ) );
	wp_enqueue_style( 'uri-plugin-template-css' );

	wp_register_script( 'uri-plugin-template-js', plugins_url( '/js/script.built.js', __FILE__ ) );
	wp_enqueue_script( 'uri-plugin-template-js' );

}
add_action( 'wp_enqueue_scripts', 'uri_plugin_template_enqueues' );
