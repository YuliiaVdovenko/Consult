<?php 

function remove_widgets(){

    unregister_sidebar( 'right-sidebar' );
    unregister_sidebar( 'left-sidebar' );
    unregister_sidebar( 'hero' );
    unregister_sidebar( 'statichero' );
    unregister_sidebar( 'footerfull' );

}
add_action( 'widgets_init', 'remove_widgets', 11 );