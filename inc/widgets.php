<?php
/**
 * Declaring widgets
 *
 * @package understrap
 */

/**
 * Count number of widgets in a sidebar
 * Used to add classes to widget areas so widgets can be displayed one, two, three or four per row
 */
if ( ! function_exists( 'understrap_slbd_count_widgets' ) ) {
	function understrap_slbd_count_widgets( $sidebar_id ) {
		// If loading from front page, consult $_wp_sidebars_widgets rather than options
		// to see if wp_convert_widget_settings() has made manipulations in memory.
		global $_wp_sidebars_widgets;
		if ( empty( $_wp_sidebars_widgets ) ) :
			$_wp_sidebars_widgets = get_option( 'sidebars_widgets', array() );
		endif;

		$sidebars_widgets_count = $_wp_sidebars_widgets;

		if ( isset( $sidebars_widgets_count[ $sidebar_id ] ) ) :
			$widget_count = count( $sidebars_widgets_count[ $sidebar_id ] );
			$widget_classes = 'widget-count-' . count( $sidebars_widgets_count[ $sidebar_id ] );
			if ( $widget_count % 4 == 0 || $widget_count > 6 ) :
				// Four widgets per row if there are exactly four or more than six
				$widget_classes .= ' col-md-3';
			elseif ( 6 == $widget_count ) :
				// If two widgets are published
				$widget_classes .= ' col-md-2';
			elseif ( $widget_count >= 3 ) :
				// Three widgets per row if there's three or more widgets 
				$widget_classes .= ' col-md-4';
			elseif ( 2 == $widget_count ) :
				// If two widgets are published
				$widget_classes .= ' col-md-6';
			elseif ( 1 == $widget_count ) :
				// If just on widget is active
				$widget_classes .= ' col-md-12';
			endif; 
			return $widget_classes;
		endif;
	}
}

if ( ! function_exists( 'understrap_widgets_init' ) ) {
	/**
	 * Initializes themes widgets.
	 */
	function understrap_widgets_init() {
        register_sidebar( array(
            'name'          => __( 'Left Footer Sidebar', 'understrap' ),
            'id'            => 'left-footer-sidebar',
            'description'   => '',
            'before_widget'  => '<div class="chimp">',
            'after_widget'   => '</div>',
            'before_title'   => '<h3 class="footer-title">',
            'after_title'    => '</h3>',
        ) );

		register_sidebar( array(
			'name'          => __( 'Rignt Page Sidebar', 'understrap' ),
			'id'            => 'right-page-sidebar',
			'description'   => '',
			'before_widget'  => '<div class="aside-bar">',
			'after_widget'   => '</div>',
			'before_title'   => '<h3 class="aside-title">',
			'after_title'    => '</h3>',
		) );

	}
} // endif function_exists( 'understrap_widgets_init' ).
add_action( 'widgets_init', 'understrap_widgets_init' );

