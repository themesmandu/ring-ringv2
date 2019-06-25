<?php
/**
 * Blog section options
 *
 * @package ring-ring
 */

$defaults = ring_ring_get_default_theme_options();
$wp_customize->add_section(
	'ring_ring_blog_section',
	array(
		'title'       => __( 'Blog Section' ),
		'description' => esc_html__( 'Front page blog section.' ),
		'panel'       => 'ring_ring_front_page_panel',
	)
);

// setting blog heading.
$wp_customize->add_setting(
	'ring_ring_theme_options[blog_heading]',
	array(
		'default'           => $defaults['blog_heading'],
		'transport'         => 'refresh',
		'sanitize_callback' => 'wp_kses_post',
	)
);
$wp_customize->add_control(
	'ring_ring_theme_options[blog_heading]',
	array(
		'label'       => esc_html__( 'Blog Section Heading', 'ring-ring' ),
		'description' => esc_html__( 'Use <span> tags for the words that needs to appear bold and on next line', 'ring-ring' ),
		'section'     => 'ring_ring_blog_section',
		'type'        => 'text',
	)
);

// setting blog description.
$wp_customize->add_setting(
	'ring_ring_theme_options[blog_description]',
	array(
		'default'           => $defaults['blog_description'],
		'transport'         => 'refresh',
		'sanitize_callback' => 'wp_kses_post',
	)
);
$wp_customize->add_control(
	'ring_ring_theme_options[blog_description]',
	array(
		'label'   => esc_html__( 'Blog Section Description', 'ring-ring' ),
		'section' => 'ring_ring_blog_section',
		'type'    => 'textarea',
	)
);
