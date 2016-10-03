<?php
/**
 * Template Name: Apply Page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nielsen-cpp
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'apply' );

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();