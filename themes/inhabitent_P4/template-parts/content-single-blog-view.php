<?php
/**
 * Template part for displaying single posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="blog-entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>

		<?php the_title( '<h1 class="home-entry-title">', '</h1>' ); ?>

		<div class="blog-entry-meta">
    <?php red_starter_posted_on(); ?> / <?php red_starter_comment_count(); ?> / <?php red_starter_posted_by(); ?>  
		</div>
	</header>

	<div class="blog-home-content single-view-blog">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</div>

	<footer class="blog-entry-footer">
        <?php red_starter_entry_footer(); ?>
        <div class=social>
    <a class="social-button blogpost" href=""><i class="fab fa-facebook-f"></i> Like</a>
    <a class="social-button blogpost" href=""><i class="fab fa-twitter"></i> Tweet</a>
    <a class="social-button blogpost" href=""><i class="fab fa-pinterest"></i> Pin</a>
	</footer>
</article><!-- #post-## -->

