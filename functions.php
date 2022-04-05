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
		wp_enqueue_style( 'din-mobile', $url . 'mobile.css', array(), $ver );
		wp_enqueue_style('din-desktop', $url . 'desktop.css', array(), $ver , '(min-width: 992px)');
	}
endif;
add_action( 'wp_enqueue_scripts', 'din_styles' );

//  Remove "Category: ", "Tag: ", "Taxonomy: " from archive title
function dim_get_the_archive_title($title) {
    if (is_category()) {
        $title = single_cat_title('', false);
    } elseif (is_tag()) {
        $title = single_tag_title('', false);
    } elseif (is_post_type_archive()) {
        $title = post_type_archive_title('', false);
    } elseif (is_author()) {
        $title = '<span class="vcard">' . get_the_author() . '</span>';
    } elseif (is_tax()) {
        $title = single_term_title('', false);
    }
    return $title;
}
add_filter('get_the_archive_title', 'dim_get_the_archive_title');