<?php

class Eshopper_Walker_Nav_Menu extends Walker_Nav_Menu {

    function start_lvl( &$output, $depth = 0, $args = array() ) {
        // depth dependent classes
        $indent        = ( $depth > 0 ? str_repeat("\t", $depth) : '' ); // code indent
        $display_depth = ( $depth + 1); // because it counts the first submenu as 0
        $classes       = array(
            'sub-menu',
            ( $display_depth % 2 ? 'menu-odd' : 'menu-even' ),
            ( $display_depth >= 2 ? 'sub-sub-menu' : '' ),
            'menu-depth-' . $display_depth
        );
        $class_names = implode(' ', $classes);

        // build html
        $output .= "\n" . $indent . '<ul class="' . $class_names . '">' . "\n";
    }

    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {

        global $wp_query;
        $indent = ( $depth > 0 ? str_repeat("\t", $depth) : '' ); // code indent
        // depth dependent classes
        $depth_classes = array(
            ( $depth == 0 ? 'main-menu-item' : 'sub-menu-item' ),
            ( $depth >= 2 ? 'sub-sub-menu-item' : '' ),
            ( $depth % 2 ? 'menu-item-odd' : 'menu-item-even' ),
            'menu-item-depth-' . $depth
        );
        $depth_class_names = esc_attr( implode( ' ', $depth_classes ) );

        // passed classes
        $classes     = empty($item->classes) ? array() : (array) $item->classes;
        $class_names = esc_attr(implode(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item)));
        $dropdown    = '';
        $caret       = '';
        $parents     = array();

        if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[$args->theme_location] ) ) {
            $menu       = wp_get_nav_menu_object($locations[$args->theme_location]);
            $menu_items = wp_get_nav_menu_items($menu->term_id);
            foreach ($menu_items as $menu_item) {
                if ($menu_item->menu_item_parent != 0) {
                    $parents[] = $menu_item->menu_item_parent;
                }
            }
        }

        if (in_array($item->ID, $parents)) {
            $dropdown = 'dropdown';
            $caret    = ' <i class="fa fa-angle-down"></i>';
        }

        // build html
        $output .= $indent . '<li id="nav-menu-item-' . $item->ID . '" class="' . $dropdown . $depth_class_names . ' ' . $class_names . '">';

        // link attributes
        $attributes  = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
        $attributes .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
        $attributes .= !empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
        $attributes .= !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';

        $item_output = sprintf('%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s', $args->before, $attributes, $args->link_before, apply_filters('the_title', $item->title, $item->ID), $args->link_after . $caret, $args->after);

        // build html
        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }

}
