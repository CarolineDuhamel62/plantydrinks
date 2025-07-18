<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }

endif;
    add_filter( 'wp_nav_menu_items', 'add_extra_item_to_nav_menu', 10, 2 );

    function add_extra_item_to_nav_menu( $items, $args ) {
    if (is_user_logged_in() && $args->menu == "nous-rencontrer") {
        $admin_link = '<li class="menu-item"><a  class="hfe-menu-item" href="' . admin_url() . '">Admin</a></li>';

        $items_array = explode( '</li>', $items );
        array_splice( $items_array, 1, 0, $admin_link );
        $items = implode( '</li>', $items_array );
    }
    return $items;
}


// END ENQUEUE PARENT ACTION
