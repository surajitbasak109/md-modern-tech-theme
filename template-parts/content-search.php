<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Modern_Tech_Blog
 */

?>

<article id="post-<?php the_ID(); ?>" class="<?php post_class(); ?>">
	<header class="entry-header">
		<?php
		the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' );
		?>
		<?php
		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				moderntechblog_posted_on();
				moderntechblog_posted_by();
				?>
			</div> <!-- .entry-meta -->
		<?php endif; ?>
	</header> <!-- .entry-header -->

	<?php moderntechblog_post_thumbnail(); ?>

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div> <!-- .entry-content -->

	<footer class="entry-footer">
		<?php moderntechblog_entry_footer(); ?>
	</footer> <!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
