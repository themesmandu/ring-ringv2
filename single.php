<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Ring_RIng
 */

get_header();
?>
<div class="container">
	<div class="single-wrap">
		<div class="row">
			<main id="main" class="col-lg-8">

				<?php
				while (have_posts()) :
					the_post();

					get_template_part('template-parts/content', get_post_type());

					the_post_navigation(
						array(
							'prev_text'    => __('Previous Post: %title'),
							'next_text'    => __('Next Post: %title'),
							'in_same_term' => true,
						)
					);
					// If comments are open or we have at least one comment, load up the comment template.
					if (comments_open() || get_comments_number()) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>

			</main><!-- #main -->

			<?php
			get_sidebar();
			?>
		</div><!-- .row -->
	</div><!-- .single-wrap -->
</div><!-- .container -->
<?php
get_footer();
