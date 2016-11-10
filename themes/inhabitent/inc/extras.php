<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );


function about_page_styles() {
 if(!is_page_template('about.php')) {
        return;
    }

    $url = CFS()->get( 'about_background_image' );
           $custom_css = "
               .about-hero{
				   background: linear-gradient( to bottom, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 100% ),
					 url({$url}) no-repeat center bottom;
					   background-size: cover, cover;
					   height: 100vh;
              }"
			  
			  ;

       wp_add_inline_style( 'red-starter-style', $custom_css );

}
add_action( 'wp_enqueue_scripts', 'about_page_styles' );

function archive_product_title( $title) {
	$title = 'Shop Stuff';
	return $title;
}
add_filter('get_the_archive_title', 'archive_product_title');

function product_posts_per_page( $query ) {
	if( ! is_admin() && $query->is_main_query()){
		if ( is_post_type_archive( 'product' ) ) {
			$query->set( 'posts_per_page', 16 );
			$query->set( 'orderby', 'title' );
			$query->set( 'order', 'ASC' );
		} elseif (is_tax('product_type')) {
			$query->set( 'posts_per_page', 4 );
			$query->set( 'orderby', 'title' );
			$query->set( 'order', 'ASC' );
		}
	}
}
add_action( 'pre_get_posts', 'product_posts_per_page' );
