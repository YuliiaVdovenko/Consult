<?php
add_action( 'init', 'create_portfolio_taxonomies', 0 );


function create_portfolio_taxonomies() {

    $labels = array(
        'name'              => _x( 'Industries', 'taxonomy general name', 'understrap' ),
        'singular_name'     => _x( 'Industries', 'taxonomy singular name', 'understrap' ),
        'search_items'      => __( 'Search Industry item', 'understrap' ),
        'all_items'         => __( 'All Industry items', 'understrap' ),
        'parent_item'       => __( 'Parent Industry item', 'understrap' ),
        'parent_item_colon' => __( 'Parent Industry item:', 'understrap' ),
        'edit_item'         => __( 'Edit Industry item', 'understrap' ),
        'update_item'       => __( 'Update Industry item', 'understrap' ),
        'add_new_item'      => __( 'Add New Industries item', 'understrap' ),
        'new_item_name'     => __( 'New Industries item name', 'understrap' ),
        'menu_name'         => __( 'Industries', 'understrap' ),
    );

    $args = array(
        'hierarchical'      => false,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'industries' ),
    );

    register_taxonomy( 'industries', array( 'projects' ), $args );
}




