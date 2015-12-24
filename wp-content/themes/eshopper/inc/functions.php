<?php

if ( ! function_exists('eshopper_setup') ) :

    /**
     * Sets up theme defaults and registers support for various WordPress features.
     */
    function eshopper_setup()
    {

        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on twentyfifteen, use a find and replace
         * to change 'twentyfifteen' to the name of your theme in all the template files
         */
        load_theme_textdomain( ESHOPPER, get_template_directory() . '/languages' );

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
        ));

        /*
         * Enable support for Post Formats.
         *
         * See: https://codex.wordpress.org/Post_Formats
         */
        add_theme_support('post-formats', array(
            'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
        ));
    }

    add_action('after_setup_theme', 'eshopper_setup');

endif; // twentyfifteen_setup


if ( ! function_exists('eshopper_widgets_init') ) :

    /**
     * Registers a widget area.
     */
    function eshopper_widgets_init() {
        register_sidebar(array(
            'name'          => __( 'Left sidebar', ESHOPPER ),
            'id'            => 'left-sidebar',
            'description'   => __( 'Add widgets here to appear in your sidebar.', ESHOPPER ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        ));
    }

    add_action('widgets_init', 'eshopper_widgets_init');

endif; // eshopper_widgets_init

if ( ! function_exists('register_main_menus') ) :

    /**
     * Register menus
     */
    function register_main_menus() {
        register_nav_menus(
            array(
                'primary-nav'  => __( 'Primary navigation menus', ESHOPPER )
            )
        );
    }

    add_action( 'init', 'register_main_menus' );

endif; // eshopper_widgets_init