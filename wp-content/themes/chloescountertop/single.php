<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
<div id="patterned-banner" class="sidebar-banner">
</div>
<div class="container-w-sidebar">
	<div id="content" class="site-content">

		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'single' ); ?>
				<?php get_template_part( 'template-parts/single-optin' ); ?>
				<?php //get_template_part('template-parts/single-prev-next'); ?>

				<?php the_post_navigation(); ?>

			<?php endwhile; // End of the loop. ?>

			</main><!-- #main -->

		</div><!-- #primary -->

	</div><!-- #content -->

<?php get_footer(); ?>
