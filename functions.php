<?php
/**
 * Din functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Din
 * @since Din 1.0.0
 */


if ( ! function_exists( 'din_support' ) ) :

	function din_support() {
		add_theme_support( 'wp-block-styles' );
		add_editor_style( 'assets/css/wp-editor.css' );
	}

endif;

add_action( 'after_setup_theme', 'din_support' );

if ( ! function_exists( 'din_styles' ) ) :

	function din_styles() {
		$ver = wp_get_theme()->get( 'Version' );
		$url = get_template_directory_uri() . '/assets/css/';

		wp_enqueue_style( 'din', $url . 'mobile.css', array(), $ver );
		

	}

endif;

add_action( 'wp_enqueue_scripts', 'din_styles' );

if ( ! function_exists( 'din_editor_styles' ) ) :

	/**
	 * Enqueue editor styles.
	 *
	 * @since Livro 1.0
	 *
	 * @return void
	 */
	function din_editor_styles() {



	}

endif;

add_action( 'admin_init', 'din_editor_styles' );