<?php
/**
 * The main template file.
 *
 * Template Name: Gifts & News
 */
get_header(); ?>

<div id="gifts-banner" class="banner">
  <div class="tag-line">
      <h2 class="h2-tag"><span><?php _e('Monthly Downloads', 'creative_ritual'); ?> </span><?php _e('From the Divine', 'creative_ritual'); ?></h2>
      <!-- <h3 class="sub-text white">A monthly download + conscious conversations straight in your inbox</h3> -->
  </div>
</div>

<div class="container free">
  <div class="gift-wrapper">
    <div class="yellow-title free">
      <h2 class="section-title"><?php _e('Elevate Your Consciousness'); ?></h2>
    </div>

    <div class="book-cover">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/newsletter-divine-download.png" alt="Living in Light Book" />
    </div>

    <div class="book-cover">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/newsletter-conscious-conversation.png" alt="Living in Light Book" />
    </div>
  </div>

  <div class="gifts-optin">
    <div class="gifts-optin-message">
      <h3><?php _e('Join my community for exclusive monthly channelled messages & ', 'creative_ritual'); ?><span><?php _e('the Conscious Conversations Podcast', 'creative_ritual'); ?></span></h3>
      <button class="opt-in-button">claim your inspiration</button>
    </div>

    <div id="mc_embed_signup">

      <form action="//chloescountertop.us5.list-manage.com/subscribe/post?u=69a2680f7acd058053dfa0020&amp;id=32fc4ab161" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate form-box" target="_blank" novalidate>
          <div class="mc-field-group">
            <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Email Address" required>
            <input type="text" value="" name="FNAME" class="" id="mce-FNAME" placeholder="First Name">
            <input type="submit" value="Sign Up" name="subscribe" id="mc-embedded-subscribe" class="button">
          </div>
          <div id="mce-responses" class="clear">
            <div class="response" id="mce-error-response" style="display:none">Please enter a valid email</div>
            <div class="response" id="mce-success-response" style="display:none"></div>
          </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
          <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_69a2680f7acd058053dfa0020_32fc4ab161" tabindex="-1" value=""></div>
      </form>
    </div>
  </div>

  <div class="about-author">
    <div class="underline-thin blue author-details">
      <h3 class="secondary-section-title"><?php _e('About Chloe Elgar', 'creative_ritual') ?></h3>
    </div>
    <img  class="author-pic" src="<?php echo get_template_directory_uri();?>/assets/images/cct-author-@2x.png" alt="About the Author Chloe" />
    <div class="author-bio"><?php echo CFS()->get( 'author_bio' ); ?></div>
  </div>
</div> <!-- .container -->



<?php get_footer(); ?>
