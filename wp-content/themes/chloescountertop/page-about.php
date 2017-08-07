<?php
/**
 * The main template file.
 *
 * Template Name: About 2017
 */
get_header(); ?>

<div id="about-banner" class="banner">
  <div class="tag-line">
    <h2 class="h2-tag"><span>Meet</span> Chloe Elgar</h2>
  </div>
</div>

<div class="container about-intro">
  <h3 class="inline-accent"><?php the_field('intro'); ?></h3>
</div>

<div class="container mission-statements">
  <h3 class="h2-tag blue">
    <span><?php _e('My Mission'); ?></span>
  </h3>

  <ul class="mission-slider">
    <?php
    if( have_rows('my_mission') ):
      while ( have_rows('my_mission') ) : the_row(); ?>
      <li class="statement"><p><?php the_sub_field('mission_statement'); ?></p></li>
    <?php
    endwhile;
    else :
    endif;
    ?>
  </ul>
</div>

<div class="container about-story">
  <p class="chloes-story"><?php the_field('chloes_story'); ?></p>
</div>

<div class="container story-blog-posts">
  <div class="underline-thin blue">
    <h3 class="secondary-section-title">Read about Chloe's story in more depth on the blog</h3>
  </div>
  <?php
    $posts = get_field('story_blog_posts');

    if( $posts ): ?>
        <ul>
        <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
            <?php setup_postdata($post);
                  $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
            ?>
            <li>
              <a href="<?php echo get_permalink(); ?>">
                <div class="about-blog-thumb" style="background-image: url('<?php echo $thumb['0'];?>')">
                </div>
                <h4 class="h4-title"><?php echo the_title(); ?></h4>
              </a>
            </li>
        <?php endforeach; ?>
        </ul>
        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
    <?php endif; ?>
</div>

<div class="container offerings">
  <h3 class="h2-tag blue">
    <span><?php _e('Chloe\' Offerings'); ?></span>
  </h3>

  <div class="about-cta mentorship-cta">
    <div class="mentorship about-cta-left">
      <div class="feat-img" style="background-image: url('<?php the_field('mentorship_featured_image') ?>')"></div>
    </div>
    <div class="mentorship about-cta-right">
      <div class="cta-content">
        <h4 class="cta-heading"><?php the_field('mentorship'); ?></h4>
        <p><?php the_field('mentorship_copy'); ?></p>
        <a href="<?php the_field('mentorship_page_link'); ?>" class="button-link cta-page-link"><?php _e('Learn mentorship') ?></a>
      </div>
    </div>
  </div>

  <div class="about-cta intuitive-cta">
    <div class="intuitive about-cta-left">
      <div class="cta-content">
        <h4 class="cta-heading"><?php the_field('intuitive'); ?></h4>
        <p><?php the_field('intuitive_copy'); ?></p>
        <a href="<?php the_field('intuitive_page_link'); ?>" class="button-link cta-page-link"><?php _e('Learn about reading sessions') ?></a>
      </div>
    </div>
    <div class="intuitive about-cta-right">
      <div class="feat-img" style="background-image: url('<?php the_field('intuitive_featured_image') ?>')"></div>
    </div>
  </div>

  <div class="about-cta holistic-cta">
    <div class="holistic about-cta-left">
      <div class="feat-img" style="background-image: url('<?php the_field('holistic_featured_image') ?>')"></div>
    </div>
    <div class="holistic about-cta-right">
      <div class="cta-content">
        <h4 class="cta-heading"><?php the_field('holistic'); ?></h4>
        <p><?php the_field('holistic_copy'); ?></p>
        <a href="<?php the_field('holistic_page_link'); ?>" class="button-link cta-page-link"><?php _e('Get in touch') ?></a>
      </div>
    </div>
  </div>

  <div class="about-cta w_p-cta">
    <div class="w_p about-cta-left">
      <div class="cta-content">
        <h4 class="cta-heading"><?php the_field('w_p'); ?></h4>
        <p><?php the_field('w_p_copy'); ?></p>
        <a href="<?php the_field('w_p_page_link'); ?>" class="button-link cta-page-link"><?php _e('See featured press + publications') ?></a>
      </div>
    </div>
    <div class="w_p about-cta-right">
      <div class="feat-img" style="background-image: url('<?php the_field('w_p_featured_image') ?>')"></div>
    </div>
  </div>
</div>

<div class="container">
  <style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style>
  <div class='about-page-video embed-container'>
    <iframe src='https://player.vimeo.com/video/214095591' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
  </div>

  <div class="underline-thin blue">
    <h3 class="secondary-section-title">Brand Ambassador For:</h3>
  </div>

  <div class="brand-ambassador">
  <?php
    if( have_rows('brand_ambassador_logos') ):
        while ( have_rows('brand_ambassador_logos') ) : the_row(); ?>

          <a href="<?php the_sub_field('company_link'); ?>" target="_blank" class="brand-logo">
            <img src="<?php the_sub_field('brand_logo'); ?>" alt="">
            <h4 class="h4-title"><?php the_sub_field('brand_name'); ?></h4>
          </a>

      <?php endwhile;
    else :
    endif;
  ?>
    </div>
</div>

<?php get_footer(); ?>
