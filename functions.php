<?php

/*
 * Register menus
 * */

function register_my_menus() {
	register_nav_menus(
		array(
			'header-menu' => "Menu nagłówka",
			'footer-menu' => "Menu stopki"
		)
	);
}
add_action( 'init', 'register_my_menus' );

/*
 * Enueue assets
 * */

function dev_wp_enqueue_assets() {
	wp_enqueue_style( 'theme-main-css', get_stylesheet_directory_uri() . '/style.css', array(), time());
	wp_enqueue_script( 'theme-main-js', get_stylesheet_directory_uri() . '/assets/js/main.js', array(), time() );

	//wp_enqueue_style( 'name', 'url');

	wp_enqueue_style( 'font-awesome', 'https://kit-free.fontawesome.com/releases/latest/css/free.min.css');
	wp_enqueue_style( 'fontawesome-shims', 'https://kit-free.fontawesome.com/releases/latest/css/free-v4-shims.min.css');
	wp_enqueue_style( 'font-awesome', 'https://use.fontawesome.com/releases/v5.0.8/css/all.css'); /*FONT AWESOME*/
  
	//wp_enqueue_style( 'iconmonstr', 'https://cdn.iconmonstr.com/1.3.0/css/iconmonstr-iconic-font.min.css'); /* iconmonstr */
	//wp_enqueue_style( 'linearicons', 'https://cdn.linearicons.com/free/1.0.0/icon-font.min.css'); /*LINEARICONS*/
}

add_action( 'wp_enqueue_scripts', 'dev_wp_enqueue_assets', 30 );


/*
 * Allow svg uploads
 * */

function cc_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');
