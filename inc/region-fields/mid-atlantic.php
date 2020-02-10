<?php
/**
 * Mid Atlantic Region custom fields
 *
 * @package uri-ticks
 */

if ( function_exists( 'acf_add_local_field_group' ) ) :

	acf_add_local_field_group(
	 array(
		 'key' => 'group_5e3db08227222',
		 'title' => 'Mid Atlantic Region',
		 'fields' => array(
			 array(
				 'key' => 'field_5e3db08229b66',
				 'label' => 'Abundance',
				 'name' => 'mid_atlantic_abundance',
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
				 'key' => 'field_5e3db08229b70',
				 'label' => 'Diseases',
				 'name' => 'mid_atlantic_diseases',
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
				 'key' => 'field_5e3db08229b77',
				 'label' => 'Activity',
				 'name' => 'mid_atlantic_activity',
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
						 'key' => 'field_5e3db0822d8f3',
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
						 'key' => 'field_5e3db0822d907',
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
						 'key' => 'field_5e3db0822d90c',
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
						 'key' => 'field_5e3db0822d911',
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
						 'key' => 'field_5e3db0822d916',
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
						 'key' => 'field_5e3db0822d91a',
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
						 'key' => 'field_5e3db0822d91f',
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
						 'key' => 'field_5e3db0822d924',
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
						 'key' => 'field_5e3db0822d928',
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
						 'key' => 'field_5e3db0822d92d',
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
						 'key' => 'field_5e3db0822d932',
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
						 'key' => 'field_5e3db0822d936',
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
