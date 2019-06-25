<?php
/**
 * Assets section options
 *
 * @package ring-ring
 */

$defaults = ring_ring_get_default_theme_options();
$wp_customize->add_section(
	'ring_ring_footer_copyright_section',
	array(
		'title'       => __( 'Footer Copyright Section' ),
		'description' => esc_html__( 'Footer Copyright section.' ),
		'panel'       => 'ring_ring_footer_panel',
	)
);

// setting footer copyright area.
$wp_customize->add_setting(
	'ring_ring_theme_options[footer_copyright]',
	array(
		'default'           => $defaults['footer_copyright'],
		'transport'         => 'refresh',
		'sanitize_callback' => 'wp_kses_post',
	)
);
$wp_customize->add_control(
	'ring_ring_theme_options[footer_copyright]',
	array(
		'label'   => esc_html__( 'Footer Copyright', 'ring-ring' ),
		'section' => 'ring_ring_footer_copyright_section',
		'type'    => 'textarea',
	)
);
