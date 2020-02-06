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
		'rewrite' => array( 'slug' => 'ticks' ),
		'query_var' => true,
		'has_archive' => true,
		'exclude_from_search' => false,
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

/**
 * Set up Diseases post type
 */
function uri_ticks_create_disease_post_type() {
	register_post_type(
	   'disease',
	array(
		'label' => 'Disease',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'hierarchical' => true,
		'rewrite' => array( 'slug' => 'diseases' ),
		'query_var' => true,
		'has_archive' => true,
		'exclude_from_search' => false,
		'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions' ),
		'taxonomies' => array( 'post_tag', 'category' ),
		'labels' => array(
			'name' => __( 'Diseases', 'uri' ),
			'singular_name' => __( 'Disease', 'uri' ),
			'add_new'            => __( 'Add New', 'uri' ),
			'add_new_item'       => __( 'Add New Disease', 'uri' ),
			'edit_item'          => __( 'Edit Disease', 'uri' ),
			'new_item'           => __( 'New Disease', 'uri' ),
			'all_items'          => __( 'All Diseases', 'uri' ),
			'view_item'          => __( 'View Disease', 'uri' ),
			'search_items'       => __( 'Search diseases', 'uri' ),
			'not_found'          => __( 'No diseases found', 'uri' ),
			'not_found_in_trash' => __( 'No diseases found in the Trash', 'uri' ),
			'parent_item_colon'  => '',
			'menu_name'          => 'Diseases',
		),
		'menu_icon' => 'dashicons-sos',
	)
	);
}
add_action( 'init', 'uri_ticks_create_disease_post_type' );


/**
 * Set up custom fields for ticks
 */
if ( function_exists( 'acf_add_local_field_group' ) ) :

	acf_add_local_field_group(
	 array(
		 'key' => 'group_5e3c4fc1447e0',
		 'title' => 'Abundances',
		 'fields' => array(
			 array(
				 'key' => 'field_5e3c5008f17fd',
				 'label' => 'Pacific Region',
				 'name' => 'pacific_region',
				 'type' => 'number',
				 'instructions' => '',
				 'required' => 0,
				 'conditional_logic' => 0,
				 'wrapper' => array(
					 'width' => '',
					 'class' => '',
					 'id' => '',
				 ),
				 'default_value' => '',
				 'placeholder' => 'Assign a numerical abundance or leave blank if no presence',
				 'prepend' => '',
				 'append' => '',
				 'min' => '',
				 'max' => '',
				 'step' => '',
			 ),
			 array(
				 'key' => 'field_5e3c5033f17fe',
				 'label' => 'Mountain Region',
				 'name' => 'mountain_region',
				 'type' => 'number',
				 'instructions' => '',
				 'required' => 0,
				 'conditional_logic' => 0,
				 'wrapper' => array(
					 'width' => '',
					 'class' => '',
					 'id' => '',
				 ),
				 'default_value' => '',
				 'placeholder' => 'Assign a numerical abundance or leave blank if no presence',
				 'prepend' => '',
				 'append' => '',
				 'min' => '',
				 'max' => '',
				 'step' => '',
			 ),
			 array(
				 'key' => 'field_5e3c507bf1800',
				 'label' => 'W/S Central Region',
				 'name' => 'ws_central_region',
				 'type' => 'number',
				 'instructions' => '',
				 'required' => 0,
				 'conditional_logic' => 0,
				 'wrapper' => array(
					 'width' => '',
					 'class' => '',
					 'id' => '',
				 ),
				 'default_value' => '',
				 'placeholder' => 'Assign a numerical abundance or leave blank if no presence',
				 'prepend' => '',
				 'append' => '',
				 'min' => '',
				 'max' => '',
				 'step' => '',
			 ),
			 array(
				 'key' => 'field_5e3c508cf1801',
				 'label' => 'W/N Central Region',
				 'name' => 'wn_central_region',
				 'type' => 'number',
				 'instructions' => '',
				 'required' => 0,
				 'conditional_logic' => 0,
				 'wrapper' => array(
					 'width' => '',
					 'class' => '',
					 'id' => '',
				 ),
				 'default_value' => '',
				 'placeholder' => 'Assign a numerical abundance or leave blank if no presence',
				 'prepend' => '',
				 'append' => '',
				 'min' => '',
				 'max' => '',
				 'step' => '',
			 ),
			 array(
				 'key' => 'field_5e3c5095f1802',
				 'label' => 'E/S Central Region',
				 'name' => 'es_central_region',
				 'type' => 'number',
				 'instructions' => '',
				 'required' => 0,
				 'conditional_logic' => 0,
				 'wrapper' => array(
					 'width' => '',
					 'class' => '',
					 'id' => '',
				 ),
				 'default_value' => '',
				 'placeholder' => 'Assign a numerical abundance or leave blank if no presence',
				 'prepend' => '',
				 'append' => '',
				 'min' => '',
				 'max' => '',
				 'step' => '',
			 ),
			 array(
				 'key' => 'field_5e3c50a3f1803',
				 'label' => 'E/N Central Region',
				 'name' => 'en_central_region',
				 'type' => 'number',
				 'instructions' => '',
				 'required' => 0,
				 'conditional_logic' => 0,
				 'wrapper' => array(
					 'width' => '',
					 'class' => '',
					 'id' => '',
				 ),
				 'default_value' => '',
				 'placeholder' => 'Assign a numerical abundance or leave blank if no presence',
				 'prepend' => '',
				 'append' => '',
				 'min' => '',
				 'max' => '',
				 'step' => '',
			 ),
			 array(
				 'key' => 'field_5e3c50aff1804',
				 'label' => 'South Atlantic Region',
				 'name' => 'south_atlantic_region',
				 'type' => 'number',
				 'instructions' => '',
				 'required' => 0,
				 'conditional_logic' => 0,
				 'wrapper' => array(
					 'width' => '',
					 'class' => '',
					 'id' => '',
				 ),
				 'default_value' => '',
				 'placeholder' => 'Assign a numerical abundance or leave blank if no presence',
				 'prepend' => '',
				 'append' => '',
				 'min' => '',
				 'max' => '',
				 'step' => '',
			 ),
			 array(
				 'key' => 'field_5e3c50c1f1805',
				 'label' => 'Mid Atlantic Region',
				 'name' => 'mid_atlantic_region',
				 'type' => 'number',
				 'instructions' => '',
				 'required' => 0,
				 'conditional_logic' => 0,
				 'wrapper' => array(
					 'width' => '',
					 'class' => '',
					 'id' => '',
				 ),
				 'default_value' => '',
				 'placeholder' => 'Assign a numerical abundance or leave blank if no presence',
				 'prepend' => '',
				 'append' => '',
				 'min' => '',
				 'max' => '',
				 'step' => '',
			 ),
			 array(
				 'key' => 'field_5e3c50d4f1806',
				 'label' => 'New England Region',
				 'name' => 'new_england_region',
				 'type' => 'number',
				 'instructions' => '',
				 'required' => 0,
				 'conditional_logic' => 0,
				 'wrapper' => array(
					 'width' => '',
					 'class' => '',
					 'id' => '',
				 ),
				 'default_value' => '',
				 'placeholder' => 'Assign a numerical abundance or leave blank if no presence',
				 'prepend' => '',
				 'append' => '',
				 'min' => '',
				 'max' => '',
				 'step' => '',
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
		 'label_placement' => 'left',
		 'instruction_placement' => 'label',
		 'hide_on_screen' => '',
		 'active' => true,
		 'description' => 'Assign a numerical abundance (absolute or relative) for each region',
	 )
	 );

 endif;
