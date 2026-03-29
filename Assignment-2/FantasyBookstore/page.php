<?php
get_header(); ?>

<div class="page-container">
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <h1 class="page-title"><?php the_title(); ?></h1>
                <div class="page-content">
                    <?php the_content(); ?>
                </div>
            </article>
        <?php endwhile;
    else :
        echo '<p>No content found.</p>';
    endif;
    ?>
</div>

<style>
.page-container {
    max-width: 800px;
    margin: 50px auto;
    padding: 20px;
    background: #2e2e4d;
    color: #f5f0e1;
    border-radius: 10px;
}
.page-title {
    font-family: 'Cinzel', serif;
    color: gold;
    font-size: 2.5em;
    margin-bottom: 20px;
}
.page-content {
    font-family: 'Cormorant Garamond', serif;
    line-height: 1.8;
}
</style>

<?php get_footer(); ?>