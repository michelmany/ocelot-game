<?php

/**
 * Register Nav Menu
 */

if ( ! function_exists( 'ocelot_register_nav_menu' ) ) {
 
    function ocelot_register_nav_menu(){
        register_nav_menus( array(
            'primary_menu' => __( 'Primary Menu', 'ocelot' ),
            'footer_menu'  => __( 'Footer Menu', 'ocelot' ),
        ) );
    }
    add_action( 'after_setup_theme', 'ocelot_register_nav_menu', 0 );
}

/**
 * Add Options Page
 */

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));	
}