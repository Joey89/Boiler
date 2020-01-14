<?php 
/*
	@package Boiler
	==========
	theme-support
	==========
*/


add_theme_support( 'title-tag' );
$formats = array( 'aside', 'gallery', 'image', 'video', 'audio' );
add_theme_support( 'post-formats', $formats );
add_theme_support('post-thumbnails');
add_theme_support( 'custom-background' );
add_theme_support( 'custom-header' );

/*
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );
*/
?>