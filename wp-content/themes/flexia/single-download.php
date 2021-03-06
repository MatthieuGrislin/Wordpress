<?php

// No direct access, please
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Flexia
 */

get_header(); ?>

	<div id="content" class="site-content">
		<div class="flexia-wrapper flexia-container max width">
			<div id="primary" class="content-area">
				<main id="main" class="site-main flexia-container">

				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'framework/views/template-parts/content-single-download', get_post_format() );

				endwhile; // End of the loop.
				?>

				</main><!-- #main -->
			</div><!-- #primary -->

			
		</div><!-- #flexia-wrapper -->
	</div><!-- #content --> 
</div><!-- #page -->
<?php
get_footer();

