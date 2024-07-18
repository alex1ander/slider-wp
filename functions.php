<?php

require_once __DIR__ . '/vendor/autoload.php';

// Initialize Timber.
Timber\Timber::init();



function enqueue_swiper_script() {
    wp_enqueue_script(
        'swiper-bundle-js','https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js'     
    );
}
add_action('wp_enqueue_scripts', 'enqueue_swiper_script');


function enqueue_swiper_style() {
    wp_enqueue_style('main-style', get_stylesheet_uri());
    wp_enqueue_style( 
        'swiper-bundle-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css' 
    );
}
add_action( 'wp_enqueue_scripts', 'enqueue_swiper_style' );

