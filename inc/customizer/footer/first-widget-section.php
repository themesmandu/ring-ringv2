<?php
/**
 * Assets section options
 *
 * @package ring-ring
 */

$defaults = ring_ring_get_default_theme_options();
$wp_customize->add_section(
	'ring_ring_footer_widget_section',
	array(
		'title'       => __( 'Footer Widget Section' ),
		'description' => esc_html__( 'Footer Widget section.' ),
		'panel'       => 'ring_ring_footer_panel',
	)
);

// setting footer widget first area.
$wp_customize->add_setting(
	'ring_ring_theme_options[footer_widget_first]',
	array(
		'default'           => $defaults['footer_widget_first'],
		'transport'         => 'refresh',
		'sanitize_callback' => 'wp_kses_post',
	)
);
$wp_customize->add_control(
	'ring_ring_theme_options[footer_widget_first]',
	array(
		'label'   => esc_html__( 'Footer Widget First Text', 'ring-ring' ),
		'section' => 'ring_ring_footer_widget_section',
		'type'    => 'textarea',
	)
);

// setting footer widget second area.
$wp_customize->add_setting(
	'ring_ring_theme_options[footer_widget_second]',
	array(
		'default'           => $defaults['footer_widget_second'],
		'transport'         => 'refresh',
		'sanitize_callback' => 'wp_kses_post',
	)
);
$wp_customize->add_control(
	'ring_ring_theme_options[footer_widget_second]',
	array(
		'label'   => esc_html__( 'Footer Widget Call Us Text', 'ring-ring' ),
		'section' => 'ring_ring_footer_widget_section',
		'type'    => 'text',
	)
);

// setting footer widget last area.
$wp_customize->add_setting(
	'ring_ring_theme_options[footer_widget_third]',
	array(
		'default'           => $defaults['footer_widget_third'],
		'transport'         => 'refresh',
		'sanitize_callback' => 'wp_kses_post',
	)
);
$wp_customize->add_control(
	'ring_ring_theme_options[footer_widget_third]',
	array(
		'label'   => esc_html__( 'Footer Widget Last Text', 'ring-ring' ),
		'section' => 'ring_ring_footer_widget_section',
		'type'    => 'text',
	)
);
