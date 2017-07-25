<!-- Currently not in use but saving -->
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
