<?php
function theme_tp_enqueue_styles() { 
    wp_enqueue_style('normalize', get_stylesheet_directory_uri() . '/normalize.css'); 
    wp_enqueue_style('main-style', get_stylesheet_uri(), array('normalize'), filemtime(get_stylesheet_directory() . '/style.css')); 
} 
add_action('wp_enqueue_scripts', 'theme_tp_enqueue_styles');

?>