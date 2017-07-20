<?php
/**
 * The main template file.
 *
 * Template Name: Gifts & News
 */
get_header(); ?>

<div id="gifts-banner" class="banner">
  <div class="tag-line">
      <h2 class="h2-tag"><span>Gifts &amp; </span>News</h2>
      <h3 class="sub-text white">Claim your FREE book chapter below</h3>
  </div>
</div>

<div class="container gifts-optin">
  <div class="gifts-optin">
    <div id="mc_embed_signup">

      <div class="gifts-optin-message">
        <h3>Join the Community at Chloe's Countertop</h3>
        <p>
          Be the first to hear about Podcasts, Retreats and other exclusive news!
        </p>
      </div>
      <form action="//chloescountertop.us5.list-manage.com/subscribe/post?u=69a2680f7acd058053dfa0020&amp;id=32fc4ab161" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
          <div class="mc-field-group">
            <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Email Address" required>
            <input type="text" value="" name="FNAME" class="" id="mce-FNAME" placeholder="First Name">
          </div>
          <div id="mce-responses" class="clear">
            <div class="response" id="mce-error-response" style="display:none">Please enter a valid email</div>
            <div class="response" id="mce-success-response" style="display:none"></div>
          </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
          <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_69a2680f7acd058053dfa0020_32fc4ab161" tabindex="-1" value=""></div>
          <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
        </div>
      </form>
    </div>
  </div>
</div>

<div class="container free">
  <div class="gift-wrapper">
    <div class="yellow-title free">
      <h2 class="section-title"><span>Free</span> Chapter from the book</h2>
    </div>

    <div class="book-cover">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/CCT-LivingInLight-Cover.jpg" alt="Living in Light Book" />
    </div>

    <div class="details-right">
      <p><?php echo CFS()->get( 'freebie_details' ); ?></p>
      <button name="modal" class="popup-button" id="gift-button">claim the free chapter</button>
    </div>
  </div>

  <div class="about-author">
    <div class="underline-thin blue author-details">
      <h3 class="secondary-section-title">About The Author</h3>
    </div>
    <div class="author-bio"><?php echo CFS()->get( 'author_bio' ); ?></div>
    <img  class="author-pic" src="<?php echo get_template_directory_uri();?>/assets/images/CCT-Chloe.png" alt="About the Author Chloe" />
  </div>

</div> <!-- .container -->

<?php get_footer(); ?>
