<?php
/**
 * Opportunities section options
 *
 * @package ring-ring
 */

$defaults = ring_ring_get_default_theme_options();
$wp_customize->add_section(
	'ring_ring_opportunities_section',
	array(
		'title'       => __( 'Opportunities Section' ),
		'description' => esc_html__( 'Front page opportunities section.' ),
		'panel'       => 'ring_ring_front_page_panel',
	)
);

// setting opportunities heading.
$wp_customize->add_setting(
	'ring_ring_theme_options[opportunities_heading]',
	array(
		'default'           => $defaults['opportunities_heading'],
		'transport'         => 'refresh',
		'sanitize_callback' => 'wp_kses_post',
	)
);
$wp_customize->add_control(
	'ring_ring_theme_options[opportunities_heading]',
	array(
		'label'       => esc_html__( 'Opportunities Section Heading', 'ring-ring' ),
		'description' => esc_html__( 'Use <span> tags for the words that needs to appear boldand on next line', 'ring-ring' ),
		'section'     => 'ring_ring_opportunities_section',
		'type'        => 'text',
	)
);

// setting opportunoties description.
$wp_customize->add_setting(
	'ring_ring_theme_options[opportunities_description]',
	array(
		'default'           => $defaults['opportunities_description'],
		'transport'         => 'refresh',
		'sanitize_callback' => 'wp_kses_post',
	)
);
$wp_customize->add_control(
	'ring_ring_theme_options[opportunities_description]',
	array(
		'label'   => esc_html__( 'Opportunities Section Description', 'ring-ring' ),
		'section' => 'ring_ring_opportunities_section',
		'type'    => 'textarea',
	)
);

for ( $i = 1; $i <= 4; $i++ ) {
	// setting opportunities card heading.
	$wp_customize->add_setting(
		'ring_ring_theme_options[opportunities_heading_card_' . $i . ']',
		array(
			'default'           => $defaults[ 'opportunities_heading_card_' . $i ],
			'transport'         => 'refresh',
			'sanitize_callback' => 'wp_kses_post',
		)
	);
	$wp_customize->add_control(
		'ring_ring_theme_options[opportunities_heading_card_' . $i . ']',
		array(
			'label'   => sprintf( esc_html__( 'Opportunities Section Card %d Heading', 'ring-ring' ), $i ),
			'section' => 'ring_ring_opportunities_section',
			'type'    => 'text',
		)
	);

	// setting opportunoties card description.
	$wp_customize->add_setting(
		'ring_ring_theme_options[opportunoties_description_card_' . $i . ']',
		array(
			'default'           => $defaults[ 'opportunoties_description_card_' . $i ],
			'transport'         => 'refresh',
			'sanitize_callback' => 'wp_kses_post',
		)
	);
	$wp_customize->add_control(
		'ring_ring_theme_options[opportunoties_description_card_' . $i . ']',
		array(
			'label'   => sprintf( esc_html__( 'Opportunities Section Card %d Description', 'ring-ring' ), $i ),
			'section' => 'ring_ring_opportunities_section',
			'type'    => 'textarea',
		)
	);}
