<?php
/**
 * The template for displaying archive pages.
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

			<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<?php
						the_archive_title( '<div class="yellow-title"><h1 class="section-title">', '</h1></div>' );
						// the_archive_description( '<div class="taxonomy-description">', '</div>' );
					?>
				</header><!-- .page-header -->

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php
						get_template_part( 'template-parts/content' );
					?>

				<?php endwhile; ?>

				<nav class="blog-pagination">
					<?php pagination_bar(); ?>
				</nav>

			<?php else : ?>

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; ?>

			</main><!-- #main -->
		</div><!-- #primary -->

<footer class="content-footer">
	<?php get_template_part( 'inc/categories'); ?>
</footer><!-- .content-footer -->

</div><!-- #content -->

<?php get_footer(); ?>
