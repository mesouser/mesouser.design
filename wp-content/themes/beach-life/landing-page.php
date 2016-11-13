<?php
/* Template Name: Landing Page
 *
 * The template for displaying landing pages
 *
 *
 * @package WordPress
 * @subpackage beachlife
 * @since Beach Life 1.0
 */

get_header('landing'); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'content', 'page' );

		// End the loop.
		endwhile;
		?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
