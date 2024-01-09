<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

    add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
    function theme_enqueue_styles()
    {
        wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
        wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
    }

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array(  ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );


// END ENQUEUE PARENT ACTION


function agregar_enlace_admin_menu($items, $args) {

    if ($args->theme_location == 'main-menu') {
      
        if (is_user_logged_in() && current_user_can('administrator')) {
         
            $admin_link = '<li class="nuevo-menu"><a href="' . admin_url() . '">Admin</a></li>';
            
         
            $items = $admin_link . $items;
        }
    }
    return $items;
}
add_filter('wp_nav_menu_items', 'agregar_enlace_admin_menu', 10, 2);

