<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Ring_RIng
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<figure>
			<?php
			ring_ring_post_thumbnail();
			?>
			<div class="entry-meta">
				<?php
				ring_ring_posted_on();
				ring_ring_posted_by();
				?>
			</div>
		</figure>
	</header><!-- .entry-header -->

	<?php
	if (is_singular()) :
		?>
		<div class="entry-content">
			<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
			<?php
			the_content('');
		else :
			?>
			<div class="entry-content">
				<?php
				the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');

				the_content('');
				?>

				<a class="more_link" href="<?php esc_url(the_permalink()); ?>"><?php echo esc_html__('Continue reading'); ?></a>
			<?php
		endif;
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__('Pages:', 'ring-ring'),
				'after'  => '</div>',
			)
		);
		?>
		</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->