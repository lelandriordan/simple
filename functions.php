<?php
/**
 * Simple's functions
 */

if ( ! function_exists( 'simple_setup' ) ) :
/**
 * Set up theme defaults
 */
function simple_setup() {
  // Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );
	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

  /*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

  // This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'simple' ),
	) );

}
endif;
add_action( 'after_setup_theme', 'simple_setup' );

/**
 * Enqueue scripts and styles.
 */
function simple_scripts() {
  wp_enqueue_style( 'dashicons' );

  wp_enqueue_style( 'simple-fonts', 'https://fonts.googleapis.com/css?family=Merriweather:400,400italic,700|Montserrat:700,400' );

  wp_enqueue_style( 'simple-style', get_stylesheet_uri() );



  wp_enqueue_script( 'jquery' );

  wp_enqueue_script( 'simple-nav', get_template_directory_uri() . '/assets/js/app.js', array( 'jquery' ), '0.0.1', true );
}
add_action( 'wp_enqueue_scripts', 'simple_scripts' );


/**
 * Custom template tags
 */
require get_template_directory() . '/inc/template-tags.php';
