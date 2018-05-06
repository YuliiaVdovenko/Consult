<?php
$container   = get_theme_mod( 'understrap_container_type' );?>

<section class="portfolio-section padding-section">
	<div class="<?php echo esc_attr( $container ); ?> pt-md-5 pb-md-5">
		<?php if( get_sub_field('section_portfolio_name') ): ?>
			<h2 class="section-title pb-5"> 
				<?= get_sub_field('section_portfolio_name') ?>
				<span class="section-subtitle">
					<?= get_sub_field('section_portfolio_subname') ?>
				</span>
			</h2>
		<?php endif;?>

		<?php
		$project_posts = get_field('featured_post');
		if( $project_posts ): ?>
		<div class="row flex-wrap">
			<?php foreach ( $project_posts as $key => $project_post ) : ?>

				<?php if ( $key == 0 ) { ?>
				<div class="col-md-6 portfolio-item pb-5">
					<div class="img-border">
						<?php echo get_the_post_thumbnail( $project_post->ID ); ?>
						<?php $terms = wp_get_post_terms( $project_post->ID, 'industries', array ("fields" => "all"));
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
							<div class="portfolio-hover justify-content-center">
								<h3 class="project-name"> 
									<?php echo get_the_title( $project_post->ID ); ?> 
								</h3>
								<p class="excerpt p-3">
									<?php echo get_field ('description_of_project', $project_post->ID); ?>
								</p>
							</div>
						</div>
					</div>
				</div>
				<?php } ?>

				<?php if ( $key == 1 ) { ?>
				<div class="col-lg-6 p-0 d-flex flex-wrap">
					<div class="col-md-6 portfolio-item pb-5">
						<div class="img-border">
							<?php echo get_the_post_thumbnail( $project_post->ID ); ?>
							<?php $terms = wp_get_post_terms( $project_post->ID, 'industries', array ("fields" => "all"));
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
								<div class="portfolio-hover justify-content-center">
									<h3 class="project-name"> 
										<?php echo get_the_title( $project_post->ID ); ?> 
									</h3>
									<p class="excerpt p-3">
										<?php echo get_field ('description_of_project', $project_post->ID); ?>
									</p>
								</div>
							</div>
						</div>
					</div>
					<?php } ?>
					<?php if ( $key == 2 ) { ?>
					<div class="col-md-6 portfolio-item pb-5">
						<div class="img-border">
							<?php echo get_the_post_thumbnail( $project_post->ID ); ?>
							<?php $terms = wp_get_post_terms( $project_post->ID, 'industries', array ("fields" => "all"));
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
								<div class="portfolio-hover justify-content-center">
									<h3 class="project-name"> 
										<?php echo get_the_title( $project_post->ID ); ?> 
									</h3>
									<p class="excerpt p-3">
										<?php echo get_field ('description_of_project', $project_post->ID); ?>
									</p>
								</div>
							</div>
						</div>
					</div>
					<?php } ?>
					
					<?php if ( $key == 3 ) { ?>
					<div class="col-md-12 portfolio-item pb-5">
						<div class="img-border">
							<?php echo get_the_post_thumbnail( $project_post->ID ); ?>
							<?php $terms = wp_get_post_terms( $project_post->ID, 'industries', array ("fields" => "all"));
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
								<div class="portfolio-hover justify-content-center">
									<h3 class="project-name"> 
										<?php echo get_the_title( $project_post->ID ); ?> 
									</h3>
									<p class="excerpt p-3">
										<?php echo get_field ('description_of_project', $project_post->ID); ?>
									</p>
								</div>
							</div>
						</div>
					</div>
					<?php } ?>
				<?php endforeach; ?>
				<?php wp_reset_postdata(); ?>
			<?php endif; ?>
		</div>
	</div>
	<?php if( get_sub_field('full_project') ): ?>
		<div class="text-center">
			<a href="<?php echo get_post_type_archive_link( 'projects' ); ?>" class="read-more text-center">
				<?= get_sub_field('full_project'); ?>
			</a>
		</div>
	<?php endif; ?>
</div>
</section>


