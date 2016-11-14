<?php
/**
 * Template part for displaying single posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="product-image">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>
	</div>

	<div class="product-details">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		
		<p class="product-price">$<?php echo CFS()->get( 'product_price' ); ?></p>

		<div class="entry-content">
			<?php the_content(); ?>
		</div><!-- .entry-content -->

		<ul class="social-media">
			<li class="read-more">Like</li>
			<li class="read-more">Tweet</li>
			<li class="read-more">Pin</li>
		</ul>
	</div>
</article><!-- #post-## -->
