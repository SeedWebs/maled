<?php
/**
 * Maled functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Maled
 * @since Maled 1.0.0
 */

// THEME SUPPORT
if ( ! function_exists( 'maled_support' ) ) :
	function maled_support() {
		add_theme_support( 'wp-block-styles' );
		add_editor_style( 'assets/css/wp-editor.css' );
	}
endif;
add_action( 'after_setup_theme', 'maled_support' );

// ENQUEUE CSS
if ( ! function_exists( 'maled_styles' ) ) :
	function maled_styles() {
		$ver = wp_get_theme()->get( 'Version' );
		$url = get_template_directory_uri() . '/assets/css/';
		wp_enqueue_style('maled-mobile', $url . 'mobile.css', array(), $ver );
		wp_enqueue_style('maled-desktop', $url . 'desktop.css', array(), $ver , '(min-width: 992px)');
	}
endif;
add_action( 'wp_enqueue_scripts', 'maled_styles' );

// BLOCK STYLE
if ( ! function_exists( 'maled_block_styles' ) ) :
	function maled_block_styles() {
		$ver = wp_get_theme()->get( 'Version' );
        $url = get_template_directory_uri() . '/assets/js/';
		wp_enqueue_script('maled-block-styles',  $url . 'block-styles.js' , array( 'wp-blocks' ), $ver, true );
	}
endif;
add_action( 'enqueue_block_editor_assets', 'maled_block_styles' );

// REMOVE "CATEGORY: ", "TAG: ", "TAXONOMY: " FROM ARCHIVE TITLE
function dim_get_the_archive_title($title) {
    if (is_category()) {
        $title = single_cat_title('', false);
    } elseif (is_tag()) {
        $title = single_tag_title('', false);
    } elseif (is_post_type_archive()) {
        $title = post_type_archive_title('', false);
    } elseif (is_author()) {
        $title = get_the_author();
    } elseif (is_tax()) {
        $title = single_term_title('', false);
    }
    return $title;
}
add_filter('get_the_archive_title', 'dim_get_the_archive_title');