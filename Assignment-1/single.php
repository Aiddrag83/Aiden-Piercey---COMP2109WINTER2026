<?php get_header(); ?>

<?php
if (have_posts()) :
    while (have_posts()) : the_post();
?>
    <article class="post">
        <h2><?php the_title(); ?></h2>

        <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('large'); ?>
        <?php endif; ?>

        <?php the_content(); ?>
    </article>
<?php
    endwhile;
endif;
?>

<?php get_footer(); ?>
