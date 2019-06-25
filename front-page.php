<?php
/**
 * Front page template file.

 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ring-ring
 */

get_header();
?>

<section class="section_one">
	<style>
	.section_one {
		background-image: url(<?php echo esc_url( ring_ring_get_theme_option( 'promotion_background_image' ) ); ?>);
	}
	</style>
	<div class="container">
		<h2><?php echo ring_ring_get_theme_option( 'promotion_heading' ); ?></h2>
		<div class="content">
			<?php echo wpautop( ring_ring_get_theme_option( 'promotion_description' ) ); ?>
		</div>
	</div>
</section>


<section class="section_two">
<style>
	.section_two figure .image {
		background-image: url(<?php echo esc_url( ring_ring_get_theme_option( 'advantages_background_image' ) ); ?>);
	}
	</style>
	<div class="row">
		<div class="col-lg-5 column-left">
			<figure>
				<div class="image"></div>
			</figure>
		</div>

		<div class="col-lg-7 column-right">
			<div class="content">
				<h2><?php echo ring_ring_get_theme_option( 'advantages_heading' ); ?></h2>
				<div class="content-paragraph">
					<?php echo ring_ring_get_theme_option( 'advantages_description' ); ?>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section_three">
	<div class="container">
		<div class="row">
			<div class="col-lg-5 column-left">
				<h2><?php echo ring_ring_get_theme_option( 'opportunities_heading' ); ?></h2>
				<?php echo wpautop( ring_ring_get_theme_option( 'opportunities_description' ) ); ?>
			</div>

			<div class="col-lg-7 column-right">
				<div class="row">
					<?php for ( $i = 1; $i <= 4; $i++ ) { ?>
					<div class="col-sm-6">
						<div class="content">
							<h4><?php echo ring_ring_get_theme_option( 'opportunities_heading_card_' . $i ); ?></h4>
							<?php echo wpautop( ring_ring_get_theme_option( 'opportunoties_description_card_' . $i ) ); ?>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section_four">
	<div class="container">
		<h3><?php echo ring_ring_get_theme_option( 'blog_heading' ); ?></h3>
		<p class="paragraph"><?php echo ring_ring_get_theme_option( 'blog_description' ); ?></p>
		<div class="row">

			<?php
			// Define our WP Query Parameters.

			$args      = array(
				'post_type'           => 'post',
				'posts_per_page'      => '3',
				'ignore_sticky_posts' => true,
			);
			$the_query = new WP_Query( $args );

			// Start our WP Query.
			while ( $the_query->have_posts() ) :
				$the_query->the_post();
				?>

			<div class="col-lg-4 col-md-6">

				<div class="blog">
					<a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail(); ?>
						<div class="entry-featuredImg-border"></div>
					</a>

					<div class="contents">
						<h2 class="blog-heading">
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</h2>

						<?php the_excerpt(); ?>

						<a href="<?php the_permalink(); ?>" class="read_more">more details <img
								src="<?php echo get_template_directory_uri() . '/assets/images/arrow.png'; ?>"></a>
					</div>
				</div>

			</div>

				<?php
			endwhile;
			wp_reset_postdata();
			?>

		</div>
	</div>
</section>
<section class="section_five">
	<div class="container">
		<div class="content">
			<h2><?php echo ring_ring_get_theme_option( 'asset_heading' ); ?></h3>
			<?php echo wpautop( ring_ring_get_theme_option( 'asset_description' ) ); ?>
				<a href="<?php echo esc_url( ring_ring_get_theme_option( 'asset_button_link' ) ); ?>"><?php echo ring_ring_get_theme_option( 'asset_button_text' ); ?></a>
		</div>
	</div>
	<figure>
		<img src="<?php echo esc_url( ring_ring_get_theme_option( 'asset_image' ) ); ?>">
	</figure>
</section>

<?php
get_footer();
