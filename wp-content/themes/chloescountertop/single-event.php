<?php
/**
 * Template Name: Single Podcast
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

			<?php the_post_navigation(); ?>

	<?php endwhile; // End of the loop. ?>

  <section class="blog-optin blue">
    <img class="horz-deco" src="<?php echo get_template_directory_uri(); ?>/assets/images/CCT-DECO-arrows.png" alt="Chloe's Countertop Deco Arrows"/>
    <div>
      <h3 class="inline-accent white">Join the Community at Chloe's Countertop</h3>
			<p>Be the first to hear about new podcast episodes!</p>
			<p>I'm also gifting a FREE chapter of my book available for those who join us today</p>
      <button name="modal" class="popup-button" id="gift-button">join the community</button>
    </div>
  </section>

		</main><!-- #main -->
	</div><!-- #primary -->

	</div><!-- #content -->

<?php get_footer(); ?>
