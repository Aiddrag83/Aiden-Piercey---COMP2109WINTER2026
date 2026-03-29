<?php
function fantasybookstore_menus() {
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'fantasybookstore'),
    ));
}
add_action('after_setup_theme', 'fantasybookstore_menus');
?>