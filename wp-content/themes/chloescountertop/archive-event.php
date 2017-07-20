<?php
/**
* The main template file.
*
* Template Name: Events
*/
get_header(); ?>

<div id="patterned-banner" class="banner events-archive">
  <div class="a-title-wrapper">
    <div class="blue-title">
      <h2 class="section-title white" >Upcoming Events</h2>
    </div>
  </div>
</div>

<div class="container events-page">

  <?php if ( have_posts() ) : ?>

    <?php /* Start the Loop */ ?>
    <?php while ( have_posts() ) : the_post(); ?>

      <?php
        get_template_part( 'template-parts/pages/events/event' );
      ?>

    <?php endwhile; ?>

    <?php the_posts_navigation(); ?>

  <?php else : ?>

    <?php get_template_part( 'template-parts/content', 'none' ); ?>

  <?php endif; ?>

</div> <!-- .container -->

<?php get_footer(); ?>
