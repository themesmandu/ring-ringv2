<?php
/**
 * Template Name: About Us Custom Template
 *
 * @package WordPress
 * @subpackage Ring-ring
 * @since ring-ring 1.0
 */

get_header();
?>

<section class="about_section_one">
	<div class="container">
		<h2><?php echo ring_ring_get_theme_option( 'about_promotion_heading' ); ?></h2>
		<div class="content">
			<?php echo wpautop( ring_ring_get_theme_option( 'about_promotion_description' ) ); ?>
		</div>
	</div>
</section>

<section class="section_three about_section_three">
	<div class="container">
		<h2>What other Business <span>Opportunities do we offer</span></h2>

		<div class="row">
			<?php for ( $i = 1; $i <= 4; $i++ ) { ?>
				<div class="col-lg-3 col-sm-6">
					<div class="content">
						<h4><?php echo ring_ring_get_theme_option( 'about_opportunities_heading_card_' . $i ); ?></h4>
						<?php echo wpautop( ring_ring_get_theme_option( 'about_opportunoties_description_card_' . $i ) ); ?>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</section>

<section class="section_five four">
	<div class="container">
		<div class="content">
			<h2><?php echo ring_ring_get_theme_option( 'about_asset_heading' ); ?></h3>
			<?php echo wpautop( ring_ring_get_theme_option( 'about_asset_description' ) ); ?>
				<a href="<?php echo esc_url( ring_ring_get_theme_option( 'about_asset_button_link' ) ); ?>"><?php echo ring_ring_get_theme_option( 'about_asset_button_text' ); ?></a>
		</div>
	</div>
	<figure>
		<img src="<?php echo esc_url( ring_ring_get_theme_option( 'about_asset_image' ) ); ?>">
	</figure>
</section>

<?php
get_footer();
