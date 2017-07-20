<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">

		<div class="latest-thumb-wrapper">
			 <?php if ( has_post_thumbnail() ) : ?>
				 <?php the_post_thumbnail( 'full' ); ?>
			 <?php endif; ?>
		</div>

	</header><!-- .entry-header -->

	<div class="entry-content">
    <div class="home-post-header">
      <?php the_title( sprintf( '<h2 class="title"><a class="a-title" href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
    </div>

    <h3 class="sub-text"><?php echo CFS()->get( 'subtitle' ); ?></h3>

		<?php the_excerpt('<a class="button-link">See Event Details</a>'); ?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
