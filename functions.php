<?php

function mytheme_post_thumbnails() {
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'mytheme_post_thumbnails' );


function wpb_adding_scripts() {
    wp_register_script('my_amazing_script', get_template_directory_uri() . '/dist/main.js', array(), '1.8', true);
    wp_enqueue_script('my_amazing_script');
}

add_action( 'wp_enqueue_scripts', 'wpb_adding_scripts' );
