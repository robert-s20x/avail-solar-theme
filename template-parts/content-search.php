<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package avasol
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php
			avasol_posted_on();
			avasol_posted_by();
			?>
		</div>
		<?php endif; ?>
	</header>

	<?php avasol_post_thumbnail(); ?>

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div>

	<footer class="entry-footer">
		<?php avasol_entry_footer(); ?>
	</footer>
</article>
