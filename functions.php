<?php
/**
 * @package _blank
 */

// Load textdomain
function _blank_load_theme_textdomain() {
    load_theme_textdomain( '_blank', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', '_blank_load_theme_textdomain' );


// Add theme support for post thumbnails, and html 5 galleries and captions!
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'html5', array( 'gallery', 'caption' ) );
add_theme_support( 'title-tag' );


// Setup the widget area
register_sidebar(array(
	'name'          => __( 'Sidebar', '_blank' ),
	'id'            => 'sidebar',
	'description'   => __( 'Displayed on the right, next to the main content.', '_blank' ),
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget'  => '</aside>',
	'before_title'  => '<span class="widgettitle">',
	'after_title'   => '</span>',
));


// A useful function to check if a page is a child page of another page
function is_tree( $pageid ) {
	global $post;
	if ( is_page() && ( $post->post_parent == $pageid || is_page( $pageid ) ) ) { 
		return true;
    } else { 
		return false;
    }
}


// A useful function to add the language code as a body class (works with WPML)
// if ( defined( ICL_LANGUAGE_CODE ) ) {
//     function add_language_body_class( $classes ) {
//         $classes[] = ICL_LANGUAGE_CODE;
//         return $classes;
//     }
//     add_filter( 'body_class', 'add_language_body_class' );
// }


// Setup Navigation Menus
function register_my_menus() {
    register_nav_menus( array(
        'primary' => __( 'Primary Navigation', '_blank' ),
        'footer' => __( 'Footer Navigation', '_blank' )
    ) );
}
add_action( 'init', 'register_my_menus' );


// Replace standard caption shortcode (we only need the <figure> version), remove inline style width
add_shortcode( 'wp_caption', '_blank_img_caption_shortcode' );
add_shortcode( 'caption', '_blank_img_caption_shortcode' );

function _blank_img_caption_shortcode( $attr, $content = null ) {

	if ( ! isset( $attr['caption'] ) ) {
		if ( preg_match( '#((?:<a [^>]+>\s*)?<img [^>]+>(?:\s*</a>)?)(.*)#is', $content, $matches ) ) {
			$content = $matches[1];
			$attr['caption'] = trim( $matches[2] );
		}
	}

	$output = apply_filters( 'img_caption_shortcode', '', $attr, $content );
	if ( $output != '' ) {
		return $output;
    }

	$atts = shortcode_atts( array(
		'align'	  => 'alignnone',
		'width'	  => '',
		'caption' => '',
		'class'   => '',
	), $attr, 'caption' );

	$class = trim( 'wp-caption ' . $atts['align'] . ' ' . $atts['class'] );

	return '<figure class="' . esc_attr( $class ) . '">'
		. do_shortcode( $content ) . '<figcaption class="wp-caption-text">' . $atts['caption'] . '</figcaption></figure>';
}


// Enqueue scripts and styles
function _blank_init() {
    if ( ! is_admin() ) {
        //wp_register_style( 'googlefonts', 'http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,300italic,600,600italic,700,700italic,800,800italic' );
        //wp_enqueue_style('googlefonts');
        wp_enqueue_script( 'modernizer', get_template_directory_uri() . '/js/vendor/modernizr.min.js', array( 'jquery' ), '2014-08-08', true );
        wp_register_style( '_blank', get_stylesheet_directory_uri() . '/css/blank.css' );
        wp_enqueue_style( '_blank' );
        wp_enqueue_script( '_blank', get_template_directory_uri() . '/js/main.min.js', array( 'jquery', 'jquery-effects-slide' ), '2014-08-08', true );
	}
}
add_action( 'init', '_blank_init' );

?>