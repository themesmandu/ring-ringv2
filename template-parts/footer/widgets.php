<?php
/**
 * Footer widgets
 *
 * @package ring-ring
 */


?>
<div class="top-footer">
	<div class="container">
		<div id="footer-widgets" class="row">
			<div class="column column-first">
				<div class="paragraph">
					<p><?php echo wp_kses_post(ring_ring_get_theme_option('footer_widget_first')); ?></p>
					<p class="second"><?php echo wp_kses_post(ring_ring_get_theme_option('footer_widget_second')); ?></p>
					<p class="third"><?php echo wp_kses_post(ring_ring_get_theme_option('footer_widget_third')); ?></p>
				</div>
				<?php dynamic_sidebar('footer-1'); ?>
			</div>

			<div class="column column-last">
				<?php dynamic_sidebar('footer-2'); ?>
			</div>

			<div class="column column-last">
				<?php dynamic_sidebar('footer-3'); ?>
			</div>
			
			<div class="column column-last">
				<?php dynamic_sidebar('footer-4'); ?>
			</div>
		</div><!-- #footer-widgets -->
	</div>
</div>