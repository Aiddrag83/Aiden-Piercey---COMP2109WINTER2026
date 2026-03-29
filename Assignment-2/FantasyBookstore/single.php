<?php
get_header(); ?>

<div class="single-post-container">
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <h1 class="post-title"><?php the_title(); ?></h1>
                <div class="post-meta">
                    Posted on <?php the_date(); ?> by <?php the_author(); ?>
                </div>
                <div class="post-content">
                    <?php the_content(); ?>
                </div>
            </article>
        <?php endwhile;
    else :
        echo '<p>No posts found.</p>';
    endif;
    ?>
</div>

<style>
.single-post-container {
    max-width: 800px;
    margin: 50px auto;
    padding: 20px;
    background: #2e2e4d;
    color: #f5f0e1;
    border-radius: 10px;
}
.post-title {
    font-family: 'Cinzel', serif;
    color: gold;
    font-size: 2.5em;
    margin-bottom: 10px;
}
.post-meta {
    font-family: 'Cormorant Garamond', serif;
    font-size: 0.9em;
    color: #d4af37;
    margin-bottom: 20px;
}
.post-content {
    font-family: 'Cormorant Garamond', serif;
    line-height: 1.8;
}
</style>

<?php get_footer(); ?>