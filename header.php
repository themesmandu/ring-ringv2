<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Ring_RIng
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php if (is_front_page()) { ?>
		<header class="site-header">
		<?php } else { ?>
			<header class="site-header other-page-header">
			<?php } ?>
			<nav class="navbar navbar-expand-lg top-navigation">
				<div class="container">
					<div class="site-branding">
						<?php
						if (has_custom_logo()) :
							the_custom_logo();
						else :
							the_custom_logo();
							?>

							<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
									<?php
									$ring_ring_site_title       = get_bloginfo('name');
									$ring_ring_site_title_split = explode(' ', $ring_ring_site_title);
									$count                      = count($ring_ring_site_title_split);
									for ($i = 0; $i < $count; $i++) {
										if (($count - 1) == $i) {
											echo '<span>' . $ring_ring_site_title_split[$i] . '</span>';
										} else {
											echo $ring_ring_site_title_split[$i] . ' ';
										}
									}
									?>
								</a></p>

						<?php
					endif;
					$ring_ring_description = get_bloginfo('description', 'display');
					if ($ring_ring_description || is_customize_preview()) :
						?>
							<p class="site-description">
								<span><?php echo $ring_ring_description; /* WPCS: xss ok. */ ?></span></p>
						<?php endif; ?>
					</div><!-- .site-branding -->

					<button id="menu" class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmenus">
						<span></span>
						<span></span>
						<span></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarmenus">
						<?php
						if(has_nav_menu('menu-1')) :
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
								'menu_class'     => 'navbar-nav',
							)
						);
						endif;
						?>
					</div>
				</div><!-- .container -->
			</nav><!-- #site-navigation -->

			<?php if (is_front_page()) { ?>
				<!-- slider background -->
				<div id="header-gradient">
					<div class="header-content">
						<div class="container">
							<h2><?php echo ring_ring_get_theme_option('slider_heading'); ?></h2>
							<?php echo wpautop(ring_ring_get_theme_option('slider_description')); ?>
							<a href="<?php echo esc_url(ring_ring_get_theme_option('slider_button_link_1')); ?>"><?php echo ring_ring_get_theme_option('slider_button_text_1'); ?></a>
							<a href="<?php echo esc_url(ring_ring_get_theme_option('slider_button_link_2')); ?>" class="enquiry"><?php echo ring_ring_get_theme_option('slider_button_text_2'); ?></a>
						</div>
					</div>
				</div>
			<?php } else { ?>
				<style>
					header.site-header {
						background-image: url(<?php
												header_image();
												?>);
						min-height: 122px;
					}
				</style>

				<?php if (is_404()) : ?>
					<div class="page-header-content">
						<h1>Page <span>Not Found</span></h1>
					</div>
				<?php endif; ?>

				<?php if (is_archive()) : ?>
					<div class="page-header-content">
						<?php the_archive_title('<h1 class="page-title">', '</h1>'); ?>
					</div>
				<?php endif; ?>

				<?php if (is_search()) : ?>
					<div class="page-header-content">
						<h1><?php printf(esc_html__('Search Results for: %s', 'ring-ring'), '<span>' . get_search_query() . '</span>'); ?></h1>
					</div>
				<?php endif; ?>

				<?php if (is_page() && !is_front_page()) : ?>
					<div class="page-header-content">
						<h1 class="page-title">
							<?php
							$ring_ring_page_title       = get_the_title();
							$ring_ring_page_title_split = explode(' ', $ring_ring_page_title);
							$count                      = count($ring_ring_page_title_split);
							for ($i = 0; $i < $count; $i++) {
								if (($count - 1) == $i) {
									echo '<span>' . $ring_ring_page_title_split[$i] . '</span>';
								} else {
									echo $ring_ring_page_title_split[$i] . ' ';
								}
							}
							?>
						</h1>
					</div>
				<?php
			endif;

			if (have_posts()) :

				if (is_home() && !is_front_page()) :
					?>
						<div class="page-header-content">
							<h1 class="page-title">Our <span>blogs</span></h1>
						</div>
					<?php
				endif;
			endif;

			if (have_posts()) :

				if (!is_front_page() && is_single() && !is_archive()) :
					?>
						<div class="page-header-content">
							<h1 class="page-title">Single <span>Blog</span></h1>
						</div>
					<?php
				endif;
			endif;
		}
		?>


		</header><!-- #masthead -->

		<div id="content" class="site-content">