<?php
/* FUNCTIONS */

wp_enqueue_script( 'jquery' );

function js_scripts() {
    wp_register_script( 'parallax-scroll', get_template_directory_uri() . '/assets/js/parallax.min.js', array(), 1.0, false );
    wp_enqueue_script( 'parallax-scroll' );
}
add_action( 'wp_enqueue_scripts', 'js_scripts' );

?>