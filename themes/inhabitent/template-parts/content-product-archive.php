<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="main-content">
        <header class="entry-header">

            <?php if ( has_post_thumbnail() ) : ?>
                <?php if ( is_archive('product') ) : ?>
                <div class="thumbnail">
                    <a href="<?php esc_url(the_permalink()); ?>">
                    <?php the_post_thumbnail( 'large' ); ?>
                    </a>
                </div>
                <?php endif; ?>
            <?php endif; ?>
            
            <div class="product-price-summary">

                <p class="product-title"><?php the_title(); ?></p>
                <p class="product-price">$<?php echo CFS()->get( 'product_price' ); ?></p>
            </div>

            <?php if ( 'post' === get_post_type() ) : ?>
            <div class="entry-meta">
                <?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
            </div><!-- .entry-meta -->
            <?php endif; ?>
        </header><!-- .entry-header -->
    </div>
</article><!-- #post-## -->
