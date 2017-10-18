<?php 

/* Theme setup */
add_action( 'after_setup_theme', 'wpt_setup' );
  function wpt_setup() {  
    //registering nav
	register_nav_menus( array(
		'Primary_menu' => 'Top Nav'
	) );
	//registering logo
	add_theme_support( 'custom-logo' );
} 


/* function wpdocs_custom_excerpt_length( $length ) {
    return 15;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );


function add_theme_scripts() {
  wp_enqueue_style( 'masmn-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );
	
add_theme_support( 'post-thumbnails' ); */

