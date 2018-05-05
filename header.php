<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

$container = get_theme_mod('understrap_container_type');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div class="top-header">
		<ul class="<?php echo esc_attr( $container ); ?> d-flex flex-wrap justify-content-end">

			<?php if( get_theme_mod('address_email') ): ?>
				<li class="before-header p-3 d-inline-flex align-items-center">
					<span class="header-top-span pr-3">
						<?php echo get_theme_mod('label_email'); ?>
					</span>
					<a href="mailto:<?php echo get_theme_mod('address_email'); ?>" class="link-header">
						<?php echo get_theme_mod('address_email'); ?>
					</a>
				</li>
			<?php endif; ?>
			<?php if( get_theme_mod('phone_number') ): ?>
				<li class="before-header d-inline-flex align-items-center p-3">
					<span class="header-top-span pr-3">
						<?php echo get_theme_mod('phone_label'); ?>
					</span>
					<a href="tel:<?php echo get_theme_mod('phone_number'); ?>" class="link-header">
						<?php echo get_theme_mod('phone_number'); ?>
					</a>
				</li>
			<?php endif; ?>
		</ul>
	</div>

	<a class="skip-link screen-reader-text sr-only" href="#"><?php esc_html_e('Skip to content',
	'understrap'); ?></a>
	<nav class="navbar  navbar-expand-lg navbar-light">
		<?php if ('container' == $container) : ?>
			<div class="container">
			<?php endif; ?>
			<?php if (!has_custom_logo()) { ?>
			<?php if (is_front_page() && is_home()) : ?>
				<h1 class="navbar-brand mb-0">
					<a rel="home" href="<?php echo esc_url(home_url('/')); ?>"
						title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
						<?php bloginfo('name'); ?>
					</a>
				</h1>
			<?php else : ?>

				<a class="navbar-brand" rel="home" href="<?php echo esc_url(home_url('/')); ?>"
					title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
					<?php bloginfo('name'); ?>
				</a>

			<?php endif; ?>
			<?php } else {
				the_custom_logo();
			} ?>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
			aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<?php wp_nav_menu(
			array(
				'theme_location' => 'primary',
				'container_class' => 'collapse navbar-collapse justify-content-end pb-3 pt-3',
				'container_id' => 'navbarNavDropdown',
				'menu_class' => 'navbar-nav',
				'fallback_cb' => '',
				'menu_id' => 'main-menu',
				'walker' => new understrap_WP_Bootstrap_Navwalker(),
			)
			); ?>
			<?php if ('container' == $container) : ?>
			</div>
		<?php endif; ?>
	</nav>
</div>
