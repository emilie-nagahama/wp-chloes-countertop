<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="home-post-header">
    <?php the_title( sprintf( '<h1 class="title"><a class="a-title" href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
  </div>

	<div class="entry-content">
		<?php the_content(); ?>

	</div><!-- .entry-content -->
</article><!-- #post-## -->
