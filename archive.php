<?php
/**
 * @package _blank
 */

get_header(); ?>

    <main id="main" role="main">

        <h1><?php _e( 'Archive', '_blank' ); ?></h1>

    	<?php while ( have_posts() ) { the_post(); ?>

    	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
                <span class="post-date"><?php the_time( 'j. F Y' ) ?></span>
                <h2><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
            </header>
    		<?php the_content(); ?>
        </article>

        <?php } ?>

    	<nav class="post-navigation">
    		<span class="prev"><?php next_posts_link( __('&larr; Older Entries', '_blank' ) ); ?></span>
    		<span class="next"><?php previous_posts_link( __('Newer Entries &rarr;', '_blank' ) ); ?></span>
    	</nav>

    </main><!-- #main -->

<?php get_sidebar( 'sidebar' );

get_footer(); ?>