<?php 
/*
	Enqueue styles and js files
*/

	function Boiler_enqueue(){
		//Styles
		//wp_enqueue_style(handle, src,  deps, ver, media );
		wp_enqueue_style('mainStyle', get_template_directory_uri() . '/assets/css/main.css', '', '0.0.1', '' );
		//Scripts
		//wp_enqueue_script(handle, src,  deps, ver, footer );
		wp_enqueue_script('mainJS', get_template_directory_uri() . '/assets/js/main.js',  array("jQuery"), "0.0.1", true );
	}
	add_action('wp_enqueue_scripts', 'Boiler_enqueue')
 ?>