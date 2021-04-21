<?php
/*
* Plugin Name: Brand Taxonomy
* Description: Adding a brand taxonomy to posts
* Version: 1.0.0
* Author: Pais Ionut
* Author URI: https://www.linkedin.com/in/paisionut/
*/

function wporg_register_taxonomy_brand () {
    $labels = array(
        'name'              => _x( 'Brands', 'taxonomy general name' ),
        'singular_name'     => _x( 'Brand', 'taxonomy singular name' ),
        'search_items'      => __( 'Search Brands' ),
        'all_items'         => __( 'All Brands' ),
        'parent_item'       => __( 'Parent Brand' ),
        'parent_item_colon' => __( 'Parent Brand:' ),
        'edit_item'         => __( 'Edit Brand' ),
        'update_item'       => __( 'Update Brand' ),
        'add_new_item'      => __( 'Add New Brand' ),
        'new_item_name'     => __( 'New Brand Name' ),
        'menu_name'         => __( 'Brand' ),
    );
    $args   = array(
        'hierarchical'      => true, // make it hierarchical (like categories)
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => [ 'slug' => 'brand' ],
    );
    register_taxonomy( 'brand', [ 'post' ], $args );
}
add_action( 'init', 'wporg_register_taxonomy_brand' );
?>