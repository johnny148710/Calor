<?php
/**
 * Template Name: Welcome page
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header(); ?>

<div class="wrapper" id="page-wrapper">
    <?php get_template_part('partials/home-banner'); ?>

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

</div><!-- #page-wrapper -->

<?php
get_footer();
