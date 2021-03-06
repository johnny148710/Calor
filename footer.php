<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit; ?>

	
<?php if ( is_front_page() ) : ?>
	<?php else : ?>
	<div class="footer-wrapper blue" id="wrapper-footer">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<footer class="site-footer" id="colophon">
						<div class="site-info">
							<p>Website built by First Event</p>
						</div><!-- .site-info -->
					</footer><!-- #colophon -->
				</div><!--col end -->
			</div><!-- row end -->
		</div><!-- container end -->
	</div><!-- wrapper end -->
<?php endif; ?>
</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

