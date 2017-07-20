<?php
/**
 * The main template file.
 *
 * Template Name: Books
 */
get_header(); ?>

<div id="books-banner" class="banner">
  <div class="tag-line">
    <h2 class="h2-tag"><span>Books</span> by Chloe Elgar</h2>
  </div>
</div>

<div class="container books">

  <div class="book-wrapper">

  <div class="details-left">

    <div class="book-title">
      <h2 class="h2-tag blue"><span>Living in Light</span></h2>
      <h3 class="sub-text">Launching June 11th, 2016</h3>
    </div>

    <p><?php echo CFS()->get( 'book_description' ); ?></p>
    <!-- <button name="modal" class="popup-button" id="book-button">claim the free chapter</button> -->
    <p><?php echo CFS()->get( 'buy_button' ); ?></p>
  </div>

  <div class="book-right">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/LivingInLight-CoverLarge.png" alt="Living in Light Book" />
  </div>
</div>
  

  <div class="about-author">
    <div class="underline-thin blue author-details">
      <h3 class="secondary-section-title">About The Author</h3>
    </div>
      <img  class="author-pic" src="<?php echo get_template_directory_uri();?>/assets/images/CCT-Chloe2.png" alt="About the Author Chloe" />
    <div class="author-bio"><?php echo CFS()->get( 'about_the_author' ); ?></div>
  </div>

</div> <!-- .container -->


<?php get_footer(); ?>
