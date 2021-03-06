<?php
/**
 * @package _blank
 */

get_header(); ?>

    <main id="main" role="main">

    <?php if ( have_posts() ) { ?>

    	<h1><?php _e( 'Search', 'blank' ); ?></h1>

    	<?php while ( have_posts() ) { the_post(); ?>

    	<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
            <header class="entry-header">
                <h2><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
            </header>
    		<?php the_excerpt(); ?>
        </article>

        <?php }

        // Previous/next page navigation
		the_posts_pagination( array(
			'prev_text' => __( '&larr; previous page', '_blank' ),
			'next_text' => __( 'next page &rarr;', '_blank' ),
			'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', '_blank' ) . ' </span>',
		) );

        } else { ?>

        <section class="nothing">
    	    <h1><?php _e( 'Nothing found', '_blank' ); ?></h1>
            <?php get_search_form(); ?>
        </section>

    <?php } ?>

    </main><!-- #main -->   

<?php get_sidebar( 'sidebar' );

get_footer(); ?>