<?php get_header(); ?>

	<main role="main">
		<!-- section -->

			<h2 class="heading"><?php the_title(); ?></h2>
    

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<section>
			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<?php comments_template( '', true ); // Remove if you don't want comments ?>

				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->
			</section>	
		<?php endwhile; ?>

		<?php else: ?>
			<section>
			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->
			</section>
		<?php endif; ?>

		
		<!-- /section -->
	</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
