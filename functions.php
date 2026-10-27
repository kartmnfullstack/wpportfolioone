<?php
function add_bootstrap(){
    wp_enqueue_style('customcss', get_stylesheet_directory_uri() . '/style.css');
    wp_register_style('bootstrap', get_stylesheet_directory_uri() . '/bootstrap.min.css', array(), '5.3', 'all');
    wp_register_script('js', get_stylesheet_directory_uri() . '/bootstrap.bundle.min.js', array(), '5.3', true);
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('childthemecss', get_stylesheet_uri(), array('customcss', 'bootstrap'), '1.0');    
    wp_enqueue_script('js');
}

add_action('wp_enqueue_scripts', 'add_bootstrap');
?>