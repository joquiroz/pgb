<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package pgb
 */
?>

<?php if ( is_search() || is_archive() ) : // Only display Excerpts for Search and Archive Pages ?>

	<div class="entry-summary col-md-12">

		<?php the_excerpt(); ?>

	</div><!-- .entry-summary -->

<?php elseif ( is_blog_page() ) : ?>

	<div class="entry-summary col-md-12">
		
		<?php get_template_part( 'posts', 'images' ); ?>
		
		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'pgb' ) ); ?>
	
	</div><!-- .entry-summary -->

<?php else : ?>

	<?php get_template_part( 'posts', 'images' ); ?>

	<div class="entry-content col-md-12">

		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'pgb' ) ); ?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'pgb' ),
				'after'  => '</div>',
			) );
		?>

	</div><!-- .entry-content -->

<?php endif; ?>