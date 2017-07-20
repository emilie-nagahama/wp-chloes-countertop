
    <?php
    $args = array( 'post_type' => 'retreats', 'posts_per_page' => 4 );
    $loop = new WP_Query( $args );
      while ( $loop->have_posts() ) : $loop->the_post();
    ?>
      <h1><?php the_title(); ?></h1>
    <?php
      endwhile;
    ?>
