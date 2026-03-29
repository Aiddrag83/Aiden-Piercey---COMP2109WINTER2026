<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="site-header">
    <div class="header-top">
        <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>">Fantasy Bookstore</a></h1>
        <nav class="main-navigation">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_class'     => 'nav-menu',
            ));
            ?>
        </nav>
        <div class="header-cart">
            <a href="<?php echo wc_get_cart_url(); ?>">
                🛒 Cart (<?php echo WC()->cart->get_cart_contents_count(); ?>)
            </a>
        </div>
    </div>
</header>

<style>
.site-header {
    background: #2e2e4d;
    color: #f5f0e1;
    padding: 20px;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: center;
}
.site-title a {
    font-family: 'Cinzel', serif;
    font-size: 2em;
    color: gold;
    text-decoration: none;
}
.nav-menu {
    list-style: none;
    display: flex;
    gap: 20px;
}
.nav-menu li a {
    color: #f5f0e1;
    text-decoration: none;
    font-weight: bold;
}
.nav-menu li a:hover {
    color: gold;
}
.header-cart a {
    background: gold;
    color: #1b1b2f;
    padding: 10px 20px;
    border-radius: 10px;
    text-decoration: none;
    font-weight: bold;
}
.header-cart a:hover {
    transform: scale(1.05);
    transition: all 0.3s ease;
}
</style>