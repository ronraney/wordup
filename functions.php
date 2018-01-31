<?php
/**
 * Theme Functions
 */
 /*Add image support*/
add_theme_support( 'post-thumbnails' );
add_image_size( 'post-feature', 450, 9999 ); // 300 pixels wide (and unlimited height)

// WordPress Titles
add_theme_support( 'title-tag' );

// Hopefully add admin area to create menus 
function wpb_custom_new_menu() {
  register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
}
add_action( 'init', 'wpb_custom_new_menu' );



// Enqueue Styles and Scripts
 
function word_up_styles() {
	wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'style', get_stylesheet_directory_uri() . '/style.css' );
    wp_enqueue_style( 'offcanvas', get_stylesheet_directory_uri() . '/css/offcanvas.css' );
    wp_enqueue_style( 'load-fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', false );
    wp_enqueue_style( 'fonts', 'http://fonts.googleapis.com/css?family=Raleway|Open+Sans|Merriweather', false ); 
}
add_action ('wp_enqueue_scripts', 'word_up_styles');
	
function word_up_scripts() {

	wp_enqueue_script( 'bootstrap', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ) );
    wp_enqueue_script( 'popper', get_stylesheet_directory_uri() . '/js/popper.min.js', array( 'jquery' ) );
    wp_enqueue_script( 'holder', get_stylesheet_directory_uri() . '/js/holder.min.js', array( 'jquery' ) );
    wp_enqueue_script( 'offcanvas', get_stylesheet_directory_uri() . '/js/offcanvas.js', array( 'jquery' ) );
}

add_action ('wp_enqueue_scripts', 'word_up_scripts');
?>
