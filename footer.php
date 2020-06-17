<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Modern_Tech_Blog
 */

?>

<footer id="colophon" class="site-footer">
	<div class="site-info">
		<a href="<?php echo esc_url( __( 'https://www.wordpress.org/', 'moderntechblog' ) ); ?>">
		<?php
		/* translators: %s: CMS name, i.e. WordPress. */
		printf( esc_html__( 'Proudly powered by %s', 'moderntechblog' ), 'WordPress' );
		?>
		</a>
		<span class="sep"> | </span>
		<?php
		/* translators: 1: Theme name, 2: Theme author. */
		printf( esc_html__( 'Theme: %1$s by %2$s.', 'moderntechblog' ), 'moderntechblog', '<a href="https://www.techcetblog.com/profile/techcetblog">Techcet Blog</a>' );
		?>
	</div> <!-- .site-info -->
</footer> <!-- #colophon -->
</div> <!-- #page -->

<?php wp_footer(); ?>
</body>

</html>
