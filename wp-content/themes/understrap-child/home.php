<?php
/**
 * @package understrap
 */

get_header();
$container = get_theme_mod('understrap_container_type'); ?>


<!--section Home Blog-->
<section class="blog_background_image"
	 style="background-image: url(<?php echo get_theme_mod('blog-back-image'); ?>);
			 background-size: cover; background-repeat: no-repeat; background-position: center;">
	<div class="container">
		<h2 class="blog-name"> <?php echo get_theme_mod('blog-title'); ?> </h2>
	</div>
</section>

<!--Section Posts-->
<section class="<?php echo esc_attr($container); ?>" id="content" tabindex="-1">
	<div class="row">
		<div class="col-lg-8">
			<ul class="post-list">

				<h2 class="title"> <?php the_field('blog_title',get_option('page_for_posts')); ?> </h2>

				<?php while (have_posts()) : the_post();
					if (get_post_format() == 'audio') { ?>
						<li class="audio">
							<?php the_content(); ?>
							<div class="excerpt-text d-flex flex-wrap justify-content-between">
								<?php the_excerpt(); ?>

							<?php
							$archive_year = get_the_time('Y');
							$archive_month = get_the_time('F');
							$archive_day = get_the_time('d');
							?>
							<a href="<?= get_day_link($archive_year, $archive_month, $archive_day); ?>" class="blog-date">
								<time datetime="<?= get_the_date('Y-m-d'); ?>">
									<?= get_the_date('M-j-Y'); ?>
								</time>
							</a>
							</div>
						</li>
					<?php } else
						if (get_post_format() == 'quote') { ?>
							<li>
								<div class="excerpt-text d-flex flex-wrap justify-content-between quote">
									<?php the_excerpt(); ?>
								<?php
								$archive_year = get_the_time('Y');
								$archive_month = get_the_time('F');
								$archive_day = get_the_time('d');
								?>
								<a href="<?= get_day_link($archive_year, $archive_month, $archive_day); ?>" class="blog-date">
									<time datetime="<?= get_the_date('Y-m-d'); ?>">
										<?= get_the_date('M-j-Y'); ?>
									</time>
								</a>
								</div>
							</li>
						<?php } else { ?>
							<li>
								<div class="image-post-title">
									<a href="<?php the_permalink(); ?>">
										<?php the_post_thumbnail(); ?>
									</a>
									<div class="date-header">
										<?php
										$archive_year = get_the_time('Y');
										$archive_month = get_the_time('F');
										$archive_day = get_the_time('d');
										?>
										<a href="<?= get_day_link($archive_year, $archive_month, $archive_day); ?>" class="blog-date">
											<time datetime="<?= get_the_date('Y-m-d'); ?>" >
												<?= get_the_date('M-j-Y'); ?>
											</time>
										</a>
										<h2 class="img-title">
											<a href="<?php the_permalink(); ?>">
												<?php the_title() ?>
											</a>
										</h2>
									</div>
								</div>
								<div class="excerpt-text d-flex flex-wrap justify-content-between">
									<?php the_excerpt(); ?>
								</div>
							</li>
						<?php } ?>
				<?php endwhile; // end of the loop. ?>
			</ul>

			<div class="my-pagination">
				<?php the_posts_pagination(); ?>
			</div>
		</div>


		<aside class="sidebar col-lg-4">
			<?php dynamic_sidebar('right-page-sidebar'); ?>
		</aside>

	</div>

</section>


<?php get_footer(); ?>
