<?php
/**
 * Custom taxonomy
 *
 * @package uri-ticks
 */

 /**
  * Define the vector taxonomy for disease post types
  */
function uri_ticks_vector_taxonomy() {

	register_taxonomy(
	'vector',
	array(
		0 => 'disease',
	),
	array(
		'hierarchical' => true,
		'label' => 'Vectors',
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => false,
		'show_in_rest' => true,
		'singular_label' => 'Vector',
		'labels' => array(
			'add_new_item' => __( 'Add New Vector' ),
			'update_item' => __( 'Update Vector' ),
			'view_item' => __( 'View Vector' ),
			'edit_item' => __( 'Edit Vector' ),
			'all_item' => __( 'All Vectors' ),
		),
	)
	);

}
add_action( 'init', 'uri_ticks_vector_taxonomy' );


/**
 * Define the region taxonomy for disease post types
 */
function uri_ticks_region_taxonomy() {

	register_taxonomy(
	'region',
	array(
		0 => 'disease',
	),
	array(
		'hierarchical' => true,
		'label' => 'Regions',
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => false,
		'show_in_rest' => true,
		'singular_label' => 'Region',
		'labels' => array(
			'add_new_item' => __( 'Add New Region' ),
			'update_item' => __( 'Update Region' ),
			'view_item' => __( 'View Region' ),
			'edit_item' => __( 'Edit Region' ),
			'all_item' => __( 'All Regions' ),
		),
	)
	);

}
add_action( 'init', 'uri_ticks_region_taxonomy' );
