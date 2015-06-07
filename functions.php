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

}
endif;
add_action( 'after_setup_theme', 'simple_setup' );

/**
 * Enqueue scripts and styles.
 */
function simple_scripts() {
  wp_enqueue_style( '_s-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'simple_scripts' );
