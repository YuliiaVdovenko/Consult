<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );?>

	<!--section Blog/Single post-->
<section class="blog_background_image"
		 style="background-image: url(<?php echo get_theme_mod('blog-back-image'); ?>);
				 background-size: cover; background-repeat: no-repeat; background-position: center;">
	<div class="container">
		<h2 class="blog-name"> <?php echo get_theme_mod('blog-title-post'); ?> </h2>
	</div>
</section>

	<!--Main Post-->
	<section class="<?php echo esc_attr( $container ); ?>">
		<div class="row">
			<div class="col-lg-8">
				<main class="main">
					<h2 class="title"> <?php the_field('blog_title_post',get_option('page_for_posts')); ?> </h2>
				<?php while ( have_posts() ) : the_post();?>
					<div class="image-post-title">
							<?php the_post_thumbnail();
						$archive_year = get_the_time('Y');
						$archive_month = get_the_time('F');
						$archive_day = get_the_time('d');
						?>
						<div class="date-header">
							<a href="<?= get_day_link($archive_year, $archive_month, $archive_day); ?>" class="blog-date">
								<time datetime="<?= get_the_date('Y-m-d'); ?>" >
									<?= get_the_date('M-j-Y'); ?>
								</time>
							</a>
							<h2 class="img-title">
									<?php the_title() ?>
							</h2>
						</div>
					</div>
					<div class="single-content">
						<?php the_content();?>
					</div>
				<?php endwhile; // end of the loop. ?>
				</main>
				<ul class="row flex-wrap">
					<?php
					$args = array(
						'numberposts' => 3,
						'offset' => 0,
						'category' => 0,
						'orderby' => 'post_date',
						'order' => 'DESC',
						'include' => '',
						'exclude' => '',
						'meta_key' => '',
						'meta_value' => '',
						'post_type' => 'post',
						'post_status' => 'publish',
						'post__not_in' => array(get_the_ID()),
						'suppress_filters' => true
					);
					$recent_posts = wp_get_recent_posts($args);
					?>


					<?php foreach ($recent_posts as $recent_post) { ?>
					<li class="col-12 col-lg-4 recent">

						<a href="<?php the_permalink($recent_post['ID']); ?>">
							<?php echo get_the_post_thumbnail($recent_post['ID']); ?>
						</a>
						<?php
						$archive_year  = get_the_time('Y');
						$archive_month = get_the_time('F');
						$archive_day   = get_the_time('d');
						?>
						<a href="<?= get_day_link($archive_year, $archive_month, $archive_day); ?>" >
							<time datetime="<?php echo date('Y-m-d', strtotime($recent_post['post_date']));?>" >
								<?php echo date('d-M-Y', strtotime($recent_post['post_date']));?>
							</time>
						</a>
						<h4>
							<a href="<?= get_permalink($recent_post["ID"]) ?>" class="blog-title">
								<?= $recent_post['post_title']; ?>
							</a>
						</h4>
						<?php } ?>
					</li>
				</ul>
				<div class="comments-list">
					<?php
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
					?>
				</div>
			</div>

			<aside class="sidebar col-lg-4">
                <?php dynamic_sidebar('right-page-sidebar'); ?>
			</aside>

		</div>

	</section>



<?php get_footer(); ?>
