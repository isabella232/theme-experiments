<?php

if ( ! function_exists( 'photo_blocks_support' ) ) :
	function photo_blocks_support()  {

		// Adding support for featured images.
		add_theme_support( 'post-thumbnails' );

		// Adding support for alignwide and alignfull classes in the block editor.
		add_theme_support( 'align-wide' );

		// Adding support for core block visual styles.
		add_theme_support( 'wp-block-styles' );

		// Adding support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );
    }
    add_action( 'after_setup_theme', 'photo_blocks_support' );
endif;

/**
 * Enqueue scripts and styles.
 */
function photo_blocks_scripts() {

	// Enqueue theme stylesheet.
	wp_enqueue_style( 'photo_blocks-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );

	// Enqueue alignments stylesheet.
	wp_enqueue_style( 'photo_blocks-alignments-style', get_template_directory_uri() . '/assets/alignments-front.css', array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'photo_blocks_scripts' );
