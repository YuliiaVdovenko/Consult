<?php
$container = get_theme_mod('understrap_container_type'); ?>

<section class="blog-section">

	<div class="<?php echo esc_attr( $container ); ?> d-flex flex-wrap">
		<div class="col-12 col-lg-6 d-flex flex-wrap justify-content-between align-items-center featured-post pl-0 pt-5">
				<h2 class="title mr-3 mb-5 mb-sm-0"> <?= get_sub_field('blog_title'); ?></h2>

		<div class="d-flex flex-wrap">
				<a href="<?=get_permalink(get_option('page_for_posts'));?>" class="blog-check-1 blog-check mb-5 mb-sm-0">
					<?php echo get_sub_field('blog_link1') ?>
				</a>

				<a href="<?=get_permalink(get_option('page_for_posts'));?>" class="blog-check ml-3 mb-5 mb-sm-0">
					<?php echo get_sub_field('blog_link') ?>
				</a>
			</div>

			<?php
			$posts = get_field('relationship_post');
			if( $posts ): ?>
			<ul>
				<?php foreach( $posts as $post): ?>
					<?php setup_postdata($post); ?>
					<li>
						<?php
						$archive_year  = get_the_time('Y');
						$archive_month = get_the_time('F');
						$archive_day   = get_the_time('d');
						?>
						<a href="<?= get_day_link($archive_year, $archive_month, $archive_day); ?>">
							<time datetime="<?= get_the_date( 'Y-m-d' ); ?>" class="blog-time">
								<?= get_the_date( 'F d, Y' ); ?>
							</time>
						</a>
						<h4> <a href="<?php the_permalink(); ?>" class="blog-title">
							<?php the_title(); ?>
							</a> </h4>
						<p> <?php the_excerpt(); ?> </p>
					</li>
				<?php endforeach; ?>
			</ul>
			<?php wp_reset_postdata();?>
			<?php endif; ?>

		</div>
		<div class="col-12 col-lg-6 p-0">
			<img src="<?= get_sub_field('blog_image'); ?>" alt="" class="h-100">
		</div>

	</div>
</section>