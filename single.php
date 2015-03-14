<?php
/**
 * @package _blank
 */

get_header(); ?>

    <main id="main" role="main">

    <?php while ( have_posts() ) { the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
                <span class="post-date"><?php the_time( get_option( 'date_format' ) ) ?></span>
                <h1><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>
            </header>
            <div class="entry">
                <?php the_content(); ?>
            </div>
        </article>

        <?php the_post_navigation( array(
            'prev_text' => _x( '<span class="meta-nav">Previous <span class="screen-reader-text">post:</span></span><span class="post-title">%title</span>', 'Previous post link', '_blank' ),
            'next_text' => _x( '<span class="meta-nav">Next <span class="screen-reader-text">post:</span></span><span class="post-title">%title</span>', 'Next post link', '_blank' ),
        ) ); ?>

    <?php } ?>

    </main><!-- #main -->

<?php get_sidebar( 'sidebar' );

get_footer(); ?>