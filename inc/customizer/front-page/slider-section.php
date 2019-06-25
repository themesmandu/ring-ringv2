<?php
/**
 * Slider section options
 *
 * @package ring-ring
 */

$defaults = ring_ring_get_default_theme_options();
$wp_customize->add_section(
	'ring_ring_slider_section',
	array(
		'title'       => __( 'Slider Section' ),
		'description' => esc_html__( 'Front page slider section.' ),
		'panel'       => 'ring_ring_front_page_panel',
	)
);

// setting slider heading.
$wp_customize->add_setting(
	'ring_ring_theme_options[slider_heading]',
	array(
		'default'           => $defaults['slider_heading'],
		'transport'         => 'refresh',
		'sanitize_callback' => 'wp_kses_post',
	)
);
$wp_customize->add_control(
	'ring_ring_theme_options[slider_heading]',
	array(
		'label'       => esc_html__( 'Slider Section Heading', 'ring-ring' ),
		'description' => esc_html__( 'Use <span> tags for the words that needs to appear yellow', 'ring-ring' ),
		'section'     => 'ring_ring_slider_section',
		'type'        => 'text',
	)
);

// setting slider description.
$wp_customize->add_setting(
	'ring_ring_theme_options[slider_description]',
	array(
		'default'           => $defaults['slider_description'],
		'transport'         => 'refresh',
		'sanitize_callback' => 'wp_kses_post',
	)
);
$wp_customize->add_control(
	'ring_ring_theme_options[slider_description]',
	array(
		'label'   => esc_html__( 'Slider Section Description', 'ring-ring' ),
		'section' => 'ring_ring_slider_section',
		'type'    => 'textarea',
	)
);



for ( $i = 1; $i <= 2; $i++ ) {
	// setting slider buttion text.
	$wp_customize->add_setting(
		'ring_ring_theme_options[slider_button_text_' . $i . ']',
		array(
			'default'           => $defaults[ 'slider_button_text_' . $i . '' ],
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'ring_ring_theme_options[slider_button_text_' . $i . ']',
		array(
			'label'   => sprintf( esc_html__( 'Slider Section Button %d Text', 'ring-ring' ), $i ),
			'section' => 'ring_ring_slider_section',
			'type'    => 'text',
		)
	);

	// setting slider buttion link.
	$wp_customize->add_setting(
		'ring_ring_theme_options[slider_button_link_' . $i . ']',
		array(
			'default'           => $defaults[ 'slider_button_link_' . $i . '' ],
			'transport'         => 'refresh',
			'sanitize_callback' => 'esc_url_raw',
		)
	);
	$wp_customize->add_control(
		'ring_ring_theme_options[slider_button_link_' . $i . ']',
		array(
			'label'   => sprintf( esc_html__( 'Slider Section Button %d Link', 'ring-ring' ), $i ),
			'section' => 'ring_ring_slider_section',
			'type'    => 'url',
		)
	);
}

for ( $i = 1; $i <= 4; $i++ ) {
	// setting slider image.
	$wp_customize->add_setting(
		'ring_ring_theme_options[slider_image_' . $i . ']',
		array(
			'default'           => $defaults[ 'slider_image_' . $i ],
			'transport'         => 'refresh',
			'sanitize_callback' => 'ring_ring_sanitize_file',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'ring_ring_theme_options[slider_image_' . $i . ']',
			array(
				'label'         => sprintf( __( 'Select Slider Image %d' ), $i ),
				'description'   => esc_html__( 'Prefered Image Size 1920 X 735' ),
				'section'       => 'ring_ring_slider_section',
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
}




