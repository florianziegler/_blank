<?php
/**
 * @package _blank
 */

get_header(); ?>

    <main id="main" role="main">

        <h1><?php _e( 'News', '_blank' ); ?></h1>

    	<?php while ( have_posts() ) { the_post(); ?>

    	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
                <span class="post-date"><?php the_time( get_option( 'date_format' ) ) ?></span>
                <h2><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
            </header>
    		<?php the_content(); ?>
        </article>

    	<?php }

        // Previous/next page navigation
		the_posts_pagination( array(
			'prev_text' => __( '&larr; previous page', '_blank' ),
			'next_text' => __( 'next page &rarr;', '_blank' ),
			'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', '_blank' ) . ' </span>',
		) );

        ?>

    </main><!-- #main -->
    
<?php get_sidebar( 'sidebar' );

get_footer(); ?>