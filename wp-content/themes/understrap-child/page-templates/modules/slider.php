<?php
$container   = get_theme_mod( 'understrap_container_type' );?>




    <?php if (have_rows ('slide')): ?>

		<div id="carouselExampleIndicators" class="carousel slide home-slider" data-ride="carousel">
			<ol class="carousel-indicators home-indicators">
                <?php
                $active = 'active';
                $num = 0;
                while (have_rows ('slide')) : the_row ();?>
					<li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $num ?>" class="<?php echo $active ?>"></li>
                    <?php
                    $active = '';
                    $num +=1;
                endwhile; ?>
			</ol>
			<div class="carousel-inner" role="listbox">
				<?php
				$active = 'active';
				while (have_rows ('slide')) : the_row(); ?>
			<div class="carousel-item <?php echo $active ?> row">
				<div class="slider-background" style="background-image: url(<?= get_sub_field('background_image') ?>)">
					<div class="<?php echo esc_attr( $container ); ?> slider" id="content" tabindex="-1">
						<div class="text col-12 col-lg-6">
							<h3 class="slider-title"> <?= get_sub_field('subtitle') ?></h3>
							<p class="slider-subtitle"><?php the_sub_field('title') ?></p>
						</div>
						<ul class="industry-list d-flex flex-wrap align-items-center col-12 col-lg-6">
								<li class="col-12 col-md-6 slider-item">
									<a href="#">
									<i class="fa fa-building"></i>
									<div class="d-flex justify-content-between">
										<h4><?php the_sub_field('title_of_the_product_1') ?></h4>
										<i class="fa fa-arrow-circle-right"></i>
									</div>
									</a>
								</li>

								<li class="col-12 col-md-6 slider-item">
									<a href="#">
									<i class="fa fa-briefcase"></i>
									<div class="d-flex justify-content-between">
										<h4><?php the_sub_field('title_of_the_product_2') ?></h4>
										<i class="fa fa-arrow-circle-right"></i>
									</div>
									</a>
								</li>

								<li class="col-12 col-md-6 slider-item">
									<a href="#">
									<i class="fa fa-laptop"></i>
									<div class="d-flex justify-content-between">
										<h4><?php the_sub_field('title_of_the_product_3') ?></h4>
										<i class="fa fa-arrow-circle-right"></i>
									</div>
									</a>
								</li>

								<li class="col-12 col-md-6 slider-item">
									<a href="#">
										<i class="fa fa-home"></i>
										<div class="d-flex justify-content-between">
											<h4><?php the_sub_field('title_of_the_product_4') ?></h4>
											<i class="fa fa-arrow-circle-right"></i>
										</div>
									</a>
								</li>

								<li class="col-12 col-md-6 slider-item">
									<a href="#">
										<i class="fa fa-usd"></i>
										<div class="d-flex justify-content-between">
											<h4><?php the_sub_field('title_of_the_product_5') ?></h4>
											<i class="fa fa-arrow-circle-right"></i>
										</div>
									</a>
								</li>

								<li class="col-12 col-md-6 slider-item">
									<?php
									$link = get_sub_field('link_more');
									if( $link ): ?>
										<a href="<?php echo $link['url']; ?>"
										   target="<?php echo $link['target']; ?>" class="more">
											<?php echo $link['title']; ?>
										</a>
									<?php endif; ?>
								</li>
						</ul>
					</div>
				</div>
			</div>
					<?php $active = '';?>
        <?php endwhile; ?>
			</div>
		<a class="carousel-control-prev prev-a" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon prev" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next next-a" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon prev" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
    <?php endif; ?>








