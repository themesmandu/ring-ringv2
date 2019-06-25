<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Ring_RIng
 */

?>

</div> <!-- #content -->

<footer id="footer">
	<?php
	get_template_part('template-parts/footer/widgets');

	get_template_part('template-parts/footer/site', 'info');


	wp_footer(); ?>
</footer>

</body>

</html>