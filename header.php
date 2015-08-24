<?php
/**
 * @package _blank
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php
        if ( file_exists( get_template_directory() . '/images/shapes.svg' ) ) {
            include_once( get_template_directory() . '/images/shapes.svg' );
        }
    ?>
    <div id="site-wrap">
        <a id="skip-link" href="#content"><?php _e( 'Skip to content', '_blank' ); ?></a>
        <header id="masthead" class="site-header" role="banner">
            <div id="site-branding">
                <a id="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                    <svg viewBox="0 0 400.878 90.186">
                        <use xlink:href="#blank-logo"></use>
                    </svg>
                    <span><?php bloginfo( 'name' ); ?></span>
                </a>
                <div id="description"><?php bloginfo( 'description' ); ?></div>
                <a id="open-main-navigation" aria-hidden="true" href="#main-navigation"><?php _e( 'Open Menu', '_blank' ); ?></a>
                <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => '', 'items_wrap' => '<nav id="main-navigation" role="navigation"><ul id="%1$s">%3$s</ul></nav><!-- #main-navigation -->', 'fallback_cb' => false ) ); ?>
                <a id="open-searchform" href="#searchform"><?php _e( 'Show search form', '_blank' ); ?></a>
                <?php get_search_form(); ?>
            </div><!-- #site-branding -->
        </header><!-- #masthead .site-header -->
        <div id="content">