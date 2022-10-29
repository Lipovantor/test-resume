<?php

function enqueue_styles_and_scripts() {
  if(is_front_page()) {
    wp_enqueue_style( 'home-styles', get_stylesheet_directory_uri() . '/style.css' );

    
  }
}

add_action( 'wp_enqueue_scripts', 'enqueue_styles_and_scripts' );