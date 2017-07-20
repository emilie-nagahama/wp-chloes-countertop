<?php
/**
 * The main template file.
 *
 * Template Name: Living True
 */
get_header(); ?>

<div id="livingtrue-banner" class="banner">
  <div class="tag-line">
      <h2 class="h2-tag blue"><span>Living True</span></h2>
      <h3 class="sub-text blue">One on One Coaching</h3>
      <h3 class="sub-text blue">Custom Tailored to you and your Truth</h3>
  </div>
</div>

<div id="patterned-banner" class="banner lt">
  <h3 class="sub-text green"><?php echo CFS()->get( 'living_true_description' ); ?></h3>
  <div class="button-lt"><a class="button-link" href="#button-apply">Apply to work with Chloe</a></div>
</div>

<div class="container lt-styles">

  <!-- CFS for content -->

  <?php echo CFS()->get( 'lt_content_block_one' ); ?>

  <!-- CFS for Title - blue background -->

  <div class="blue-title">
    <h2 class="section-title white"><?php echo CFS()->get( 'lt_blue_title_one' ); ?></h2>
  </div>

  <!-- CFS for content -->

  <span><?php echo CFS()->get( 'lt_content_block_two' ); ?></span>

  <!-- CFS for Title - blue background -->

  <div class="blue-title">
    <h2 class="section-title white"><?php echo CFS()->get( 'lt_blue_title_two' ); ?></h2>
  </div>

  <!-- CFS for content - 3 columns -->

  <div class="lt-3-col">
    <div><?php echo CFS()->get( 'lt_content_block_three_left' ); ?></div>

    <div><?php echo CFS()->get( 'lt_content_block_three_center' ); ?></div>

    <div><?php echo CFS()->get( 'lt_content_block_three_right' ); ?></div>
  </div>

  <!-- CFS for Title - blue background -->

  <div class="blue-title">
    <h2 class="section-title white"><?php echo CFS()->get( 'lt_blue_title_three' ); ?></h2>
  </div>

  <!-- CFS for content - 2 -->

  <?php echo CFS()->get( 'lt_content_block_one_of_two' ); ?>


  <!-- CFS for content -->

  <span><?php echo CFS()->get( 'lt_content_block_four' ); ?></span>

  <!-- CFS for Title - blue background -->

  <div class="blue-title" id="button-apply">
    <h2 class="section-title white" ><?php echo CFS()->get( 'lt_blue_title_four' ); ?></h2>
  </div>

  <!-- CFS for content -->

  <span><?php echo CFS()->get( 'lt_content_block_five' ); ?><span>

</div> <!-- .container -->

<?php get_footer(); ?>
