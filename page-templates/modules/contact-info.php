<?php
$container = get_theme_mod('understrap_container_type'); ?>

<section class="about-section padding-section">

	<div class="<?php echo esc_attr($container); ?> pt-md-5 pb-md-5">
		<?php if( get_sub_field('contact-title') ): ?>
			<h2 class="section-title pb-5"> 
				<?= get_sub_field('contact-title'); ?>
				<span class="section-subtitle">
					<?= get_sub_field('contact-subtitle'); ?>
				</span>
			</h2>
		<?php endif;?>

		<?php if( get_sub_field('contact_icon') ): ?>
			<ul class="row flex-wrap justify-content-between contact-list pt-5">
				<li class="col-12 col-sm-6 col-lg-4 pb-5">
					<div class="contact-element">
						<div style="background-image: url(<?= get_sub_field('contact_icon') ?>);" class="contact-icon">
							<h4 class="label">
								<?php the_sub_field('contact_label'); ?>
							</h4>
							<a href="tel:<?php the_sub_field('contact_link'); ?>" class="contact-a">
								<?php the_sub_field('contact_link'); ?>
							</a>
						</div>
					</div>
				</li>
			<?php endif;?>
			<?php if( get_sub_field('contact_icon_2') ): ?>
				<li class="col-12 col-sm-6 col-lg-4 pb-5">
					<div class="contact-element">
						<div class="contact-icon" style="background-image: url(<?= get_sub_field('contact_icon_2') ?>);">
							<h4 class="label">
								<?php the_sub_field('contact_label_2'); ?>
							</h4>
							<a href="mailto:<?php the_sub_field('contact_link_2'); ?>" class="contact-a">
								<?php the_sub_field('contact_link_2'); ?>
							</a>
						</div>
					</div>
				</li>
			<?php endif;?>
			<?php if( get_sub_field('contact_icon_3') ): ?>
				<li class=" col-12 col-md-6 col-lg-4 pb-5">
					<div class="contact-element">
						<div style="background-image: url(<?= get_sub_field('contact_icon_3') ?>); background-repeat: no-repeat; background-size: 5rem; background-position: left center; padding-left: 6rem">
							<h4 class="label">
								<?php the_sub_field('contact_label_3'); ?>
							</h4>
							<a href="mailto:<?php the_sub_field('contact_link_3'); ?>" class="contact-a">
								<?php the_sub_field('contact_link_3'); ?>
							</a>
						</div>
					</div>
				</li>
			</ul>
		<?php endif;?>
	</div>
</section>