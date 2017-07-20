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

		<h3 class="sub-text green"><?php echo CFS()->get( 'subtitle' ); ?></h3>

			<div class="latest-thumb-wrapper">
				 <?php if ( has_post_thumbnail() ) : ?>
					 <?php the_post_thumbnail( 'large' ); ?>
				 <?php endif; ?>
			</div>

		<?php if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta">
				<span><?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments', 'Category' ); ?></span>
			</div><!-- .entry-meta -->
		<?php endif; ?>

	</header><!-- .entry-header -->

	<div class="entry-content">
		<p><?php the_content(); ?></p>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
