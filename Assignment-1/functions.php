<?php
/* Functions for Assignment-1 */
function assignmentone_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    register_nav_menus(array(
        'primary' => __('Primary Menu', 'assignmentone'),
    ));
}

add_action('after_setup_theme', 'assignmentone_setup');

/* Enqueue stylesheet */
function assignmentone_styles() {
    wp_enqueue_style('assignmentone-style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'assignmentone_styles');
