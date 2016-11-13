<?php
/**
 * The template for displaying single projects.
 *
 *
 * @package WordPress
 * @subpackage beachlife
 * @since Beach Life 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	<div id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post();
			$size = "full";
			$project_description = get_field('project_description');
			$project_image_1 = get_field('project_image_1');
			$project_image_2 = get_field('project_image_2');
			$project_image_3 = get_field('project_image_3');
			$github_repo = get_field('github_repo'); ?>

			<article class="entry-content page-content project-content">
				<header>
					<h1 class="entry-title">Project Title: <?php the_title(); ?></h1>
				</header>

				<div>
					<h3 class="project_description">Description: <?php echo $project_description; ?></h3>
					
					<?php the_content(); ?>

				</div>
				<div class="project-url entry-content page-content">
					<p><strong><a href="<?php echo $github_repo; ?>">View GitHub Repo</a></strong></p>
				</div>				
			</article>
				
				<div class="project-images entry-content page-content">
					<?php if($project_image_1) { ?>
						<?php echo wp_get_attachment_image( $project_image_1, $size ); ?>
					<?php } ?>	
					<?php if($project_image_2) { ?>
						<?php echo wp_get_attachment_image( $project_image_2, $size ); ?>
					<?php } ?>
					<?php if($project_image_3) { ?>
						<?php echo wp_get_attachment_image( $project_image_3, $size ); ?>
					<?php } ?>
				</div>




		<?php endwhile; // end of the loop. ?>
	</div><!-- .site-main -->

</div><!-- .content-area -->

<?php get_footer(); ?>