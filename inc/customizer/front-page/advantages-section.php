<?php
/**
 * Advantages section options
 *
 * @package studyabroad
 */

$defaults = ring_ring_get_default_theme_options();
$wp_customize->add_section(
	'ring_ring_advantages_section',
	array(
		'title'       => __( 'Advantages Section' ),
		'description' => esc_html__( 'Front page advantages section.' ),
		'panel'       => 'ring_ring_front_page_panel',
	)
);

// setting advantages heading.
$wp_customize->add_setting(
	'ring_ring_theme_options[advantages_heading]',
	array(
		'default'           => $defaults['advantages_heading'],
		'transport'         => 'refresh',
		'sanitize_callback' => 'wp_kses_post',
	)
);
$wp_customize->add_control(
	'ring_ring_theme_options[advantages_heading]',
	array(
		'label'       => esc_html__( 'Advantages Section Heading', 'ring-ring' ),
		'description' => esc_html__( 'Use <span> tags for the words that needs to appear yellow', 'ring-ring' ),
		'section'     => 'ring_ring_advantages_section',
		'type'        => 'text',
	)
);

// setting advantages description.
$wp_customize->add_setting(
	'ring_ring_theme_options[advantages_description]',
	array(
		'default'           => $defaults['advantages_description'],
		'transport'         => 'refresh',
		'sanitize_callback' => 'wp_kses_post',
	)
);
$wp_customize->add_control(
	'ring_ring_theme_options[advantages_description]',
	array(
		'label'       => esc_html__( 'Advantages Section Description', 'ring-ring' ),
		'description' => esc_html__( 'Use <p> tags for each bullets', 'ring-ring' ),
		'section'     => 'ring_ring_advantages_section',
		'type'        => 'textarea',
	)
);

// setting advantages background image.
$wp_customize->add_setting(
	'ring_ring_theme_options[advantages_background_image]',
	array(
		'default'           => $defaults['advantages_background_image'],
		'transport'         => 'refresh',
		'sanitize_callback' => 'ring_ring_sanitize_file',
	)
);

$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'ring_ring_theme_options[advantages_background_image]',
		array(
			'label'         => __( 'Select Background Image' ),
			'section'       => 'ring_ring_advantages_section',
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
