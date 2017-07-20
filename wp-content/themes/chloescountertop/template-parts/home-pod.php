<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */
?>
  <?php
    $args = array( 'post_type' => 'podcast', 'posts_per_page' => 4 );
    $loop = new WP_Query( $args );

    while ( $loop->have_posts() ) : $loop->the_post();

      echo '<div class="podcast-wrapper">';
        echo '<div class="home-podcast-cover-image">';
        if ( has_post_thumbnail() ) {
             the_post_thumbnail( 'large' );
           } else {
            // echo '<img src="<?php echo get_template_directory_uri() . '/images/CCT-CTA-Books.png' " alt ="" /> ';
           }
        echo '</div>';

        echo '<h4 class="h4-num">Episode ';
          echo CFS()->get( 'podcast_episode_number' );
        echo '</h4>';
        echo '<h4 class="h4-title">';
          the_title();
        echo '</h4>';
      echo '</div>';
    endwhile;
  ?>

</div>
