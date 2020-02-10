<?php
/**
 * E/N Central Region custom fields
 *
 * @package uri-ticks
 */

if ( function_exists( 'acf_add_local_field_group' ) ) :

	acf_add_local_field_group(
	 array(
		 'key' => 'group_5e3db05927913',
		 'title' => 'E/N Central Region',
		 'fields' => array(
			 array(
				 'key' => 'field_5e3db0592ad74',
				 'label' => 'Abundance',
				 'name' => 'en_central_abundance',
				 'type' => 'number',
				 'instructions' => 'Assign a numerical abundance or leave blank if no presence',
				 'required' => 0,
				 'conditional_logic' => 0,
				 'wrapper' => array(
					 'width' => '',
					 'class' => '',
					 'id' => '',
				 ),
				 'default_value' => '',
				 'placeholder' => '',
				 'prepend' => '',
				 'append' => '',
				 'min' => '',
				 'max' => '',
				 'step' => '',
			 ),
			 array(
				 'key' => 'field_5e3db0592ad88',
				 'label' => 'Diseases',
				 'name' => 'en_central_diseases',
				 'type' => 'taxonomy',
				 'instructions' => 'Assign diseases carried by this life stage',
				 'required' => 0,
				 'conditional_logic' => 0,
				 'wrapper' => array(
					 'width' => '',
					 'class' => '',
					 'id' => '',
				 ),
				 'taxonomy' => 'disease',
				 'field_type' => 'checkbox',
				 'add_term' => 1,
				 'save_terms' => 0,
				 'load_terms' => 0,
				 'return_format' => 'id',
				 'multiple' => 0,
				 'allow_null' => 0,
			 ),
			 array(
				 'key' => 'field_5e3db0592ad8d',
				 'label' => 'Activity',
				 'name' => 'en_central_activity',
				 'type' => 'group',
				 'instructions' => 'Assign a numerical activity level for each month or leave blank if no activity',
				 'required' => 0,
				 'conditional_logic' => 0,
				 'wrapper' => array(
					 'width' => '',
					 'class' => '',
					 'id' => '',
				 ),
				 'layout' => 'table',
				 'sub_fields' => array(
					 array(
						 'key' => 'field_5e3db0592ec41',
						 'label' => 'January',
						 'name' => 'january',
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
						 'placeholder' => '',
						 'prepend' => '',
						 'append' => '',
						 'min' => '',
						 'max' => '',
						 'step' => '',
					 ),
					 array(
						 'key' => 'field_5e3db0592ec55',
						 'label' => 'February',
						 'name' => 'february',
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
						 'placeholder' => '',
						 'prepend' => '',
						 'append' => '',
						 'min' => '',
						 'max' => '',
						 'step' => '',
					 ),
					 array(
						 'key' => 'field_5e3db0592ec59',
						 'label' => 'March',
						 'name' => 'march',
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
						 'placeholder' => '',
						 'prepend' => '',
						 'append' => '',
						 'min' => '',
						 'max' => '',
						 'step' => '',
					 ),
					 array(
						 'key' => 'field_5e3db0592ec5e',
						 'label' => 'April',
						 'name' => 'april',
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
						 'placeholder' => '',
						 'prepend' => '',
						 'append' => '',
						 'min' => '',
						 'max' => '',
						 'step' => '',
					 ),
					 array(
						 'key' => 'field_5e3db0592ec63',
						 'label' => 'May',
						 'name' => 'may',
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
						 'placeholder' => '',
						 'prepend' => '',
						 'append' => '',
						 'min' => '',
						 'max' => '',
						 'step' => '',
					 ),
					 array(
						 'key' => 'field_5e3db0592ec68',
						 'label' => 'June',
						 'name' => 'june',
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
						 'placeholder' => '',
						 'prepend' => '',
						 'append' => '',
						 'min' => '',
						 'max' => '',
						 'step' => '',
					 ),
					 array(
						 'key' => 'field_5e3db0592ec6c',
						 'label' => 'July',
						 'name' => 'july',
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
						 'placeholder' => '',
						 'prepend' => '',
						 'append' => '',
						 'min' => '',
						 'max' => '',
						 'step' => '',
					 ),
					 array(
						 'key' => 'field_5e3db0592ec72',
						 'label' => 'August',
						 'name' => 'august',
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
						 'placeholder' => '',
						 'prepend' => '',
						 'append' => '',
						 'min' => '',
						 'max' => '',
						 'step' => '',
					 ),
					 array(
						 'key' => 'field_5e3db0592ec76',
						 'label' => 'September',
						 'name' => 'september',
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
						 'placeholder' => '',
						 'prepend' => '',
						 'append' => '',
						 'min' => '',
						 'max' => '',
						 'step' => '',
					 ),
					 array(
						 'key' => 'field_5e3db0592ec7b',
						 'label' => 'October',
						 'name' => 'october',
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
						 'placeholder' => '',
						 'prepend' => '',
						 'append' => '',
						 'min' => '',
						 'max' => '',
						 'step' => '',
					 ),
					 array(
						 'key' => 'field_5e3db0592ec80',
						 'label' => 'November',
						 'name' => 'november',
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
						 'placeholder' => '',
						 'prepend' => '',
						 'append' => '',
						 'min' => '',
						 'max' => '',
						 'step' => '',
					 ),
					 array(
						 'key' => 'field_5e3db0592ec85',
						 'label' => 'December',
						 'name' => 'december',
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
						 'placeholder' => '',
						 'prepend' => '',
						 'append' => '',
						 'min' => '',
						 'max' => '',
						 'step' => '',
					 ),
				 ),
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
		 'description' => '',
	 )
	 );

 endif;
