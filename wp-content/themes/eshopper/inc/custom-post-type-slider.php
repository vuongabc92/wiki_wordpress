<?php
/**
 * Add new custom post type slider.
 *
 * @package Eshopper
 */

function register_custom_post_type_slider() {

    /*
     * Biến $label để chứa các text liên quan đến tên hiển thị của Post Type trong Admin
     */
    $label = array(
        'name'          => __( 'Carousel', THEME_NAME ),
        'singular_name' => __( 'Carousel', THEME_NAME )
    );

    $args = array(
        'labels'      => $label,
        'description' => __( 'Carousel', THEME_NAME ),
        'supports'    => array(
            'title',
            'editor',
            'excerpt',
            'author',
            'thumbnail',
            'trackbacks',
            'revisions',
            'custom-fields'
        ),
        'taxonomies'          => array( 'category', 'post_tag' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-format-image',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post'
    );

    register_post_type( CUSTOM_POST_TYPE_CAROUSEL, $args );

}

add_action( 'init', 'register_custom_post_type_slider' );