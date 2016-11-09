<?php
/**
 * The sidebar containing the main widget area.s
 *
 * @package RED_Starter_Theme
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
								<div class="contact-info">
								<h3>Contact Info</h3>
								<p><i class="fa fa-envelope"></i><a href="#">info@inhabitent.com</a></p>
								<p><i class="fa fa-phone"></i><a href="#">778-456-7891</a></p>
								<ul>
									<li><a href="www.facebook.com"><i class="fa fa-facebook-square"></i></a></li>
									<li><a href="www.twitter.com"><i class="fa fa-twitter-square"></i></a></li>
									<li><a href="www.googleplus.com"><i class="fa fa-google-plus-square"></i></a></li>
								</ul>							
							</div>	

							<div class="business-hours">
								<h3>Business Hours</h3>
								<ul>
									<li> <span class="bold">Monday-Friday:</span> 9am to 5pm</p>
									<li> <span class="bold">Saturday:</span> 10am to 2pm</p>
									<li> <span class="bold">Sunday:</span> Closed</p>
								</ul>
							</div>
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->
