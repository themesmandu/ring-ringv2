<?php
/**
 * About page promotion section options
 *
 * @package studyabroad
 */

$defaults = ring_ring_get_default_theme_options();
$wp_customize->add_section(
	'ring_ring_about_promotion_section',
	array(
		'title'       => __( 'About Page Promotion Section' ),
		'description' => esc_html__( 'About page promotion section.' ),
		'panel'       => 'ring_ring_about_page_panel',
	)
);

// setting about page promotion heading.
$wp_customize->add_setting(
	'ring_ring_theme_options[about_promotion_heading]',
	array(
		'default'           => $defaults['about_promotion_heading'],
		'transport'         => 'refresh',
		'sanitize_callback' => 'wp_kses_post',
	)
);
$wp_customize->add_control(
	'ring_ring_theme_options[about_promotion_heading]',
	array(
		'label'       => esc_html__( 'About Page Promotion Section Heading', 'ring-ring' ),
		'description' => esc_html__( 'Use <span> tags for the words that needs to appear bold', 'ring-ring' ),
		'section'     => 'ring_ring_about_promotion_section',
		'type'        => 'text',
	)
);

// setting about page promotion description.
$wp_customize->add_setting(
	'ring_ring_theme_options[about_promotion_description]',
	array(
		'default'           => $defaults['about_promotion_description'],
		'transport'         => 'refresh',
		'sanitize_callback' => 'wp_kses_post',
	)
);
$wp_customize->add_control(
	'ring_ring_theme_options[about_promotion_description]',
	array(
		'label'   => esc_html__( 'About Page Promotion Section Description', 'ring-ring' ),
		'section' => 'ring_ring_about_promotion_section',
		'type'    => 'textarea',
	)
);

