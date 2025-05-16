<?php
/**
 * Layout options
 *
 * @package uri-ticks
 */

 /**
  * Register field groups
  * The register_field_group function accepts 1 array which holds the relevant data to register a field group
  * You may edit the array as you see fit. However, this may result in errors if the array is not compatible with ACF
  * This code must run every time the functions.php file is read
  */

if ( function_exists( 'register_field_group' ) ) {

	register_field_group(
		array(
			'id'         => '5fcf9df216e2a',
			'title'      => 'Tick Display Options',
			'fields'     => array(
				array(
					'key'          => 'field_5fcf9e0a30670',
					'label'        => 'Hide on species page',
					'name'         => 'uri_ticks_hide_on_species_page',
					'type'         => 'true_false',
					'instructions' => 'Effective only on life stage tick posts.	Useful for partially/fully fed females.',
					'required'     => '0',
					'message'      => 'If checked, life stage will not appear on the species master page.',
					'order_no'     => '0',
				),
			),
			'location'   => array(
				'rules'    => array(
					array(
						'param' => 'post_type',
						'operator' => '==',
						'value' => 'tick',
						'order_no' => 0,
					),
				),
				'allorany' => '',
			),
			'options'    => array(
				'position'       => 'side',
				'layout'         => 'default',
				'hide_on_screen' =>
				array(),
			),
			'menu_order' => 0,
		)
	);

};
