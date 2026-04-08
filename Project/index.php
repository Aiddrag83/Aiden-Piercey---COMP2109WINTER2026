<?php
/**
 * Index.php
 * Fallback template for Brasshaven Theme
 */

get_header(); ?>

<div class="site-content">
    <?php if ( have_posts() ) : ?>
        <div class="posts-container">
            <?php while ( have_posts() ) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div class="post-meta">
                        <span class="posted-on"><?php the_date(); ?></span> |
                        <span class="category"><?php the_category(', '); ?></span>
                    </div>
                    <div class="entry-content">
                        <?php the_excerpt(); ?>
                    </div>
                    <a class="button" href="<?php the_permalink(); ?>">Read More</a>
                </article>
            <?php endwhile; ?>

            <div class="pagination">
                <?php
                    echo paginate_links( array(
                        'prev_text' => '&laquo; Previous',
                        'next_text' => 'Next &raquo;',
                    ) );
                ?>
            </div>
        </div>
    <?php else : ?>
        <p>No posts found.</p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>