
<?php get_header(); ?>
<div class="img-border">

                            <?php the_post_thumbnail(); ?>
</div>

<?php if( have_rows('group') ):

	while( have_rows('group') ): the_row();

		?>
		<nav>
			<div class="nav nav-tabs" id="nav-tab" role="tablist">
				<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab"
				   href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
				<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab"
				   href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</a>
				<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab"
				   href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</a>
			</div>
		</nav>
		<div class="tab-content" id="nav-tabContent">
			<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
				<?php the_sub_field('text1');?>
			</div>
			<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
				<?php the_sub_field('text2');?>
			</div>
			<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
				<img src="<?php the_sub_field('image');?>" alt="">
			</div>
		</div>
	<?php endwhile; ?>

<?php endif; ?>



<?php get_footer(); ?>
