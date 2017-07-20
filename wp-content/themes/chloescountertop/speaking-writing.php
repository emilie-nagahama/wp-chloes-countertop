<?php
/**
 * The main template file.
 *
 * Template Name: Speaking Writing
 */
get_header(); ?>

<div id="sw-banner" class="banner">
  <div class="tag-line">
    <h2 class="h2-tag"><span>Speaker &amp;</span> Writer</h2>
  </div>
</div>

<div id="patterned-banner" class="banner sw">
  <h3 class="sub-text blue"><?php echo CFS()->get( 'speaker_writer_description' ); ?></h3>
  <div class="button-sw"><a class="button-link" href="#button-apply">Connect with Chloe</a></div>
</div>

<div class="container sw-styles">

  <!-- CFS for content intro -->

  <?php echo CFS()->get( 'sw_content_block_one' ); ?>

  <!-- CFS for content mission statement -->

  <div>
    <?php echo CFS()->get( 'mission_statement' ); ?>
    <img src=""/>
  </div>

  <!-- CFS for content 2 columns-->
  <div class="sw-2-col">
    <div><?php echo CFS()->get( 'sw_content_block_one_of_two' ); ?></div>
    <div><?php echo CFS()->get( 'sw_content_block_two_of_two' ); ?></div>
  </div>

  <!-- Title before contact form -->

  <div class="blue-title" id="button-apply">
    <h2 class="section-title white" >Connect With Chloe</h2>
  </div>

  <!-- CFS for content contact form-->

  <?php echo CFS()->get( 'contact_form_space' ); ?>


</div> <!-- .container -->

<?php get_footer(); ?>
