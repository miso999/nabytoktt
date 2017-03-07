<?php

namespace Roots\Sage\Extras;

use Roots\Sage\Setup;

/**
 * Add <body> classes
 */
function body_class($classes) {
  // Add page slug if it doesn't exist
  if (is_single() || is_page() && !is_front_page()) {
    if (!in_array(basename(get_permalink()), $classes)) {
      $classes[] = basename(get_permalink());
    }
  }

  // Add class if sidebar is active
  if (Setup\display_sidebar()) {
    $classes[] = 'sidebar-primary';
  }

  return $classes;
}
add_filter('body_class', __NAMESPACE__ . '\\body_class');

/**
 * Clean up the_excerpt()
 */
function excerpt_more() {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'sage') . '</a>';
}
add_filter('excerpt_more', __NAMESPACE__ . '\\excerpt_more');


function ImagePath() {
  return get_template_directory_uri()."/dist/images/";
}


function load_fonts() {
  wp_register_style('googleFonts', 'https://fonts.googleapis.com/css?family=Rokkitt%3A100%2C300%2C400%2C500%2C700%7CNoto+Serif%3A100%2C300%2C400%2C500%2C700');
  wp_enqueue_style( 'googleFonts');
  }

add_action( 'wp_head', __NAMESPACE__ . '\\load_fonts' , 1);



