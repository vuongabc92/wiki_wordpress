<?php

/**
 * Eshopper functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Eshopper
 */

/**
 * Load constants.
 */
require get_template_directory() . '/inc/constants.php';

/**
 * Load functions.
 */
require get_template_directory() . '/inc/functions.php';

/**
 * Create admin options in admin dashboard page.
 */
require get_template_directory() . '/inc/admin-options.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
