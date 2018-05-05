<?php
$container = get_theme_mod('understrap_container_type'); ?>

<section class="blog-section"
style="background-image: url(<?= get_sub_field('blog_image')?>);">
<div class="<?php echo esc_attr( $container ); ?> padding-section">
	<div class="col-12 col-lg-6 d-flex flex-wrap justify-content-between align-items-center featured-post pl-0">
		<?php if( get_sub_field('blog_title') ): ?>
			<h2 class="section-title mr-3 mb-5 mb-sm-0"> 
				<?= get_sub_field('blog_title'); ?>
				<span class="section-subtitle">
					<?= get_sub_field('blog_subtitle'); ?>
				</span>
			</h2>
		<?php endif; ?>
		<div class="d-flex flex-wrap">
			<a href="<?=get_permalink(get_option('page_for_posts'));?>" class="blog-check-1 blog-check mt-3 mb-3 mr-3 m-sm-3">
				<?php echo get_sub_field('blog_link1') ?>
			</a>

			<a href="<?=get_permalink(get_option('page_for_posts'));?>" class="blog-check mt-3 mb-3 mr-3 m-sm-3">
				<?php echo get_sub_field('blog_link') ?>
			</a>
		</div>

		<?php
		$posts = get_field('relationship_post');
		if( $posts ): ?>
		<ul class="pt-5 pb-md-5">
			<?php foreach( $posts as $post): ?>
				<?php setup_postdata($post); ?>
				<li class="pb-5">
					<?php
					$archive_year  = get_the_time('Y');
					$archive_month = get_the_time('m');
					$archive_day   = get_the_time('d');
					?>
					<a href="<?= get_day_link($archive_year, $archive_month, $archive_day); ?>">
						<time datetime="<?= get_the_date( 'Y-m-d' ); ?>" class="blog-time pb-3">
							<?= get_the_date( 'F d, Y' ); ?>
						</time>
					</a>
					<h4 class="pb-3"> 
						<a href="<?php the_permalink(); ?>" class="blog-title">
							<?php the_title(); ?>
						</a>
					</h4>
					<div class="section-text">
						<?php the_excerpt(); ?>
					</div>
				</li>
			<?php endforeach; ?>
		</ul>
		<?php wp_reset_postdata();?>
		<?php endif; ?>
	</div>
</div>
</section>