<?php get_header(); ?>

<section style="text-align:center; margin-bottom:80px;">
    <h1 style="font-size:3.5rem;">Aiden</h1>
    <p style="color:#f5d58c; letter-spacing:2px;">
        Light • Memory • Connection
    </p>
</section>

<h2>The Story I’m Telling</h2>
<p>
I'm a creative editor and designer with a focus on emotions, pace, and mood. 
I think I can make a difference in the online world, especially in film editing and web development.
</p>

<h2>Crafting Light From Code</h2>
<p>
I have learned how to create WordPress theme from scratch all along this programme.
Using HTML, CSS, PHP, and content dynamically. I enjoy combining structure with
creativity to shape immersive designs.
</p>

<h2>Moments That Matter</h2>
<p>
I concentrate on the creation of experiences that work with emotions, using contrast, rhythm,
and visual storytelling skills that are gained from editing and creative media. 
Next, I intend to keep improving my skills in creativity and technology after graduating 
in the field of web development, editing, and/or design.
</p>

<h2>Where the Path Leads</h2>
<p>
I intend to keep improving my skills in creativity and technology after graduating 
in the field of web development, editing, and/or design.
</p>

<h2>Recent Posts</h2>

<?php
$query = new WP_Query(array(
    'post_type' => 'post',
    'posts_per_page' => 3
));

if ($query->have_posts()) :
    while ($query->have_posts()) : $query->the_post();
?>
    <article class="post">
        <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('large'); ?>
        <?php endif; ?>

        <h3><?php the_title(); ?></h3>
        <?php the_excerpt(); ?>
    </article>
<?php
    endwhile;
    wp_reset_postdata();
endif;
?>

<?php get_footer(); ?>
