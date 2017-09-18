<?php
 /**
  * The template for displaying podcast archive.
  * Template Name: Podcast
  *
  * @package RED_Starter_Theme
  */

 get_header(); ?>

 <div id="podcast-banner" class="banner">
   <div class="tag-line" style="background-image: url('<?php echo get_template_directory_uri()?>/assets/images/CCT-Banner-PodcastLogo.png'); ">
   </div>
 </div>

 <div class="container">

   <div class="pod-description">
     <h3 class="inline-accent">Conscious Conversations is a platform to inspire global awareness and conversation around anxieties and fears specifically related to body image and living consciously. Universally changing our relationship to pain through vulnerability, openness and truth.</h3>
  </div>

  <div class="yellow-title">
    <h2 class="section-title">Latest Podcast</h2>
  </div>

  <div class="latest-podcast">
    <?php
      $args = array( 'post_type' => 'podcast', 'posts_per_page' => 1 );
      $loop = new WP_Query( $args );

      while ( $loop->have_posts() ) : $loop->the_post();

        echo '<div class="podcast-cover-image">';
        if ( has_post_thumbnail() ) {
  	         the_post_thumbnail( 'large' );
           } else {
            // echo '<img src="<?php echo get_template_directory_uri() . '/images/CCT-CTA-Books.png' " alt ="" /> ';
           }
        echo '</div>';

        echo '<div class="podcast-sum">';
        echo '<div class="underline-all blue"><h1 class="title blue">';
          the_title();
        echo '</h1></div>';
        echo '<span class="sub-text">';
          // echo CFS()->get( 'subtitle' );
        echo '</span>';
        echo '<div class="pod-num">';
          echo CFS()->get( 'podcast_episode_number' );
        echo '</div>';
        ?>
          <a class="button-link" href="<?php the_permalink() ?>">Listen Now</a>
        <?php echo '</div>';
      endwhile;
    ?>
  </div>

  <div class="underline-thin blue">
    <h3 class="secondary-section-title">Podcast Archive</h3>
  </div>

  <div class="podcast-archive-gallery">
    <?php
      $args = array( 'post_type' => 'podcast',
                     'posts_per_page' => 100,
                     'offset'=> 1 );
      $loop = new WP_Query( $args );

      while ( $loop->have_posts() ) : $loop->the_post(); ?>

      <div class="archive-wrap">
        <div class="podcast-cover-image">
          <?php if ( has_post_thumbnail() ) {
               the_post_thumbnail( 'medium' );
             } else {
              // echo '<img src="<?php echo get_template_directory_uri() . '/images/CCT-CTA-Books.png' " alt ="" /> ';
            } ?>
        </div> <!-- .podcast-cover-image -->

        <div class="pod-sum">
          <h4 class="h4-num">Episode <?php echo CFS()->get( 'podcast_episode_number' ); ?></h4>
          <h4 class="h4-title"><?php the_title(); ?></h4>
        </div> <!-- .podcast-sum -->
    </div> <!-- .archive-wrap -->
  <?php endwhile; ?>

  </div> <!-- .podcast-archive-gallery-->

 </div> <!-- .container -->

 <?php get_footer(); ?>
