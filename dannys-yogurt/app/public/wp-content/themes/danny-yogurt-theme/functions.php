<?php

function load_stylesheets(){
    wp_register_style('bootstrap',get_template_directory_uri().'/css/bootstrap.min.css',array(), false, 'all');
    wp_register_style('maincss',get_template_directory_uri().'/css/main.css',array(), false, 'all');
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('maincss');
}

function loadjs(){
    wp_register_script('jquery1', get_template_directory_uri().'/js/jquery-3.6.0.min.js','',1,true);
    wp_register_script('customjs', get_template_directory_uri().'/js/main.js',array('jquery1'),false, true);
    wp_register_script('bootstrapscript', get_template_directory_uri().'/js/bootstrap.min.js',array('jquery1'),false, true);
    wp_enqueue_script('jquery1');
    wp_enqueue_script('bootstrapscript');
    wp_enqueue_script('customjs');
}

function features(){
    add_theme_support('title-tag');
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
}

add_action('wp_enqueue_scripts','load_stylesheets');
add_action('wp_enqueue_scripts','loadjs');
add_action('after_setup_theme','features');
remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );

?>

