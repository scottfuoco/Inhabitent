<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

    <section class="home-hero"></section>
	<div id="primary" class="content-area">
		<main id="main" class="site-main front-page" role="main">
            <?php if ( have_posts() ) : ?>

                <?php if ( is_home() && ! is_front_page() ) : ?>
                    <header>
                        <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                    </header>
                <?php endif; ?>
			<?php endif; ?>

                <h2 class="title-header">Shop Stuff</h2>
                <div class="shop-stuff container">
                    <?php    
                        $terms = get_terms( array(
                                            'taxonomy' => 'product_type',
                                            'orderby' => 'name', ));
                        foreach ($terms as $term) :
                            $url = get_term_link ($term->slug , 'product_type');              
                    ?>  
                        <div class="shop-stuff-item">
                            <div class="product-icon-image">       
                                <img src="<?php echo get_template_directory_uri();?>/images/product-type-icons/<?php echo $term->slug; ?>.svg" alt="">
                            </div>
                            <p> <?php echo $term->description; ?> </p>
                            <a href='<?php echo $url?>' class='button-link'><?php echo $term->name; ?></a> </div>
                        
                    <?php endforeach; ?>
                </div> <!-- shop stuff -->


                <h2 class="title-header">Inhabitent Journal</h2>
                <ul class="container">
                 <?php
                    $args = array(  'numberposts'       => 3,
                                    'orderby'           => 'post_date',
                                    'order'             => 'DESC',
                                    'post_type'         => 'post',
                                );

                    $journal_post = get_posts( $args ); // returns an array of posts                
                ?>
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

                 <h2 class="title-header">Latest Adventures</h2>

                 <div class="latest-adventures-container container">
                    <div class="latest-adventures-left adventure-image-container">
                            <img src="<?php echo get_template_directory_uri();?>/images/adventure-photos/canoe-girl.jpg" alt="Image of a girl in a canoe">
                            <h3>A Night with Friends at the Beach</h3>
                         <div class="gradient-overlay"></div>
                    </div>
                    <div class="latest-adventures-right">
                        <div class="adventure-image-container">
                            <img class="top-image" src="<?php echo get_template_directory_uri();?>/images/adventure-photos/beach-bonfire.jpg" alt="">
                            <h3>Getting Back to Nature in a Canoe</h3>
                        </div>
                         <div class="adventure-image-container">
                            <img class="bottom-image left-image narrow-image" src="<?php echo get_template_directory_uri();?>/images/adventure-photos/night-sky.jpg" alt="">
                            <h3>Taking in the View at Big Mountain</h3>
                        </div>
                         <div class="adventure-image-container">
                            <img class="bottom-image right-image narrow-image" src="<?php echo get_template_directory_uri();?>/images/adventure-photos/mountain-hikers.jpg" alt="">
                             <h3>Star-Gazing at the Night Sky</h3>
                        </div>
                    </div>
                </div>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
