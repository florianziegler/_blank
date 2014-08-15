<?php
/**
 * @package _blank
 */

get_header(); ?>
    
    <main id="main" role="main">

        <?php while ( have_posts() ) { the_post(); ?>

    	    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    		    <?php the_content(); ?>
            </article>

        <?php } ?>

    </main><!-- #main -->

<?php get_sidebar( 'sidebar' );

get_footer(); ?>