<?php
$container = get_theme_mod('understrap_container_type'); ?>

<section class="blog-section"
			style="background-image: url(<?= get_sub_field('blog_image') ?>);
					background-repeat: no-repeat; background-size: contain; background-position: right center;">

	<div class="<?php echo esc_attr( $container ); ?> d-flex flex-wrap align-items-center">
		<div class="row col-12 col-md-6 d-flex flex-wrap align-items-center justify-content-between featured-post">
				<h2 class="title"> <?= get_sub_field('blog_title'); ?></h2>


			<a href="<?=get_permalink(get_option('page_for_posts'));?>"></a>
                <?php
                $link1 = get_sub_field('blog_link1');
                if ($link1): ?>
					<a class="blog-check blog-check-1" href="<?php echo $link1['url']; ?>"
					   target="<?php echo $link1['target']; ?>">
                        <?php echo $link1['title']; ?>
					</a>
                <?php endif; ?>

                <?php
                $link1 = get_sub_field('blog_link');
                if ($link1): ?>
					<a class="blog-check" href="<?php echo $link1['url']; ?>"
					   target="<?php echo $link1['target']; ?>">
                        <?php echo $link1['title']; ?>
					</a>
                <?php endif; ?>


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

	</div>
</section>