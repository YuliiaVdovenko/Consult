<?php
$container   = get_theme_mod( 'understrap_container_type' );?>

<section class="portfolio-section">
	<div class="<?php echo esc_attr( $container ); ?>">
		<h2 class="title"> <?= get_sub_field('section_name') ?></h2>


		<ul class="row">

            <?php
            $portfolio = new WP_Query( array('post_type' => array( 'portfolio' )) );
            if ( $portfolio->have_posts() ) {
                while ( $portfolio->have_posts() ) {
                    $portfolio->the_post();
                    ?>
					<li class="col-12 col-sm-6 col-md-4 portfolio-item">
						<div class="img-border">
                            <?php the_post_thumbnail(); ?>
							<div class="portfolio-hover">
								<?php $terms = get_terms( 'portfolio' );
								if( $terms && ! is_wp_error($terms) ){
								foreach( $terms as $term ){ ?>
								<a href="<?php the_permalink(); ?>" class="hover-a">
									<?= $term->name; ?>
								</a>
									<?php
								}
								}
								?>
							</div>
						</div>
					</li>
                    <?php
                }
            } else {
                // Постов не найдено
            }
            wp_reset_query();
            wp_reset_postdata();
            ?>
		</ul>
	</div>
</section>


