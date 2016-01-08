<?php

class Eshopper_Extra_Walker_Nav_Menu extends Walker_Nav_Menu {

    function start_lvl( &$output, $depth = 0, $args = array() ) {

        $indent  = ( $depth > 0 ? str_repeat("\t", $depth) : '' );
        $output .= "\n" . $indent . "\n";
    }

    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {

        $indent  = ( $depth > 0 ? str_repeat("\t", $depth) : '' ); // code indent
        $caret   = '';
        $output .= $indent . '<li>';

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
