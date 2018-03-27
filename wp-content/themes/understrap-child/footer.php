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
			<ul class="<?php echo esc_attr( $container ); ?> d-flex flex-wrap justify-content-between footer-nav" id="content" tabindex="-1">
				<li class="col-12 col-md-6 chimp">
                    <?php dynamic_sidebar ('left-footer-sidebar');?>
				</li>
				<li class="col-12 col-md-2">
					<h2 class="footer-title"> Navigation </h2>
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
				<li class="col-12 col-md-2">
					<h2 class="footer-title"> Industry </h2>
					<ul class="d-flex flex-column">
						<?php $terms = get_terms( 'portfolio' );
						if( $terms && ! is_wp_error($terms) ){
							foreach( $terms as $term ){ ?>
								<li>
									<a href="<?php the_permalink(); ?>" class="tel">
										<?= $term->name; ?>
									</a>
								</li>
								<?php
							}
						}
						?>
					</ul>
				</li>
				<li class="col-12 col-md-2">
					<h2 class="footer-title"> Follow us </h2>
					<ul class="d-flex flex-column footer-contact-list">
						<li>
							<a href="<?php echo get_theme_mod('fb_link'); ?>" class="tel">
								Facebook </a>
						</li>
						<li>
							<a href="<?php echo get_theme_mod('tw_link'); ?>" class="tel">
								Twitter </a>
						</li>
						<li>
							<a href="<?php echo get_theme_mod('insta_link'); ?>" class="tel">
								Instagram</a>
						</li>
						<li>
							<a href="<?php echo get_theme_mod('in_link'); ?>" class="tel">
								Linkedin </a>
						</li>
						<li>
							<a href="tel:<?php echo get_theme_mod('google_link'); ?>" class="tel">
								Google+ </a>
						</li>
					</ul>
				</li>
			</ul>

		<div class="site-info container">
			<span> Copyright </span>
				<span> &copy; </span>
				<time datetime="<?php echo date('Y');?>"> <?php echo date('Y');?> </time>
				<span> Consultplus theme. </span>
			</div>
	</footer>


<?php wp_footer(); ?>

