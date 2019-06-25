<?php
/**
 * About page opportunities section options
 *
 * @package ring-ring
 */

$defaults = ring_ring_get_default_theme_options();
$wp_customize->add_section(
	'ring_ring_about_opportunities_section',
	array(
		'title'       => __( 'About Page Opportunities Section' ),
		'description' => esc_html__( 'About page opportunities section.' ),
		'panel'       => 'ring_ring_about_page_panel',
	)
);

// setting about page opportunities heading.
$wp_customize->add_setting(
	'ring_ring_theme_options[about_opportunities_heading]',
	array(
		'default'           => $defaults['about_opportunities_heading'],
		'transport'         => 'refresh',
		'sanitize_callback' => 'wp_kses_post',
	)
);
$wp_customize->add_control(
	'ring_ring_theme_options[about_opportunities_heading]',
	array(
		'label'       => esc_html__( 'About Page Opportunities Section Heading', 'ring-ring' ),
		'description' => esc_html__( 'Use <span> tags for the words that needs to appear boldand on next line', 'ring-ring' ),
		'section'     => 'ring_ring_about_opportunities_section',
		'type'        => 'text',
	)
);

// setting about page opportunoties description.
$wp_customize->add_setting(
	'ring_ring_theme_options[about_opportunities_description]',
	array(
		'default'           => $defaults['about_opportunities_description'],
		'transport'         => 'refresh',
		'sanitize_callback' => 'wp_kses_post',
	)
);
$wp_customize->add_control(
	'ring_ring_theme_options[about_opportunities_description]',
	array(
		'label'   => esc_html__( 'About Page Opportunities Section Description', 'ring-ring' ),
		'section' => 'ring_ring_about_opportunities_section',
		'type'    => 'textarea',
	)
);

for ( $i = 1; $i <= 4; $i++ ) {
	// setting about page opportunities card heading.
	$wp_customize->add_setting(
		'ring_ring_theme_options[about_opportunities_heading_card_' . $i . ']',
		array(
			'default'           => $defaults[ 'about_opportunities_heading_card_' . $i ],
			'transport'         => 'refresh',
			'sanitize_callback' => 'wp_kses_post',
		)
	);
	$wp_customize->add_control(
		'ring_ring_theme_options[about_opportunities_heading_card_' . $i . ']',
		array(
			'label'   => sprintf( esc_html__( 'About Page Opportunities Section Card %d Heading', 'ring-ring' ), $i ),
			'section' => 'ring_ring_about_opportunities_section',
			'type'    => 'text',
		)
	);

	// setting about page opportunoties card description.
	$wp_customize->add_setting(
		'ring_ring_theme_options[about_opportunoties_description_card_' . $i . ']',
		array(
			'default'           => $defaults[ 'about_opportunoties_description_card_' . $i ],
			'transport'         => 'refresh',
			'sanitize_callback' => 'wp_kses_post',
		)
	);
	$wp_customize->add_control(
		'ring_ring_theme_options[about_opportunoties_description_card_' . $i . ']',
		array(
			'label'   => sprintf( esc_html__( 'About Page Opportunities Section Card %d Description', 'ring-ring' ), $i ),
			'section' => 'ring_ring_about_opportunities_section',
			'type'    => 'textarea',
		)
	);}
