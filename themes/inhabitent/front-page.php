<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main front-page" role="main">

		<section class="home-hero">

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

                <h3 class="recent-journals-header">Shop Stuff</h3>
                <div class = "shop-stuff">
                    <?php    
                        $terms = get_terms( array(
                                            'taxonomy' => 'product_type',
                                            'orderby' => 'name',
                                        ));

                        foreach ($terms as $term) {
                            $url = get_term_link ($term->slug , 'product_type');              
                    ?>                       
                        <img src="<?php echo get_template_directory_uri();?>/images/product-type-icons/<?php echo $term->slug; ?>.svg">
                        <div class = 'shop-offers'><p> <?php echo $term->description; ?> </p>
                        <a href='<?php echo $url?>' class='button'><?php echo $term->name; ?></a> </div>
                    <?php
                        }
                    ?>
                </div> <!-- shop stuff -->


                <ul>
                <?php foreach ( $journal_post as $post ) : setup_postdata( $post ); ?>
                    <li>
                        <div class="thumbnail">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <?php the_post_thumbnail( 'medium-large' ); ?>
                        <?php endif; ?>
                        </div>

                        <div class="recent-journal-item-text">
                            <p class="entry-meta"><?php echo get_the_date(); ?> / <?php comments_number(); ?></p>

                            <p class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></p>
                            <p><a class="read-more" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">Read Entry</a></p>
                        </div>
                    </li>
                <?php endforeach; wp_reset_postdata(); ?>
                </ul>

                 <h3 class="latest-adventures-header">Latest Adventures</h3>
                 <div class="latest-adventures-container">
                    <div class="latest-adventures-left">
                    
                    </div>
                    <div class="latest-adventures-right">

                    </div>
                </div>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
