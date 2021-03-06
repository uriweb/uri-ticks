<?php
/**
 * New England Region custom fields
 *
 * @package uri-ticks
 */

if ( function_exists( 'acf_add_local_field_group' ) ) :

	acf_add_local_field_group(
	 array(
		 'key' => 'group_5e3db09170258',
		 'title' => 'New England Region',
		 'fields' => array(
			 array(
				 'key' => 'field_5e3db09172a38',
				 'label' => 'Abundance',
				 'name' => 'new_england_abundance',
				 'type' => 'number',
				 'instructions' => 'Assign a numerical abundance or leave blank if no presence. Do not use on life stage posts.',
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
				 'key' => 'field_5e3db09172a4c',
				 'label' => 'Diseases',
				 'name' => 'new_england_diseases',
				 'type' => 'taxonomy',
				 'instructions' => 'Assign diseases carried by this life stage. Do not use on species posts.',
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
				 'key' => 'field_5e3db09172a50',
				 'label' => 'Activity',
				 'name' => 'new_england_activity',
				 'type' => 'group',
				 'instructions' => 'Assign a numerical activity level for each month or leave blank if no activity. Do not use on species posts.',
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
						 'key' => 'field_5e3db09176313',
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
						 'key' => 'field_5e3db09176326',
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
						 'key' => 'field_5e3db0917632b',
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
						 'key' => 'field_5e3db09176330',
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
						 'key' => 'field_5e3db09176335',
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
						 'key' => 'field_5e3db09176339',
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
						 'key' => 'field_5e3db0917633e',
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
						 'key' => 'field_5e3db09176343',
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
						 'key' => 'field_5e3db09176348',
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
						 'key' => 'field_5e3db0917634c',
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
						 'key' => 'field_5e3db09176351',
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
						 'key' => 'field_5e3db09176356',
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
