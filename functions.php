<?php
// Enqueue styles and scripts
function nicolas_guapo_enqueue_scripts() {
    wp_enqueue_style('main-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'nicolas_guapo_enqueue_scripts');

// Support for dynamic title tags
add_theme_support('title-tag');

// Support for post thumbnails
add_theme_support('post-thumbnails');

function nicolas_guapo_setup() {
    register_nav_menus(array(
        'main-menu' => __('Main Menu', 'nicolas_guapo'),
    ));
}
add_action('after_setup_theme', 'nicolas_guapo_setup');