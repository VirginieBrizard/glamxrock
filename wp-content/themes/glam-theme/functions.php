<?php 

//CSS include in the HEADER
function load_stylesheets()
{
    //bootstrap stylesheet
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css',
        array(), false, 'all');
    wp_enqueue_style('bootstrap');
    
    //glam stylesheet
    wp_register_style('style', get_template_directory_uri() . '/css/style.css',
    array(), false, 'all');
    wp_enqueue_style('style');

}
add_action('wp_enqueue_scripts', 'load_stylesheets');





//JS include in the FOOTER
function load_js()
{
    //jquery
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.4.1.js', '', 1, true);

    //glam js
    wp_register_script('customjs', get_template_directory_uri() . '/js/script.js', '', 1, true);
    wp_enqueue_script('customjs');
}
add_action('wp_enqueue_scripts', 'load_js');




//ACCES MENU IN WORDPRESS
add_theme_support('menus');

register_nav_menus(
    array(
        'primary_menu' => __('Primary Menu', 'theme'),
        'footer_menu' => __('Footer Menu', 'theme')
    )
    );



//IMAGES
add_theme_support('post-thumbnails');
add_image_size('smallest', 300, 300, true);
add_image_size('largest', 800, 800, true);


// WIDGETS
add_theme_support('widgets');

//Register side bar

function my_sidebars(){
    register_sidebar(
        array( 
            'name' => 'Page Sidebar',
            'id' => 'page-sidebar',
            'before_title' => '<h4 class="widget-title>',
            'after_title' => '</h4>'
        )
    );
        register_sidebar(
        array( 
            'name' => 'Blog Sidebar',
            'id' => ' blog-sidebar',
            'before_title' => '<h4 class="widget-title>',
            'after_title' => '</h4>'
        )
    );
}
add_action('widgets_init', 'my_sidebars');