<?php
$container = get_theme_mod('understrap_container_type'); ?>

<section class="clients-slider">
	<div class="<?php echo esc_attr( $container ); ?>">
		<h3 class="title"> <?= get_sub_field('section_name') ?></h3>

        <?php
        $query = new WP_Query(array('post_type' => 'Comments'));
        if ($query->have_posts()) { ?>
			<ul class="slider-for">
                <?php while ($query->have_posts()) {
                    $query->the_post(); ?>
					<li class="item">
                        <?php the_content(); ?>
					</li>
                <?php } ?>
			</ul>
            <?php
        } else {
        }
        wp_reset_postdata();

        if ($query->have_posts()) { ?>
			<ul class="d-flex slider-nav">
                <?php while ($query->have_posts()) {
                    $query->the_post(); ?>

					<li class="item d-flex align-items-center">
						<div> <?php the_post_thumbnail(); ?> </div>
						<div class="d-flex flex-column ml-4">
							<span> <?php the_title(); ?></span>
							<span><?php echo get_post_meta(get_the_ID(), 'position', true); ?></span>
						</div>
					</li>
                <?php } ?>
			</ul>
            <?php
        } else {
        }
        wp_reset_postdata();
        ?>
	</div>
</section>

