<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Children's Museum of Illinois
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main page" role="main"><?php

			while ( have_posts() ) : the_post();

				get_template_part( 'content', 'page' );

			endwhile; // end of the loop.

		?></main><!-- #main -->
	</div><!-- #primary --><?php

get_sidebar();
get_footer();
?>