<?php get_header();
$container   = get_theme_mod( 'understrap_container_type' );?>

<div class="<?php echo esc_attr( $container ); ?>">
	<div class="row">
		<div class="col-md-7 col-lg-8">
		<?php
			$query = new WP_Query( array('post_type' => array( 'projects' )) );
			if ( $query->have_posts() ) { ?>
		<ul class="d-flex flex-wrap ">
			<?php
			while ( $query->have_posts() ) {
			$query->the_post();
			?>
							<li class="portfolio-item col-12 col-lg-6 pb-4">
								<div class="img-border">
									<a href="<?= get_permalink();?>">
										<?php the_post_thumbnail(); ?>
									</a>
								</div>
							</li>

				<?php
			}
			?>

		</ul>
				<?php
			}
			wp_reset_query();
			wp_reset_postdata();
			?>
		</div>

		<aside class="sidebar col-md-5 col-lg-4">
			<?php dynamic_sidebar('right-page-sidebar'); ?>
		</aside>
</div>
</div>


<?php get_footer();?>

