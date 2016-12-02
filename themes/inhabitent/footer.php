<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo" style="background: url(<?php echo get_stylesheet_directory_uri(); ?>/images/dark-wood@2x.png)">
					<div class="footer-block container">
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
									<li> <span class="bold">Monday-Friday:</span> 9am to 5pm</li>
									<li> <span class="bold">Saturday:</span> 10am to 2pm</li>
									<li> <span class="bold">Sunday:</span> Closed</li>
								</ul>
							</div>
										
						<div class="footer-logo">
							<a href="#">
								<img src="<?php echo get_template_directory_uri(); ?>/images/logos/inhabitent-logo-text.svg" alt="logo" />
							</a>
						</div>
						</div>
				<div class="site-info">
					<p>copyright &copy; 2016 Inhabitent</p>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
