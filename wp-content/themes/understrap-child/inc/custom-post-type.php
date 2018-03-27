<?php
add_action( 'init', 'comments_register' );
/**
 * Register a book post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */

function comments_register() {
    $labels = array(
        'name'               => _x( 'Comments', 'post type general name', 'understrap' ),
        'singular_name'      => _x( 'Comments', 'post type singular name', 'understrap' ),
        'menu_name'          => _x( 'Comments', 'admin menu', 'understrap' ),
        'name_admin_bar'     => _x( 'Comments', 'add new on admin bar', 'understrap' ),
        'add_new'            => _x( 'Add New Comment item', 'Portfolio member', 'understrap' ),
        'add_new_item'       => __( 'Add New Comment item', 'understrap' ),
        'new_item'           => __( 'New Comment item', 'understrap' ),
        'edit_item'          => __( 'Edit Comment item', 'understrap' ),
        'view_item'          => __( 'View Comment item', 'understrap' ),
        'all_items'          => __( 'All Comment items', 'understrap' ),
        'search_items'       => __( 'Search Comment items', 'understrap' ),
        'parent_item_colon'  => __( 'Parent Comment items:', 'understrap' ),
        'not_found'          => __( 'No Comment members found.', 'understrap' ),
        'not_found_in_trash' => __( 'No Comment members found in Trash.', 'understrap' )
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __( 'This is a list of Comment items', 'understrap' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'Comments' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'thumbnail', 'editor')
    );

    register_post_type( 'Comments', $args );
}

add_action( 'init', 'portfolio_register' );
/**
 * Register a book post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */

function portfolio_register() {
    $labels = array(
        'name'               => _x( 'Portfolio', 'post type general name', 'understrap' ),
        'singular_name'      => _x( 'Portfolio', 'post type singular name', 'understrap' ),
        'menu_name'          => _x( 'Portfolio', 'admin menu', 'understrap' ),
        'name_admin_bar'     => _x( 'Portfolio', 'add new on admin bar', 'understrap' ),
        'add_new'            => _x( 'Add New Portfolio item', 'Portfolio member', 'understrap' ),
        'add_new_item'       => __( 'Add New Portfolio item', 'understrap' ),
        'new_item'           => __( 'New Portfolio item', 'understrap' ),
        'edit_item'          => __( 'Edit Portfolio item', 'understrap' ),
        'view_item'          => __( 'View Portfolio item', 'understrap' ),
        'all_items'          => __( 'All Portfolio items', 'understrap' ),
        'search_items'       => __( 'Search Portfolio items', 'understrap' ),
        'parent_item_colon'  => __( 'Parent Portfolio items:', 'understrap' ),
        'not_found'          => __( 'No Portfolio members found.', 'understrap' ),
        'not_found_in_trash' => __( 'No Portfolio members found in Trash.', 'understrap' )
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __( 'This is a list of Portfolio items', 'understrap' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'Portfolio' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'thumbnail')
    );

    register_post_type( 'Portfolio', $args );
}