<?php
/**
 * Promotion section options
 *
 * @package studyabroad
 */

$defaults = ring_ring_get_default_theme_options();
$wp_customize->add_section(
	'ring_ring_promotion_section',
	array(
		'title'       => __( 'Promotion Section' ),
		'description' => esc_html__( 'Front page promotion section.' ),
		'panel'       => 'ring_ring_front_page_panel',
	)
);

// setting promotion heading.
$wp_customize->add_setting(
	'ring_ring_theme_options[promotion_heading]',
	array(
		'default'           => $defaults['promotion_heading'],
		'transport'         => 'refresh',
		'sanitize_callback' => 'wp_kses_post',
	)
);
$wp_customize->add_control(
	'ring_ring_theme_options[promotion_heading]',
	array(
		'label'       => esc_html__( 'Promotion Section Heading', 'ring-ring' ),
		'description' => esc_html__( 'Use <span> tags for the words that needs to appear bold', 'ring-ring' ),
		'section'     => 'ring_ring_promotion_section',
		'type'        => 'text',
	)
);

// setting promotion description.
$wp_customize->add_setting(
	'ring_ring_theme_options[promotion_description]',
	array(
		'default'           => $defaults['promotion_description'],
		'transport'         => 'refresh',
		'sanitize_callback' => 'wp_kses_post',
	)
);
$wp_customize->add_control(
	'ring_ring_theme_options[promotion_description]',
	array(
		'label'   => esc_html__( 'Promotion Section Description', 'ring-ring' ),
		'section' => 'ring_ring_promotion_section',
		'type'    => 'textarea',
	)
);

// setting promotion background image.
$wp_customize->add_setting(
	'ring_ring_theme_options[promotion_background_image]',
	array(
		'default'           => $defaults['promotion_background_image'],
		'transport'         => 'refresh',
		'sanitize_callback' => 'ring_ring_sanitize_file',
	)
);

$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'ring_ring_theme_options[promotion_background_image]',
		array(
			'label'         => __( 'Select Background Image' ),
			'section'       => 'ring_ring_promotion_section',
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
