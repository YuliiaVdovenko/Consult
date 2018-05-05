<?php
$container   = get_theme_mod( 'understrap_container_type' );?>

<section class="offer-section padding-section">
	<div class="<?php echo esc_attr( $container ); ?>">
		<?php if( get_sub_field('service_title') ): ?>
			<h2 class="section-title text-center text-md-left pt-md-5 pb-5"> 
				<?= get_sub_field('service_title'); ?>
				<span class="section-subtitle">
					<?= get_sub_field('service_subtitle'); ?>
				</span>
			</h2>
		<?php endif; ?>
		<?php if (have_rows ('image')): ?>
			<ul class="row pb-md-5 text-center text-md-left justify-content-center">
				<?php while (have_rows ('image')) : the_row(); ?>
					<li class="image-offer col-12 col-sm-6 col-md-4 column justify-content-between">
						<img src="<?= get_sub_field('service_image'); ?>" alt="steps" class="steps-image m-auto m-md-0">
						<span class="step">
							<?= get_sub_field('step_number'); ?>
						</span>
						<h3 class="image-title">
							<?= get_sub_field('image_title'); ?>
						</h3>
						<p class="section-text"> 
							<?= get_sub_field('description_for_image'); ?>
							</p>
					</li>
				<?php endwhile;?>
			</ul>
		<?php endif; ?>
	</section>