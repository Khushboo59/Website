<?php
/**
 * Theme functions and definitions
 *
 * @package Gutener Business
 */

require get_stylesheet_directory() . '/inc/customizer/customizer.php';
require get_stylesheet_directory() . '/inc/customizer/loader.php';

if ( ! function_exists( 'gutener_business_enqueue_styles' ) ) :
	/**
	 * @since Gutener Business 1.0.0
	 */
	function gutener_business_enqueue_styles() {
		wp_enqueue_style( 'gutener-business-style-parent', get_template_directory_uri() . '/style.css' );
	}

endif;
add_action( 'wp_enqueue_scripts', 'gutener_business_enqueue_styles', 1 );

function gutener_business_setup() {
	remove_theme_support( 'custom-background' );
}
add_action( 'after_setup_theme', 'gutener_business_setup', 99 );
