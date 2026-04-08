<?php get_header(); ?>

<div style="padding:40px;">
<?php
if (have_posts()) :
  while (have_posts()) : the_post();
    the_title('<h1>', '</h1>');
    the_content();
  endwhile;
endif;
?>
</div>

<?php get_footer(); ?>