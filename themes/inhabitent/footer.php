<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
					<!-- <a href="<?php echo esc_url( 'https://wordpress.org/' ); ?>"><?php printf( esc_html( 'Proudly powered by %s' ), 'WordPress' ); ?></a> -->
					<div class="footer-info-container">
						<div class="contact">
							<h3>Contact Info</h3>
							<p><i class="fa fa-envelope"></i>info@inhabitent.com</p>
							<p><i class="fa fa-phone"></i>778-456-7891</p>
							<p><span><i class="fa fa-facebook-square"></i></span>
								<span><i class="fa fa-twitter-square"></i></span>
								<span><i class="fa fa-google-plus-square"></i></span>
							</p>
						</div>
						<div class="hours">
							<h3>Business Hours</h3>
							<p><span class="day">Monday-Friday:</span> 9am to 5pm</p>
							<p><span class="day">Saturday:</span> 10am to 2pm</p>
							<p><span class="day">Sunday:</span> Closed</p>
						</div>
						<div class="text_logo">
							<img src="<?php echo get_template_directory_uri(); ?>/images/logos/inhabitent-logo-text.svg" class="logo" alt="Inhabitent logo text";>
						</div>
					</div>
					<div class="copyright">
            			COPYRIGHT © 2016 INHABITENT
        			</div>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>
	</body>
</html>
