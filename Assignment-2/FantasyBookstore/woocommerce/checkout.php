<?php
defined( 'ABSPATH' ) || exit;
get_header( 'shop' ); ?>

<div class="woocommerce-checkout-container">
    <h1>Prepare Your Adventure</h1>
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            the_content();
        endwhile;
    endif;
    ?>
</div>

<?php get_footer( 'shop' ); ?>