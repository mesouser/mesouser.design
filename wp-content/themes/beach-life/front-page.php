<?php
/**
 * The template for displaying the front page.
 *
 *
 * @package WordPress
 * @subpackage beach-life
 * @since Beach Life 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		// End the loop.
		endwhile;
		?>
		<div class="front-projects">
			<?php query_posts ('posts_per_page=3&post_type=projects'); ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<h2><?php the_title(); ?></h2>
					<?php the_excerpt(); ?> 
					<a href="<?php the_permalink(); ?>"> Read More </a>
				<?php endwhile; ?>
				<?php wp_reset_query(); ?>

		</div>
		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
