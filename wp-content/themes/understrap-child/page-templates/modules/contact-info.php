<?php
$container   = get_theme_mod( 'understrap_container_type' );?>

<section class="about-section">

	<div class="<?php echo esc_attr( $container ); ?>">
			<h2 class="title"> <?= get_sub_field('contact-title'); ?></h2>

		<ul class="d-flex flex-wrap justify-content-between contact-list pt-5">
			<li class="d-flex contact-element mb-2">
				<div
					 style="background-image: url(<?= get_sub_field('image_label_two') ?>);
							 background-repeat: no-repeat; background-size: 4rem; background-position: left center; padding-left: 1rem">
					<div class="d-flex flex-column contact-info">
						<span class="label">
							<?php the_sub_field('label_for_contact_two'); ?>
						</span>
						<a href="tel:<?php the_sub_field('contact_link_two'); ?>" class="contact-a">
							<?php the_sub_field('contact_link_two'); ?>
						</a>
					</div>
				</div>
			</li>
			<li class="d-flex contact-element mb-2">
				<div
					 style="background-image: url(<?= get_sub_field('image_label_three') ?>);
							 background-repeat: no-repeat; background-size: 4rem; background-position: left center;">
					<div class="d-flex flex-column contact-info">
						<span class="label">
							<?php the_sub_field('label_for_contact_three'); ?>
						</span>
						<a href="mailto:<?php the_sub_field('contact_link_three'); ?>" class="contact-a">
                            <?php the_sub_field('contact_link_three'); ?>
						</a>
					</div>
				</div>
			</li>
			<li class="d-flex contact-element mb-2">
				<div
					 style="background-image: url(<?= get_sub_field('image_label_one') ?>);
							 background-repeat: no-repeat; background-size: 4rem; background-position: left center; padding-left: 1rem">
					<div class="d-flex flex-column contact-info">
						<span class="label">
							<?php the_sub_field('label_for_contact_one'); ?>
						</span>
						<a href="mailto:<?php the_sub_field('contact_link_one'); ?>" class="contact-a">
                            <?php the_sub_field('contact_link_one'); ?>
						</a>
					</div>
				</div>
			</li>
		</ul>


	</div>

</section>