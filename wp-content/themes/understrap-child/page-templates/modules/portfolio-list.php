<?php
$container   = get_theme_mod( 'understrap_container_type' );?>

<section class="portfolio-section pt-5 pb-5">
	<div class="<?php echo esc_attr( $container ); ?>">
		<h2 class="title"> <?= get_sub_field('section_name') ?></h2>

		<?php
		$posts = get_field('featured_post');
		if( $posts ): ?>
			<ul class="row flex-wrap">
				<?php foreach( $posts as $post): ?>
					<?php setup_postdata($post);
					$portfolio = new WP_Query( array('post_type' => array( 'projects' )) ); ?>
					<li class="portfolio-item col-4 pb-4">
						<div class="img-border">
							<a href="<?= get_permalink();?>">
								<?php the_post_thumbnail(); ?>
							</a>
								<?php $terms = wp_get_post_terms( $post->ID, 'industries', array ("fields" => "all"));
								if( $terms && ! is_wp_error($terms) ){
									foreach( $terms as $term ){ ?>
										<a href="<?= get_term_link($term) ?>" class="hover-a">
											<?= $term->name; ?>
										</a>
									<?php }
								}
								?>
							<div class="div-hover">
								<span class="i-hover"></span>
							<div class="portfolio-hover">
								<a href="<?= get_permalink();?>">
									<?php the_title(); ?>
								</a>
								<p> <?php the_excerpt();?> </p>
							</div>

							</div>
						</div>

					</li>
					<?php
					wp_reset_query();
					wp_reset_postdata();
					?>
				<?php endforeach; ?>
			</ul>
			<?php wp_reset_postdata();?>
		<?php endif; ?>

		<a href="<?php echo get_post_type_archive_link( 'projects' ); ?>" class="read-more">
			<?= get_sub_field('full_project'); ?>
		</a>

	</div>
</section>


