<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>

	<div class="product-container">
		<li id="product-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php if ( has_post_thumbnail() ) : ?>
				<div class="photo"><a href="<?php echo esc_url(get_permalink())?>"><?php the_post_thumbnail( 'large' ); ?></a></div>
			<?php endif; ?>
			<div class="border"></div>
			<div class="product-info">
				<p class="product-title">
				<?php the_title(); ?>
				</p>
				<span class="product-price"><?php 
					echo CFS()->get( 'price' );
				?></span>	
			</div>
		</li><!-- #post-## -->
	</div>
