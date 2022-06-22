<?php 

/*
    ============================== 
        Theme's JS and Styles 
    ==============================
*/
function theme_files() {

    //===== Styles (Example) =====//
    wp_register_style('desktop_theme_styles', get_template_directory_uri() . '/assets/dist/css/index.css', [], 1);
    wp_enqueue_style('desktop_theme_styles');

    wp_register_style('font_awesome', 'https://kit.fontawesome.com/6c639c9033.js', [], 1);
    wp_enqueue_style('font_awesome');

    //===== Js =====//

    //----- Main Js file (Example) -----//
    wp_register_script('theme_main_js', get_template_directory_uri() . '/assets/dist/js/index.js', array(), 1.0, true);
    wp_enqueue_script('theme_main_js');

   

}
add_action('wp_enqueue_scripts', 'theme_files');


function theme_functionality() {

    add_theme_support( 'title-tag' );

    register_nav_menu('primary', 'Primary Menu');

}
add_action('after_setup_theme', 'theme_functionality');

/*
    ============================== 
        Theme's Walker Nav Menu 
    ==============================
*/

require get_template_directory() . '/inc/walker.php';
/* require get_template_directory() . '/inc/test.php'; */