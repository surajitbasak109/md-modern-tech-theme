<?php
/**
 * Modern Tech Blog Theme Customizer
 *
 * @package Modern_Tech_Blog
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

function moderntechblog_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport        = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
	$wp_customize->get_setting( 'header_texcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blgname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'moderntechcetblog_customize_partial_blogname',
			)
		);
	}
}

add_action( 'customize_register', 'moderntechblog_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function moderntechblog_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function moderntechblog_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function moderntechblog_customize_preview_js() {
	wp_enqueue_script( 'moderntechblog-customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'moderntechblog_customize_preview_js' );
