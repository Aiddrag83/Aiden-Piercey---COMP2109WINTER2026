<?php

function brasshaven_setup() {
    register_nav_menus(array(
        'main-menu' => 'Main Menu'
    ));
}
add_action('after_setup_theme', 'brasshaven_setup');

// CUSTOM POST TYPE
function create_blueprints_post_type() {
    register_post_type('blueprints',
        array(
            'labels' => array(
                'name' => 'Blueprints',
                'singular_name' => 'Blueprint'
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title','editor','thumbnail')
        )
    );
}
add_action('init', 'create_blueprints_post_type');

// SHORTCODE
function welcome_shortcode() {
    return "<h2>Welcome to Brasshaven Industries</h2>";
}
add_shortcode('welcome_msg', 'welcome_shortcode');


add_action('init', 'create_blueprints_post_type');
function custom_message_shortcode() {
    return "<p>Welcome to Brasshaven's finest inventions.</p>";
}
add_shortcode('welcome_msg', 'custom_message_shortcode');