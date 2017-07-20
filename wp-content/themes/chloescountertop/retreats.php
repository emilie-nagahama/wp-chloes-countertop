<?php
/**
 * The main template file.
 *
 * Template Name: Retreats
 */
get_header(); ?>

<div id="reteats-banner" class="banner">
  <div class="tag-line">
    <h2 class="h2-tag"><span>Holistic Transformation</span> & Ritual</h2>
  </div>
</div>

<div class="container retreats">

  <div class="retreats-intro inline-accent">
    <?php the_field('introduction'); ?>
  </div>

</div>

<div class="upcoming-retreats">
  <?php // loop over the retreats category of Events ?>

  <h3 class="h2-tag blue">
    <span>Upcoming Retreats</span>
  </h3>
  <?php

  $posts = get_field('select_featured_retreats');

  if( $posts ): ?>
  	<?php foreach( $posts as $p ): // variable must NOT be called $post (IMPORTANT) ?>

        <?php
          //vars
          $featured_image = get_field('featured_image', $p->ID);
          $retreat_url = get_permalink( $p->ID );
          $retreat_title = get_the_title( $p->ID );
          $details = get_field('retreat_description', $p->ID);
        ?>
	    	<a class="retreat-wrapper" href="<?php echo $retreat_url; ?>" style="background-image: url('<?php echo $featured_image; ?>')">
          <div class="home-post-wrapper">
            <h3><?php echo $retreat_title; ?></h3>
            <span class="info-on-hover">
              <p><?php echo $details; ?></p>
            </span>
          </div>
	    	</a>
  	<?php endforeach; ?>

  <?php endif; ?>

  <?php wp_reset_postdata(); ?>

</div>

<div class="container">
  <div class="retreat-video">
    <h3 class="h2-tag blue">
      <span>The Experience</span>
    </h3>

    <?php echo the_field('featured_video'); ?>
  </div>


</div> <!-- .container -->


<?php get_footer(); ?>
