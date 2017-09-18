<?php
/**
 * The main template file.
 *
 * Template Name: About
 */
get_header(); ?>

<div id="about-banner" class="banner">
  <div class="tag-line">
    <h2 class="h2-tag"><span>Meet</span> Chloe Elgar</h2>
  </div>
</div>

<div class="featured-in">
  <div class="feature">
    <h4 class="secondary-section-title">Writing Featured In:</h4>
  </div>

  <?php if( have_rows('featured_in') ): ?>
	<?php while( have_rows('featured_in') ): the_row();

		$company = get_sub_field('company_name');
		$link = get_sub_field('article_link');
	?>

	  <div class="feature">
    	<?php if( $link): ?>
        <h4 class="feat-item">
          <a target="_blank" href="<?php echo $link; ?>"><?php echo $company; ?></a>
        </h4>
      <?php endif; ?>
		</div>

	<?php endwhile; ?>
  <?php endif; ?>
</div>

<div class="container about-mini-bio">
  <div class="mini-bio-content">
    <?php the_field('mini_bio'); ?>
  </div>
  <div class="mini-bio-image">
    <img src="<?php the_field('bio_image'); ?>" alt="">
    <a class="button-link" href="<?php echo get_site_url(); ?>/about/#my-story">Read my Full Story</a>
  </div>
</div>

<div class="container">
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

<div class="container about-styles">
	<style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'><iframe src='https://player.vimeo.com/video/214095591' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>

  <div id="my-story"></div>

  <div class="about-header-1">
    <h1 class="title"><?php echo CFS()->get( 'main_heading' );?></h1>
  </div>

  <div class="ab-section-1"><?php echo CFS()->get( 'first_block_of_content' );?></div>

  <div class="yellow-title">
    <h2 class="section-title"><?php echo CFS()->get( 'secondary_heading' );?></h2>
  </div>

  <div class="ab-section-1"><?php echo CFS()->get( 'secondary_content_block' );?></div>

  <div class="yellow-title">
    <h2 class="section-title"><?php echo CFS()->get( 'secondary_heading_two' );?></h2>
  </div>

  <div class="ab-section-1"><?php echo CFS()->get( 'third_content_block' );?></div>

  <div class="yellow-title">
    <h2 class="section-title"><?php echo CFS()->get( 'secondary_heading_three' );?></h2>
  </div>

  <div class="ab-section-1"><?php echo CFS()->get( 'fourth_content_block' );?></div>

  <div class="about-header-1 prof">
    <h2 class="title"><?php echo CFS()->get( 'main_heading_two' );?></h2>
  </div>

  <div class="ab-section-1"><?php echo CFS()->get( 'fifth_content_block' );?></div>

  <div class="ab-section-1"><?php echo CFS()->get( 'return_to_food_academy' );?></div>

</div> <!-- .container -->

<?php get_footer(); ?>
