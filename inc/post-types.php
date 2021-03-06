<?php
/**
 * Custom post types and fields
 *
 * @package uri-ticks
 */

/**
 * Set up Ticks post type
 */
function uri_ticks_create_tick_post_type() {
	register_post_type(
	   'tick',
	array(
		'label' => 'Tick',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'hierarchical' => true,
		'rewrite' => array( 'slug' => 'species' ),
		'query_var' => true,
		'has_archive' => true,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions' ),
		'taxonomies' => array( 'post_tag', 'category' ),
		'labels' => array(
			'name' => __( 'Ticks', 'uri' ),
			'singular_name' => __( 'Tick', 'uri' ),
			'add_new'            => __( 'Add New', 'uri' ),
			'add_new_item'       => __( 'Add New Tick', 'uri' ),
			'edit_item'          => __( 'Edit Tick', 'uri' ),
			'new_item'           => __( 'New Tick', 'uri' ),
			'all_items'          => __( 'All Ticks', 'uri' ),
			'view_item'          => __( 'View Tick', 'uri' ),
			'search_items'       => __( 'Search ticks', 'uri' ),
			'not_found'          => __( 'No ticks found', 'uri' ),
			'not_found_in_trash' => __( 'No ticks found in the Trash', 'uri' ),
			'parent_item_colon'  => '',
			'menu_name'          => 'Ticks',
		),
		'menu_icon' => 'dashicons-search',
	)
	);
}
add_action( 'init', 'uri_ticks_create_tick_post_type' );

if ( function_exists( 'acf_add_local_field_group' ) ) :

	acf_add_local_field_group(
		array(
			'key' => 'group_5e53e80c0cebb',
			'title' => 'Images',
			'fields' => array(
				array(
					'key' => 'field_5e53e818dd95b',
					'label' => 'Secondary Image',
					'name' => 'secondary_image',
					'type' => 'image',
					'instructions' => 'Upload a secondary image of the tick.  For example, if the featured image shows the dorsal view, upload a ventral view here.',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'return_format' => 'array',
					'preview_size' => 'medium',
					'library' => 'all',
					'min_width' => '',
					'min_height' => '',
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '',
					'mime_types' => '',
				),
			),
			'location' => array(
				array(
					array(
						'param' => 'post_type',
						'operator' => '==',
						'value' => 'tick',
					),
				),
			),
			'menu_order' => 0,
			'position' => 'normal',
			'style' => 'default',
			'label_placement' => 'top',
			'instruction_placement' => 'label',
			'hide_on_screen' => '',
			'active' => true,
			'description' => '',
		)
		);

endif;

/**
 * Include custom fields
 */
include 'region-fields/pacific.php';
include 'region-fields/mountain.php';
include 'region-fields/ws-central.php';
include 'region-fields/wn-central.php';
include 'region-fields/es-central.php';
include 'region-fields/en-central.php';
include 'region-fields/south-atlantic.php';
include 'region-fields/mid-atlantic.php';
include 'region-fields/new-england.php';
