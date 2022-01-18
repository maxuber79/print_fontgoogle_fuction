<?php

if ( ! defined( 'THEME_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'THEME_VERSION', '1.0.0' );
}


/**
 * Register style sheet.
 */
function google_fonts() {
    wp_register_style( 'name_font', 'URL googleapifont', array(), THEME_VERSION );
    wp_enqueue_style( 'name_font' );
}
// Register style sheet.
add_action( 'wp_print_styles', 'google_fonts' );