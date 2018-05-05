<?php
$container = get_theme_mod('understrap_container_type'); ?>

<section class="clients-slider padding-section">
    <div class="<?php echo esc_attr( $container ); ?>">
        <?php if( get_sub_field('section_name') ): ?>
          <h3 class="section-title testimonials pt-md-5"> 
            <?= get_sub_field('section_name') ?>
            <span class="section-subtitle testimonials">
                <?= get_sub_field('section_subname') ?>
            </span>
          </h3>
        <?php endif; ?>

    <?php
    $query = new WP_Query(array('post_type' => 'Comments'));
    if ($query->have_posts()) { ?>
    <ul class="slider-for pt-4">
        <?php while ($query->have_posts()) {
            $query->the_post(); ?>
            <li class="pb-md-5">
                <div class="item d-flex align-items-center justify-content-between">
                    <?php the_content(); ?>
                </div>
            </li>
            <?php } ?>
        </ul>
        <?php } wp_reset_postdata();

        if ($query->have_posts()) { ?>
        <ul class="d-flex slider-nav">
            <?php while ($query->have_posts()) {
                $query->the_post(); ?>

                <li class="item d-flex align-items-center p-3">
                  <?php the_post_thumbnail(); ?>
                  <div class="d-flex flex-column ml-4">
                   <span> <?php the_title(); ?></span>
                   <span><?php echo get_post_meta(get_the_ID(), 'position', true); ?></span>
               </div>
           </li>
           <?php } ?>
       </ul>
       <?php }
       wp_reset_postdata();
       ?>
   </div>
</section>

