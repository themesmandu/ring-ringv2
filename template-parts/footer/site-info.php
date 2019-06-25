<?php
/**
 * Footer copyright
 *
 * @package ring-ring
 */

?>

<div class="last-footer">
	<?php
	/* translators: %s: ring-ring. */
	$powered_by_text = ring_ring_get_theme_option( 'footer_copyright' );
	?>
	<?php if ( ! empty( $copyright_text ) || ! empty( $powered_by_text ) ) : ?>
		<div class="container">
				<?php if ( ! empty( $copyright_text ) ) : ?>
					<div class="copyright">
						<?php echo wp_kses_post( wpautop( $copyright_text ) ); ?>
					</div><!-- .copyright -->
				<?php endif; ?>

				<?php if ( ! empty( $powered_by_text ) ) : ?>
					<div class="site-info">
						<?php echo wp_kses_post( wpautop( $powered_by_text ) ); ?>
					</div><!-- .site-info -->
				<?php endif; ?>
		</div><!-- .colophon-bottom -->
	<?php endif; ?>
</div><!-- #colophon -->
