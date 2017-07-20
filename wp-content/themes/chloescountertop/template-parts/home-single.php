<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */
?>

<?php
   $args = array( 'post_type' => array('post', 'podcast'), 'numberposts' => 1 );
   $latest_posts = get_posts( $args ); // returns an array of posts
?>

<?php foreach ( $latest_posts as $post ) : setup_postdata( $post ); ?>

  <div class="latest-news-single">
    <div class="home-post-header">
      <?php the_title( sprintf( '<h1 class="title"><a class="a-title" href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
    </div>

    <h3 class="sub-text green"><?php echo CFS()->get( 'subtitle' ); ?></h3>

      <div class="latest-thumb-wrapper">
         <?php if ( has_post_thumbnail() ) : ?>
           <?php the_post_thumbnail( 'large' ); ?>
         <?php endif; ?>
      </div>
      <div class="entry-meta">
        <span><?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments', 'Category' ); ?></span>
      </div><!-- .entry-meta -->
      <!-- <div class="home-excerpt read-more-bg">
       the_content('Read More'); 
      </div> -->
  </div><!-- .latest-news-single -->
<?php endforeach; wp_reset_postdata(); ?>
