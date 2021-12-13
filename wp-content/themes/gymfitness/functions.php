<?php


//menu de naveacion, para agregar más utilizar el arreglo
function gymfitness_menu()
{
    register_nav_menus(array(
        'menu-principal' => __('Menu Principal', 'gymfitness')
    ));
}


add_action('init', 'gymfitness_menu');

//scripts y styles
function gymfitness_scripts_styles()
{
    //hoja de estilos normalize
    wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.1');

    wp_enqueue_style('slicknavCSS', get_template_directory_uri() . '/css/slicknav.min.css', array(), '1.0.0');

    wp_enqueue_style('GoogleFonts', "https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@400;600;700;900&family=Staatliches&display=swap", array(), '1.0.0');

    //hoja de estilos principal
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize', 'GoogleFonts'), '1.0.0');

    wp_enqueue_script('slicknavJS', get_template_directory_uri() . '/js/jquery.slicknav.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery', 'slicknavJS'), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'gymfitness_scripts_styles');
