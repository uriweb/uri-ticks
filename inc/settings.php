<?php
/**
 * Settings
 *
 * @package uri-ticks
 */

/**
 * Custom option and settings
 *
 * @see https://developer.wordpress.org/plugins/settings/using-settings-api/
 */
function uri_ticks_settings_init() {

	register_setting(
		'uri_ticks',
		'uri_ticks_activity_default_min',
		array(
			'sanitize_callback' => 'uri_ticks_activity_validate_integer',
		)
	);

	register_setting(
		'uri_ticks',
		'uri_ticks_activity_default_max',
		array(
			'sanitize_callback' => 'uri_ticks_activity_validate_integer',
		)
	);

	add_settings_section(
		'uri_ticks_activity_defaults_section',
		__( 'Tick Activity Graph Settings', 'uri' ),
		'uri_ticks_activity_defaults_section_callback',
		'uri_ticks'
	);

	add_settings_field(
		'uri_ticks_activity_defaults_field_min', // id: as of WP 4.6 this value is used only internally
		__( 'Min Activity Value', 'uri' ), // title
		'uri_ticks_activity_defaults_field_min_callback', // callback
		'uri_ticks', // page
		'uri_ticks_activity_defaults_section', // section
		array( // args
			'label_for' => 'uri-ticks-field-min',
			'class' => 'uri_ticks_row',
		)
	);

	add_settings_field(
		'uri_ticks_activity_defaults_field_max', // id: as of WP 4.6 this value is used only internally
		__( 'Max Activity Value', 'uri' ), // title
		'uri_ticks_activity_defaults_field_max_callback', // callback
		'uri_ticks', // page
		'uri_ticks_activity_defaults_section', // section
		array( // args
			'label_for' => 'uri-ticks-field-max',
			'class' => 'uri_ticks_row',
		)
	);

}
add_action( 'admin_init', 'uri_ticks_settings_init' );

/**
 * Callback for a settings section
 *
 * @param arr $args has the following keys defined: title, id, callback.
 */
function uri_ticks_activity_defaults_section_callback( $args ) {
	echo '<p id="' . esc_attr( $args['id'] ) . '">' . esc_html_e( 'Default settings for the tick activity graphs and indicators.', 'uri' ) . '</p>';
}

/**
 * Min field callback
 * outputs the field
 *
 * @see add_settings_field()
 * @param arr $args The shortcode arguments.
 */
function uri_ticks_activity_defaults_field_min_callback( $args ) {
	// get the value of the setting we've registered with register_setting()
	$setting = get_option( 'uri_ticks_activity_default_min' );
	// output the field
	?>
		<input type="text" class="regular-text" aria-describedby="url-description" name="uri_ticks_activity_default_min" id="uri-ticks-field-min" value="<?php print ( false !== $setting ) ? esc_attr( $setting ) : ''; ?>">
		<p class="url-description"><?php esc_html_e( 'The minimum value for activity (default is 0)', 'uri' ); ?></p>
	<?php
}

/**
 * Max field callback
 * outputs the field
 *
 * @see add_settings_field()
 * @param arr $args The shortcode arguments.
 */
function uri_ticks_activity_defaults_field_max_callback( $args ) {
	// get the value of the setting we've registered with register_setting()
	$setting = get_option( 'uri_ticks_activity_default_max' );
	// output the field
	?>
		<input type="text" class="regular-text" aria-describedby="url-description" name="uri_ticks_activity_default_max" id="uri-ticks-field-max" value="<?php print ( false !== $setting ) ? esc_attr( $setting ) : ''; ?>">
		<p class="url-description"><?php esc_html_e( 'The maximum value for activity (default is 4)', 'uri' ); ?></p>
	<?php
}

/**
 * Add the settings page to the settings menu
 *
 * @see https://developer.wordpress.org/reference/functions/add_options_page/
 */
function uri_ticks_settings_page() {
	add_options_page(
		__( 'URI Ticks Settings', 'uri' ),
		__( 'URI Ticks', 'uri' ),
		'manage_options',
		'uri-ticks',
		'uri_ticks_settings_page_html'
	);
}
add_action( 'admin_menu', 'uri_ticks_settings_page' );

/**
 * Menu callback.
 * renders the HTML on the settings page
 */
function uri_ticks_settings_page_html() {
	// check user capabilities
	if ( ! current_user_can( 'manage_options' ) ) {
		return;
	}

	?>
		<div class="wrap">
			<h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
			<form action="options.php" method="post">
				<?php
					// output security fields for the registered setting "uri_today_headlines"
					settings_fields( 'uri_ticks' );
					// output setting sections and their fields
					// (sections are registered for "uri_today_headlines", each field is registered to a specific section)
					do_settings_sections( 'uri_ticks' );
					// output save settings button
					submit_button( 'Save Settings' );
				?>
			</form>
		</div>
	<?php
}

/**
 * Sanitizes an integer
 *
 * @param str $value is the URL to test.
 * @return mixed: str on success; NULL on failure
 */
function uri_ticks_activity_validate_integer( $value ) {
	$out = filter_var( $value, FILTER_VALIDATE_FLOAT );
	if ( ! empty( $value ) && false === $out ) {
		// returning NULL triggers the WP UI to show that the value is unacceptable.
		return null;
	} else {
		return $out;
	}
}
