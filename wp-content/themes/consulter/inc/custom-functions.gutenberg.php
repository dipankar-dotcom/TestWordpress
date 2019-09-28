<?php
// Add backend styles for Gutenberg.
add_action( 'enqueue_block_editor_assets', 'consulter_add_gutenberg_assets' );
/**
 * Load Gutenberg stylesheet.
 */
function consulter_add_gutenberg_assets() {
	// Load the theme styles within Gutenberg.
	wp_enqueue_style( 'consulter-gutenberg-style', get_theme_file_uri( '/css/gutenberg-editor-style.css' ), false );
    wp_enqueue_style( 
        'consulter-gutenberg-fonts', 
        '//fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800,900|Playfair+Display:400,700,900|Muli:300,400,600,700,800,900' 
    ); 
}