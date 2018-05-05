<?php
$container   = get_theme_mod( 'understrap_container_type' );?>

<section class="padding-section">
	<div class="<?php echo esc_attr( $container ); ?>">
		<div class="row flex-wrap align-items-center">
			<?php if( get_sub_field('about_title') ): ?>
				<div class="col-12 col-md-6 text-right">
					<h2 class="section-title pt-md-5 pb-5"> 
						<?= get_sub_field('about_title'); ?>
						<span class="section-subtitle">
							<?= get_sub_field('about_subtitle'); ?>
						</span>
					</h2>
				<?php endif; ?>
				<?php if( get_sub_field('about_text') ): ?>
					<p class="pb-5 section-text"> <?= get_sub_field('about_text'); ?></p>
				<?php endif; ?>

				<?php
				$link1 = get_sub_field('about_link');
				if( $link1 ): ?>
				<a class="read-more mb-5" href="<?php echo $link1['url']; ?>"
					target="<?php echo $link1['target']; ?>">
					<?php echo $link1['title']; ?>
				</a>
			<?php endif; ?>
		</div>
		<?php if( get_sub_field('about_image') ): ?>
			<div class="image-background col-12 col-md-6">
				<img src="<?= get_sub_field('about_image'); ?>" alt="" class="w-100 pt-md-5 pb-md-5">
			</div>
		<?php endif; ?>
	</div>
</div>
</section>