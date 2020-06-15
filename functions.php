<?php

function wp_moderntech_scripts() {
    wp_enqueue_style(
		'style',
		get_stylesheet_uri()
	);
	wp_enqueue_style(
		'bootstrap-material',
		get_template_directory_uri() . '/assets/css/bootstrap-material-design.min.css'
	);
    wp_enqueue_script(
		'jquery-js',
		get_template_directory_uri() . '/assets/js/jquery.min.js',
		array(),
		'3.5.1',
		true
	);
	wp_enqueue_script(
		'popper',
		get_template_directory_uri() . '/assets/js/popper.js',
		array(),
		'1.12.6',
		true
	);
	wp_enqueue_script(
		'bmd',
		get_template_directory_uri() . '/assets/js/bootstrap-material-design.js',
		array(),
		'1.0.0',
		true
	);
}
add_action( 'wp_enqueue_scripts', 'wp_moderntech_scripts' );