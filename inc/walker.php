<?php

class Walker_Nav_Primary_Lothliel extends Walker_Nav_Menu {

    function start_lvl( &$output, $depth = 0, $args = array()) {
        $indent = str_repeat("\t", $depth);
    $output .= "\n$indent<ul>\n";
    }

    function end_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul>\n";
    }

    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {

        $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

        $class_names = $value = '';

        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;

        /* Add Tailwind class so that the current page is underlined by the :after element */
        if (in_array('current-menu-item', $classes)) {
            $classes[] = 'after:w-full';
        } else {
            $classes[] = 'after:w-0';
        }

        /*===== TODO: Implement submenus =====*/
        /* Check for children */

        /* $children = get_posts(array('post_tye' => 'nav_menu_item', 'nopaging' => true, 'numberposts' => 1, 'meta-key' => '_menu_item_menu_item_parent', 'meta_value' => $item->ID));
        if (!empty($children)) {
            $classes[] = 'has-sub';
        } */
        if ( $args->has_children )
        $class_names .= ' dropdown';

         /* Grab the default wp nav classes */
         $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ));

        /* Show Tailwind's utility classes... */
        $class_names = ' class="' . esc_attr( $class_names ) . ' hover:cursor-pointer after:content-[\'\'] after:block after:h-[3px] after:bg-black hover:after:animate-grow' . '"';


        $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
        $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

        /* Prepare the li items */
        $output .= $indent . '<li' . $id . $value . $class_names . '>';

        /* Debugging... */
        /* var_dump($item); */

        /* These are going to be the attributes for the a elements */
        /* If the item does not have an attr_title, leave it blank (same for target and rel) */
        $attributes = ! empty( $item->attr_title ) ? ' title="' . esc_attr( $item->attr_title ) . '"' : '';
        $attributes .= ! empty( $item->target ) ? ' target="' . esc_attr( $item->target ) . '"' : '';
        $attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr( $item->xfn ) . '"' : '';
        $attributes .= ! empty( $item->url ) ? ' href="' . esc_attr( $item->url ) . '"' : '';

        $item_output = $args->before;
        $item_output .= '<a' . $attributes . '>';
        $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }

    function end_el( &$output, $item, $depth = 0, $args = array() ) {
        $output .= "</li>\n";
    }
}