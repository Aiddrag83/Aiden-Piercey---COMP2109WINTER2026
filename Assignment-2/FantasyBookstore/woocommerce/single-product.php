<?php
defined( 'ABSPATH' ) || exit;
get_header( 'shop' ); ?>

<div class="single-product-container">
    <?php
    while ( have_posts() ) : the_post();
        wc_get_template_part( 'content', 'single-product' );
    endwhile;
    ?>
</div>

<?php get_footer( 'shop' ); ?>