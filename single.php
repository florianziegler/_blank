<?php
/**
 * @package _blank
 */

get_header(); ?>

    <main id="main" role="main">

    <?php while ( have_posts() ) { the_post(); ?>

    	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        	<header class="entry-header">
                <span class="post-date"><?php the_time( 'j. F Y' ) ?></span>
                <h1><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>
            </header>
            <div class="entry">
                <?php the_content(); ?>
            </div>
        </article>

    	<nav class="post-navigation">
            <span class="prev"><?php previous_post_link( '&larr; %link' ); ?></span>
            <span class="next"><?php next_post_link( '%link &rarr;' ); ?></span>
        </nav>

    <?php } ?>

    </main><!-- #main -->

<?php get_sidebar( 'sidebar' );

get_footer(); ?>