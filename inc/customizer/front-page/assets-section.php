<?php
/**
 * Assets section options
 *
 * @package ring-ring
 */

$defaults = ring_ring_get_default_theme_options();
$wp_customize->add_section(
	'ring_ring_assets_section',
	array(
		'title'       => __( 'Assets Section' ),
		'description' => esc_html__( 'Front page assets section.' ),
		'panel'       => 'ring_ring_front_page_panel',
	)
);

// setting asset heading.
$wp_customize->add_setting(
	'ring_ring_theme_options[asset_heading]',
	array(
		'default'           => $defaults['asset_heading'],
		'transport'         => 'refresh',
		'sanitize_callback' => 'wp_kses_post',
	)
);
$wp_customize->add_control(
	'ring_ring_theme_options[asset_heading]',
	array(
		'label'       => esc_html__( 'Asset Section Heading', 'ring-ring' ),
		'description' => esc_html__( 'Use <span> tags for the words that needs to appear bold and on next line', 'ring-ring' ),
		'section'     => 'ring_ring_assets_section',
		'type'        => 'text',
	)
);

// setting asset description.
$wp_customize->add_setting(
	'ring_ring_theme_options[asset_description]',
	array(
		'default'           => $defaults['asset_description'],
		'transport'         => 'refresh',
		'sanitize_callback' => 'wp_kses_post',
	)
);
$wp_customize->add_control(
	'ring_ring_theme_options[asset_description]',
	array(
		'label'   => esc_html__( 'Asset Section Description', 'ring-ring' ),
		'section' => 'ring_ring_assets_section',
		'type'    => 'textarea',
	)
);

// setting asset buttion text.
$wp_customize->add_setting(
	'ring_ring_theme_options[asset_button_text]',
	array(
		'default'           => $defaults['asset_button_text'],
		'transport'         => 'refresh',
		'sanitize_callback' => 'wp_kses_post',
	)
);
$wp_customize->add_control(
	'ring_ring_theme_options[asset_button_text]',
	array(
		'label'   => esc_html__( 'Asset Section Button Text', 'ring-ring' ),
		'section' => 'ring_ring_assets_section',
		'type'    => 'text',
	)
);

// setting asset buttion link.
$wp_customize->add_setting(
	'ring_ring_theme_options[asset_button_link]',
	array(
		'default'           => $defaults['asset_button_link'],
		'transport'         => 'refresh',
		'sanitize_callback' => 'esc_url_raw',
	)
);
$wp_customize->add_control(
	'ring_ring_theme_options[asset_button_link]',
	array(
		'label'   => esc_html__( 'Asset Section Button Link', 'ring-ring' ),
		'section' => 'ring_ring_assets_section',
		'type'    => 'url',
	)
);

// setting asset image.
$wp_customize->add_setting(
	'ring_ring_theme_options[asset_image]',
	array(
		'default'           => $defaults['asset_image'],
		'transport'         => 'refresh',
		'sanitize_callback' => 'ring_ring_sanitize_file',
	)
);

$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'ring_ring_theme_options[asset_image]',
		array(
			'label'         => __( 'Select Asset Image' ),
			'description'   => esc_html__( 'Prefered Image With White Background' ),
			'section'       => 'ring_ring_assets_section',
			'button_labels' => array( // Optional.
				'select'       => __( 'Select Image' ),
				'change'       => __( 'Change Image' ),
				'remove'       => __( 'Remove' ),
				'default'      => __( 'Default' ),
				'placeholder'  => __( 'No image selected' ),
				'frame_title'  => __( 'Select Image' ),
				'frame_button' => __( 'Choose Image' ),
			),
		)
	)
);


