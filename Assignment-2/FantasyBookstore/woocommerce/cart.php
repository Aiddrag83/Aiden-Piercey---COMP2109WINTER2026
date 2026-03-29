<?php
defined( 'ABSPATH' ) || exit;
get_header( 'shop' ); ?>

<div class="woocommerce-cart-container">
    <h1>Your Adventure Cart</h1>
    <?php do_action( 'woocommerce_before_cart' ); ?>

    <form class="woocommerce-cart-form" action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">
        <?php do_action( 'woocommerce_before_cart_table' ); ?>

        <?php wc_get_template( 'cart/cart-table.php' ); ?>

        <?php do_action( 'woocommerce_after_cart_table' ); ?>
    </form>

    <div class="cart-collaterals">
        <?php do_action( 'woocommerce_cart_collaterals' ); ?>
    </div>

</div>

<?php get_footer( 'shop' ); ?>