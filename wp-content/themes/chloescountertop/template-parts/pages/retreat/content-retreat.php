<?php
/**
 * Template part for displaying single posts.
 *
 * @package RED_Starter_Theme
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">

		<div class="home-post-header">
			<?php the_title( sprintf( '<h1 class="title"><a class="a-title" href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
		</div>

	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_field('retreat_information'); ?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
