<?php
/**
 * Created by PhpStorm.
 * User: emmanuelajoku
 * Date: 4/6/19
 * Time: 3:32 PM
 */


add_action( 'wp_enqueue_scripts', 'unite_child_enqueue_styles' );
function unite_child_enqueue_styles() {

    $parent_style = 'parent-style'; // This is 'style' for the unite parent theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}

function custom_post_type() {

// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Films', 'Post Type General Name', 'unite' ),
        'singular_name'       => _x( 'Film', 'Post Type Singular Name', 'unite' ),
        'menu_name'           => __( 'Films', 'unite' ),
        'parent_item_colon'   => __( 'Parent Film', 'unite' ),
        'all_items'           => __( 'All Films', 'unite' ),
        'view_item'           => __( 'View Film', 'unite' ),
        'add_new_item'        => __( 'Add New Film', 'unite' ),
        'add_new'             => __( 'Add New', 'unite' ),
        'edit_item'           => __( 'Edit Film', 'unite' ),
        'update_item'         => __( 'Update Film', 'unite' ),
        'search_items'        => __( 'Search Film', 'unite' ),
        'not_found'           => __( 'Not Found', 'unite' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'unite' ),
    );

// Set other options for Custom Post Type

    $args = array(
        'label'               => __( 'films', 'unite' ),
        'description'         => __( 'Film', 'unite' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        'taxonomies'          => array( 'Genre', 'Country', 'Year',  'Actors' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );

    // Registering Custom Post Type
    register_post_type( 'films', $args );

}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not
* unnecessarily executed.
*/

add_action( 'init', 'custom_post_type', 0 );
