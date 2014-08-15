<?php
/**
 * @package _blank
 */

get_header(); ?>

    <main id="main" role="main">

        <section class="nothing">
    		<h1 class="page-title"><?php _e( 'Site not found', '_blank' ); ?></h1>
    		<p><?php _e( 'Error 404 - page does not exist.', '_blank' ); ?></p>
        </section>

    </main><!-- #main -->

<?php get_sidebar( 'sidebar' );

get_footer(); ?>