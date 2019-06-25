<?php
/**
 * Ring-ring helper functions and definations.
 *
 * @package ring-ring
 */

/**
 * Use front-page.php when Front page displays is set to a static page.
 *
 * @since ring-ring 1.0
 *
 * @param string $template front-page.php.
 *
 * @return string The template to be used: blank if is_home() is true (defaults to index.php), else $template.
 */
function ring_ring_front_page_template( $template ) {
	return is_home() ? '' : $template;
}
add_filter( 'frontpage_template', 'ring_ring_front_page_template' );

/**
 * Adds custom classes to the menu.
 *
 * @param array $classes Classes for a element.
 * @return array
 */
function ring_ring_add_classes_on_link_attributes( $classes ) {
	$classes['class'] = 'nav-link';
	return $classes;
}
add_filter( 'nav_menu_link_attributes', 'ring_ring_add_classes_on_link_attributes' );



if ( ! function_exists( 'ring_ring_get_theme_option' ) ) :

	/**
	 * Get theme option.
	 *
	 * @since 1.0.0
	 *
	 * @param string $key Option key.
	 * @return mixed Option value.
	 */
	function ring_ring_get_theme_option( $key = '' ) {

		$default_options = ring_ring_get_default_theme_options();

		if ( empty( $key ) ) {
			return;
		}

		$theme_options = (array) get_theme_mod( 'ring_ring_theme_options' );
		$theme_options = wp_parse_args( $theme_options, $default_options );

		$value = null;

		if ( isset( $theme_options[ $key ] ) ) {
			$value = $theme_options[ $key ];
		}

		return $value;
	}

endif;
