<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */
?>

<?php
   $args = array( 'post_type' => array('post', 'podcast', 'event'), 'numberposts' => 2, 'offset' => 1 );
   $latest_posts = get_posts( $args ); // returns an array of posts
?>

<?php foreach ( $latest_posts as $post ) : setup_postdata( $post ); ?>

   <?php /* Content from your array of post results goes here */ ?>
  <div class="latest-news-single">

    <div class="latest-thumb-wrapper-small">
       <?php if ( has_post_thumbnail() ) : ?>
         <?php the_post_thumbnail( 'large' ); ?>
       <?php endif; ?>
    </div>
    <div class="home-categories">
      <?php $categories = get_the_category();
        if ( ! empty( $categories ) ) {
            echo esc_html( $categories[0]->name );
      } ?>
    </div>

    <?php the_title( sprintf( '<h4 class="title-recent"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h4>' ); ?>

  </div><!-- .latest-news-single -->
<?php endforeach; wp_reset_postdata(); ?>
