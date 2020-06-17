<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Modern_Tech_Blog
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Material+Icons">
	<?php wp_head(); ?>
	<!--[if lt IE 9]>
	<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to Content', 'moderntechblog' ); ?>></a>
		<header id="masthead" class="site-header">
			<div class="site-branding">
				<?php
				the_custom_logo();
				if ( is_front_page() && is_home() ) :
					?>
					<h1 class="site-title">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
					</h1>
					<?php
				else :
					?>
					<p class="site-title">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
					</p>
					<?php
				endif;
				$modertechblog_description = get_bloginfo( 'description', 'display' );
				if ( $modertechblog_description || is_customize_preview() ) :
					?>
					<p class="site-description"><?php echo $modertechblog_description; ?></p>
				<?php endif; ?>
			</div> <!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'moderntechblog' ); ?></button>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
			</nav> <!-- #site-navigation -->
		</header> <!-- #masthead -->
