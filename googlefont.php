<?php
/**
 * Register style sheet.
 */
function google_fonts() {
    wp_register_style( 'Ubuntu', '//fonts.googleapis.com/css?family=Ubuntu:400,400i,700' );
    wp_enqueue_style( 'Ubuntu' );
}
// Register style sheet.
add_action( 'wp_print_styles', 'google_fonts' );