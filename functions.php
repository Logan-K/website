<?php
/* FUNCTIONS */

wp_enqueue_script( 'jquery' );

function js_scripts() {
    wp_register_script( 'parallax-scroll', get_template_directory_uri() . '/assets/js/parallax.min.js', array(), 1.0, false );
    wp_enqueue_script( 'parallax-scroll' );
    wp_register_script( 'navbar' , get_template_directory_uri() . '/assets/js/navbar.js', array(), 1.0, false );
    wp_enqueue_script( 'navbar' );
    wp_register_script( 'particles', get_template_directory_uri() . '/assets/js/particles/jquery.particleground.js', array(), '', false );
    wp_enqueue_script( 'particles' );
}
add_action( 'wp_enqueue_scripts', 'js_scripts' );

function css_files() {
    wp_register_style( 'main_stylesheet', get_template_directory_uri() . '/style.css', array(), 1.0, false );
    wp_enqueue_style('main_stylesheet');
}
add_action('wp_enqueue_scripts', 'css_files');

?>