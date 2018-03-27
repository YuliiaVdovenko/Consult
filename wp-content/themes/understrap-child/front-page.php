<?php get_header();

	$container = get_theme_mod( 'understrap_container_type' );?>

<?php
/**
 * The template for displaying front-page.
 *
 * @package understrap
 */
?>

<?php
while (have_rows ('modules_home_page')) :the_row ();
    switch (get_row_layout()) {
        case 'slider_section' :
            get_template_part ('page-templates/modules/slider');
            break;
        case 'service_section' :
            get_template_part ('page-templates/modules/steps');
            break;
        case 'portfolio_list' :
            get_template_part ('page-templates/modules/portfolio-list');
            break;
        case 'about_section' :
            get_template_part ('page-templates/modules/about');
            break;
        case 'featured_clients' :
            get_template_part ('page-templates/modules/featured-clients');
            break;
        case 'top_blog' :
            get_template_part ('page-templates/modules/blog');
            break;
        case 'contact-info' :
            get_template_part ('page-templates/modules/contact-info');
            break;
        default: break;
    }
endwhile; ?>



<?php get_footer(); ?>