<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area container">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
				?>
			
                <ul class="shop-stuff">
                    <?php    
                        $terms = get_terms( array(
                                            'taxonomy' => 'product_type',
                                            'orderby' => 'name',
                                        ));

                        foreach ($terms as $term) :
                            $url = get_term_link ($term->slug , 'product_type');              
                    	?>    
						<li class="shop-stuff-item">                   
                        <a href='<?php echo $url?>' class='button'><h2><?php echo $term->name; ?></h2></a>
						</li>
                    <?php
                        endforeach;
                    ?>

                </ul> <!-- shop stuff -->
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<div class="product-content">
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content-product-archive', '' ); ?>

				<?php endwhile; ?>

			<?php else : ?>

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; ?>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
