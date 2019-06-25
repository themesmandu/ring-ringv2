<?php
/**
 * Ring RIng Theme Customizer
 *
 * @package Ring_RIng
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function ring_ring_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'ring_ring_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'ring_ring_customize_partial_blogdescription',
			)
		);
	}

		// Add panel for front page theme options.
		$wp_customize->add_panel(
			'ring_ring_front_page_panel',
			array(
				'title'       => esc_html__( 'Theme Front Page Settings', 'ring-ring' ),
				'description' => esc_html__( 'Front Page Theme Options.', 'ring-ring' ),
				'priority'    => 140,
			)
		);
		// load slider section option.
		require get_template_directory() . '/inc/customizer/front-page/slider-section.php';

		// load promotion section option.
		require get_template_directory() . '/inc/customizer/front-page/promotion-section.php';

		// load advantages section option.
		require get_template_directory() . '/inc/customizer/front-page/advantages-section.php';

		// load opportunities section option.
		require get_template_directory() . '/inc/customizer/front-page/opportunities-section.php';

		// load blog section option.
		require get_template_directory() . '/inc/customizer/front-page/blog-section.php';

		// load assets section option.
		require get_template_directory() . '/inc/customizer/front-page/assets-section.php';

		// Add panel for footer theme options.
		$wp_customize->add_panel(
			'ring_ring_footer_panel',
			array(
				'title'       => esc_html__( 'Theme Footer Settings', 'ring-ring' ),
				'description' => esc_html__( 'Footer Theme Options.', 'ring-ring' ),
				'priority'    => 140,
			)
		);
		// load footer first widget section option.
		require get_template_directory() . '/inc/customizer/footer/first-widget-section.php';

		// load footer copyright section option.
		require get_template_directory() . '/inc/customizer/footer/copyright.php';

		// Add panel for about page theme options.
		$wp_customize->add_panel(
			'ring_ring_about_page_panel',
			array(
				'title'       => esc_html__( 'Theme About Page Settings', 'ring-ring' ),
				'description' => esc_html__( 'About page Theme Options.', 'ring-ring' ),
				'priority'    => 140,
			)
		);
		// load about page promotion section option.
		require get_template_directory() . '/inc/customizer/about-us/about-promotion-section.php';

		// load about page opportunities section option.
		require get_template_directory() . '/inc/customizer/about-us/about-opportunities-section.php';

		// load about page assets section option.
		require get_template_directory() . '/inc/customizer/about-us/about-assets-section.php';


}
add_action( 'customize_register', 'ring_ring_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function ring_ring_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function ring_ring_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function ring_ring_customize_preview_js() {
	wp_enqueue_script( 'ring-ring-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'ring_ring_customize_preview_js' );


// load sanitize functions.
require get_template_directory() . '/inc/customizer/sanitize.php';
