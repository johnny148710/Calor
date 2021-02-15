<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header(); ?>

<div class="wrapper" id="page-wrapper">
	
	<?php if ( is_front_page() ) : ?>
		<?php get_template_part('partials/home-banner'); ?>
	<?php else : ?>
		<?php get_template_part('partials/banner'); ?>
	<?php endif; ?>

	<?php if( !is_front_page() ) : ?>
		<div class="container" id="content" tabindex="-1">
			<div class="row">
				<main class="col-md-12 site-main padding-bottom" id="main">
					<?php while ( have_posts() ) {
						the_post();
						get_template_part( 'loop-templates/content', 'page' );
					} ?>

					
				</main><!-- #main -->
			</div><!-- .row -->
		</div><!-- #content -->
	<?php endif; ?>
</div><!-- #page-wrapper -->

<?php
get_footer();
