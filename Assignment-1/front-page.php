<?php get_header(); ?>

<section style="text-align:center; margin-bottom:80px;">
    <h1 style="font-size:3.5rem;">Aiden</h1>
    <p style="color:#f5d58c; letter-spacing:2px;">
        Light • Memory • Connection
    </p>
</section>

<h2>The Story I’m Telling</h2>
<p>
I’m a creative editor and designer focused on emotion, pacing, and atmosphere.
Through film editing and web development, I aim to create meaningful digital
experiences that connect with people.
</p>

<h2>Crafting Light From Code</h2>
<p>
Throughout this program, I’ve learned how to build WordPress themes from scratch
using HTML, CSS, PHP, and dynamic content. I enjoy combining structure with
creativity to shape immersive designs.
</p>

<h2>Moments That Matter</h2>
<p>
I focus on designing experiences that guide emotion through contrast, rhythm,
and visual storytelling—skills developed through editing and creative media.
</p>

<h2>Where the Path Leads</h2>
<p>
After graduation, I plan to continue developing my creative and technical skills,
pursuing opportunities in web development, editing, or interactive design.
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
