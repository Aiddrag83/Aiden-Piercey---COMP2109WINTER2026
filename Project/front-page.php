<?php get_header(); ?>

<section style="padding:40px; text-align:center;">
  <h1>Forging the Future with Steam and Steel</h1>
  <p>Discover mechanical wonders crafted for innovators.</p>
</section>

<section style="padding:40px;">
  <h2>Featured Product</h2>
  <?php echo do_shortcode('[products limit="1" columns="1" visibility="featured"]'); ?>
</section>

<section style="padding:40px;">
  <h2>Shop Products</h2>
  <?php echo do_shortcode('[products limit="6" columns="3"]'); ?>
</section>

<section style="padding:40px;">
  <?php echo do_shortcode('[welcome_msg]'); ?>
</section>

<?php get_footer(); ?>