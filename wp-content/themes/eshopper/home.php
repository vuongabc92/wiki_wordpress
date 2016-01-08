<?php
/**
 * The home template file.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Eshopper
 */

get_header();
include THEME_DIR . '/template-parts/block-header.php';
include THEME_DIR . '/template-parts/home-page/block-slider.php';
include THEME_DIR . '/template-parts/home-page/block-product.php';
include THEME_DIR . '/template-parts/block-footer.php';
get_footer();
