<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<footer class="site-footer footer" id="colophon">
	<div class="<?php echo esc_attr( $container ); ?> d-flex flex-wrap justify-content-between footer-nav">
		<div class="col-12 col-md-6 col-lg-5 chimp pb-5">
			<?php dynamic_sidebar ('left-footer-sidebar');?>
		</div>
		<ul class="row flex-wrap col-12 col-md-6 col-lg-7">
			<?php if( get_theme_mod('menu-title') ): ?>
				<li class="col-6 col-sm-4 col-md-6 col-lg-4 pb-5">
					<h2 class="footer-title"> 
						<?= get_theme_mod( 'menu-title' ) ?>
					</h2>
					<nav class="navbar navbar-expand-md navbar-dark">
						<?php wp_nav_menu(
							array(
								'theme_location'  => 'primary',
								'container_class' => 'd-flex',
								'container_id'    => 'navbar-main',
								'menu_class'      => 'column justify-content-between',
								'fallback_cb'     => '',
								'menu_id'         => 'main-menu',
								'walker'          => new understrap_WP_Bootstrap_Navwalker(),
							)
							); ?>
						</nav>
					</li>
				<?php endif; ?>
				<?php if( get_theme_mod('menu-title-2') ): ?>
					<li class="col-6 col-sm-4 col-md-6 col-lg-4 pb-5">
						<h2 class="footer-title"> 
							<?= get_theme_mod( 'menu-title-2' ) ?>
						</h2>
						<nav class="navbar navbar-expand-md navbar-dark">
							<?php wp_nav_menu(
								array(
									'theme_location'  => 'taxonomy-menu',
									'container_class' => 'd-flex',
									'container_id'    => 'nav-tax-main',
									'menu_class'      => 'column justify-content-between',
									'fallback_cb'     => '',
									'menu_id'         => 'taxonomy-menu',
									'walker'          => new understrap_WP_Bootstrap_Navwalker(),
								)
								); ?>
							</nav>
						</li>
					<?php endif; ?>
					<?php if( get_theme_mod('menu-title-3') ): ?>
						<li class="col-12 col-sm-4 col-md-6 col-lg-4 pb-5">
							<h2 class="footer-title"> 
								<?= get_theme_mod( 'menu-title-3' ) ?>
							</h2>
							<nav class="navbar navbar-expand-md navbar-dark">
								<?php wp_nav_menu(
									array(
										'theme_location'  => 'social-links-menu',
										'container_class' => 'd-flex',
										'container_id'    => 'nav-social-main',
										'menu_class'      => 'column justify-content-between',
										'fallback_cb'     => '',
										'menu_id'         => 'social-menu',
										'walker'          => new understrap_WP_Bootstrap_Navwalker(),
									)
									); ?>
								</nav>
							</li>
						<?php endif; ?>
					</ul>
				</div>

				<?php if( get_theme_mod('copyright') ): ?>
					<div class="site-info container">
						<span> <?= get_theme_mod( 'copyright' ) ?> </span>
						<span> &copy; </span>
						<time datetime="<?php echo date('Y');?>"> <?php echo date('Y');?> </time>
						<span> <?= get_theme_mod( 'theme-name' ) ?> </span>
					</div>
				<?php endif; ?>
			</footer>


			<?php wp_footer(); ?>

