<?php
$container   = get_theme_mod( 'understrap_container_type' );?>

<section class="offer-section">
	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">
		<h2 class="title"> <?= get_sub_field('service_title'); ?></h2>
        <?php if (have_rows ('image')): ?>
		<ul class="row">
            <?php while (have_rows ('image')) : the_row(); ?>
			<li class="image-offer col-12 col-md-4 column justify-content-between">
				<img src="<?= get_sub_field('service_image'); ?>" alt="">
				<span class="step"><?= get_sub_field('step_number'); ?></span>
				<h3><?= get_sub_field('image_title'); ?></h3>
				<p> <?= get_sub_field('description_for_image'); ?></p>
			</li>
			<?php endwhile;?>
		</ul>
			<?php endif; ?>
</section>