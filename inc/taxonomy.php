<?php
/**
 * Custom taxonomy
 *
 * @package uri-ticks
 */

 /**
  * Define the disease taxonomy for tick post types
  */
function uri_ticks_disease_taxonomy() {

	register_taxonomy(
	'disease',
	array(
		0 => 'tick',
	),
	array(
		'hierarchical' => true,
		'label' => 'Diseases',
		'show_ui' => true,
		'show_in_quick_edit' => false,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => false,
		'show_in_rest' => false,
		'singular_label' => 'Disease',
		'labels' => array(
			'add_new_item' => __( 'Add New Disease' ),
			'update_item' => __( 'Update Disease' ),
			'view_item' => __( 'View Disease' ),
			'edit_item' => __( 'Edit Disease' ),
			'all_item' => __( 'All Diseases' ),
		),
	)
	);

}
add_action( 'init', 'uri_ticks_disease_taxonomy' );
