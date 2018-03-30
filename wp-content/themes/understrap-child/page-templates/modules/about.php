<?php
$container   = get_theme_mod( 'understrap_container_type' );?>

<section class="about-section pt-5 pb-5">
	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">
			<div class="d-flex flex-wrap align-items-center home-block-welcome">
				<div class="col-12 col-md-6 about-text">
					<h2 class="title"> <?= get_sub_field('about_title'); ?></h2>
					<p> <?= get_sub_field('about_text'); ?></p>

                    <?php
                    $link1 = get_sub_field('about_link');
                    if( $link1 ): ?>
						<a class="read-more mb-5" href="<?php echo $link1['url']; ?>"
						   target="<?php echo $link1['target']; ?>">
                            <?php echo $link1['title']; ?>
						</a>
                    <?php endif; ?>


				</div>
				<div class="image-background col-12 col-md-6">
					<img src="<?= get_sub_field('about_image'); ?>" alt="">
				</div>
			</div>
		</div>
</section>