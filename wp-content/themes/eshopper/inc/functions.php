<?php

/**
 * Eshopper functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Eshopper
 */

if ( ! function_exists( 'eshopper_setup' ) ) :

    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function eshopper_setup() {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on Eshopper, use a find and replace
         * to change 'eshopper' to the name of your theme in all the template files.
         */
        load_theme_textdomain( THEME_NAME, get_template_directory() . '/languages' );

        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support( 'title-tag' );

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support( 'post-thumbnails' );

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(array(
            'primary' => esc_html__( 'Primary', THEME_NAME ),
        ));

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        /*
         * Enable support for Post Formats.
         * See https://developer.wordpress.org/themes/functionality/post-formats/
         */
        add_theme_support('post-formats', array(
            'aside',
            'image',
            'video',
            'quote',
            'link',
        ));

        // Set up the WordPress core custom background feature.
        add_theme_support('custom-background', apply_filters('eshopper_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));
    }

endif; // Function eshopper_setup.

add_action( 'after_setup_theme', 'eshopper_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function eshopper_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'eshopper_content_width', 640 );
}

add_action( 'after_setup_theme', 'eshopper_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function eshopper_widgets_init() {
    register_sidebar(array(
        'name'          => esc_html__( 'Sidebar', THEME_NAME ),
        'id'            => 'sidebar-1',
        'description'   => '',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}

add_action( 'widgets_init', 'eshopper_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function eshopper_scripts() {

    wp_enqueue_style( 'eshopper-style', get_stylesheet_uri() );

    //wp_enqueue_script( 'eshopper-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );
    //wp_enqueue_script( 'eshopper-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}

add_action( 'wp_enqueue_scripts', 'eshopper_scripts' );

/**
 * Get social networking
 *
 * @return array list social onfo
 */
function eshopper_get_social_networking() {

    global $eshopper_options;

    return array(
        'phone'       => isset( $eshopper_options['phone'] )       ? $eshopper_options['phone']       : '',
        'email'       => isset( $eshopper_options['email'] )       ? $eshopper_options['email']       : '',
        'facebook'    => isset( $eshopper_options['facebook'] )    ? $eshopper_options['facebook']    : '',
        'twitter'     => isset( $eshopper_options['twitter'] )     ? $eshopper_options['twitter']     : '',
        'linkedin'    => isset( $eshopper_options['linkedin'] )    ? $eshopper_options['linkedin']    : '',
        'dribbble'    => isset( $eshopper_options['dribbble'] )    ? $eshopper_options['dribbble']    : '',
        'google_plus' => isset( $eshopper_options['google_plus'] ) ? $eshopper_options['google_plus'] : '',
    );
}

/**
 * Get logo src
 *
 * @global type $eshopper_options
 * @return type
 */
function eshopper_get_logo_src() {

    global $eshopper_options;

    return isset( $eshopper_options['logo']['url'] ) ? $eshopper_options['logo']['url'] : '';
}