<?php
/**
 * The main template file.
 *
 * Template Name: Contact
 */
get_header(); ?>


<!-- <div id="contact" class="home-banner banner">
  <div class="tag-line">
    <h2 class="h2-tag"><span>Connect with</span> Chloe</h2> -->

<div id="connect-banner" class="banner">
  <div class="tag-line">
    <h2 class="h2-tag"><span>Contact</span> Chloe Elgar</h2>
  </div>
</div>

<div class="inner-wide">

  <?php echo CFS()->get( 'contact_form' );?>


</div> <!-- .container -->

<?php get_footer(); ?>
