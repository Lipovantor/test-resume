<?php

function enqueue_styles_and_scripts() {
  wp_enqueue_style( 'variables', get_template_directory_uri() . '/css/variables.css' );
  wp_enqueue_style( 'fonts', get_template_directory_uri() . '/css/fonts.css' );
  wp_enqueue_style( 'commons', get_template_directory_uri() . '/css/commons.css' );
  wp_enqueue_style( 'styles', get_template_directory_uri() . '/css/styles.css' );
}

add_action( 'wp_enqueue_scripts', 'enqueue_styles_and_scripts' );