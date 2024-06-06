<?php
/**
 * Theme functions and definitions.
 *
 * @package JCH
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

define( 'JCH_VERSION', '2.0.0' );

/**
 * Load child theme scripts & styles.
 *
 * @return void
 */
function jch_scripts_styles() {

	wp_enqueue_style(
		'hello-elementor-child-style',
		get_stylesheet_directory_uri() . '/style.css?env=live',
		[
			'hello-elementor-theme-style',
		],
		JCH_VERSION
	);

}

add_action( 'wp_enqueue_scripts', 'jch_scripts_styles', 20 );

function jch_fix_viewport() {
	return 'width=device-width, initial-scale=1, shrink-to-fit=no, viewport-fit=cover, user-scalable=no, minimal-ui, maximum-scale=1.0, minimum-scale=1.0, target-densitydpi=device-dpi';
}

add_filter( 'hello_elementor_viewport_content', 'jch_fix_viewport' );
