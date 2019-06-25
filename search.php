<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Ring_RIng
 */

get_header();
?>

<div class="container">
	<div class="page-wrap">
		<div class="row">
			<main id="main" class="col-lg-8">

				<?php if (have_posts()) : ?>

					<?php
					/* Start the Loop */
					while (have_posts()) :
						the_post();

						/**
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
						 */
						get_template_part('template-parts/content', 'search');

					endwhile;

					the_posts_pagination(
						array(
							'mid_size'  => 3,
							'prev_text' => '<span class="previous">' . __('Prev', 'studyabroad'),
							'next_text' => '<span class="next">' . __('Next', 'studyabroad'),
						)
					);
				else :

					get_template_part('template-parts/content', 'none');

				endif;
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
