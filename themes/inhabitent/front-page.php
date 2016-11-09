<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<section class="home-hero">
			<img src="<?php echo get_template_directory_uri(); ?>/images/logos/inhabitent-logo-full.svg" class="logo" alt="Inhabitent full logo">
		</section>

            <?php if ( have_posts() ) : ?>

                <?php if ( is_home() && ! is_front_page() ) : ?>
                    <header>
                        <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                    </header>
                <?php endif; ?>
			<?php endif; ?>

                <?php
                    $args = array(  'numberposts'       => 3,
                                    'orderby'           => 'post_date',
                                    'order'             => 'DESC',
                                    'post_type'         => 'post',
                                );

                    $journal_post = get_posts( $args ); // returns an array of posts                
                ?>

                <?php foreach ( $journal_post as $post ) : setup_postdata( $post ); ?>

                    <?php if ( has_post_thumbnail() ) : ?>
                        <?php the_post_thumbnail( 'large' ); ?>
                    <?php endif; ?>

                    <?php the_date(); ?>
                    <?php comments_number(); ?>

                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">Read Entry</a>
            

                <?php endforeach; wp_reset_postdata(); ?>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
