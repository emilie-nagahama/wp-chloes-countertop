<?php
/**
 * The main template file.
 *
 * Template Name: Blog
 */

get_header(); ?>

<div id="blog-banner" class="banner">
	<div class="tag-line">
		<h2 class="h2-tag blue"><span>Blog</span></h2>
		<h3 class="sub-text">Conscious Living & Intuitive Eating</h3>
	</div>
</div>

<div id="patterned-banner" class="sidebar-banner">
</div>
<div class="container-w-sidebar">

	<div class="underline-thin blue">
		<h3 class="secondary-section-title">Recent Posts</h3>
	</div>

	<?php get_template_part('template-parts/pages/blog/recent-posts'); ?>

	<div id="content" class="site-content">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
				<div class="blog-feed">
					<div class="underline-thin blue">
						<h3 class="secondary-section-title">Restaurant Reviews</h3>
						<a class="see-more-cat" href="<?php get_template_directory_uri() ?>/category/restaurant-reviews">See All Restaurant Reviews</a>
					</div>

					<div class="cat-feed">
						<?php get_template_part('template-parts/pages/blog/restaurants'); ?>
					</div>

					<div class="cat-sidebar light-green">
						<?php
							$cta_restaurants = get_field('cta_restaurant_reviews');
							$cta_restaurants_heading = get_field('cta_restaurant_heading');
							$cta_restaurants_subheading = get_field('cta_restaurant_subheading');
							$cta_restaurant_link = get_field('cta_restaurant_link');
						?>
						<img src="<?php echo $cta_restaurants; ?>" class="cta-image" alt="">
						<h3 class=""><?php echo $cta_restaurants_heading; ?></h3>
						<p class="cta-sub"><?php echo $cta_restaurants_subheading; ?></p>
						<?php if( get_field('cta_restaurant_link') ): ?>
							<a class="button-link" href="<?php echo $cta_restaurant_link
							 ?>">
								Learn More
							</a>
						<?php endif; ?>
					</div>
				</div>

				<div class="blog-feed">
					<div class="underline-thin blue">
						<h3 class="secondary-section-title">Product Love</h3>
						<a class="see-more-cat" href="<?php get_template_directory_uri() ?>/category/restaurant-reviews">See All Product Love Posts</a>
					</div>

					<div class="cat-feed">
						<?php get_template_part('template-parts/pages/blog/product-love'); ?>
					</div>

					<div class="cat-sidebar light-yellow">
						<img src="<?php the_field('cta_product_love'); ?>" class="cta-image" alt="">
						<h3 class=""><?php the_field('cta_product_love_heading'); ?></h3>
						<p class="cta-sub"><?php the_field('cta_product_love_subheading'); ?></p>
						<?php if( get_field('cta_product_love_link') ): ?>
							<a class="button-link" href="<?php the_field('cta_product_love_link') ?>">
								Learn More
							</a>
						<?php endif; ?>
					</div>
				</div>

				<div class="full-width home-optin">
				  <?php get_template_part( 'template-parts/pages/home/home-optin'); ?>
				</div>

				<div class="blog-feed">
					<div class="underline-thin blue">
						<h3 class="secondary-section-title">Conscious Living</h3>
						<a class="see-more-cat" href="<?php get_template_directory_uri() ?>/category/restaurant-reviews">See All Conscious Living</a>
					</div>

					<div class="cat-feed">
						<?php get_template_part('template-parts/pages/blog/conscious'); ?>
					</div>

					<div class="cat-sidebar light-blue">
						<img src="<?php the_field('cta_conscious_living'); ?>" class="cta-image" alt="">
						<h3 class=""><?php the_field('cta_conscious_living_heading'); ?></h3>
						<p class="cta-sub"><?php the_field('cta_conscious_living_subheading'); ?></p>
						<?php if( get_field('cta_conscious_living_link') ): ?>
							<a class="button-link" href="<?php the_field('cta_conscious_living_link') ?>">
								Learn More
							</a>
						<?php endif; ?>
					</div>
				</div>

				<div class="blog-feed">
					<div class="underline-thin blue">
						<h3 class="secondary-section-title">Recipes</h3>
						<a class="see-more-cat" href="<?php get_template_directory_uri() ?>/category/restaurant-reviews">See More Recipes</a>
					</div>

					<div class="cat-feed">
						<?php get_template_part('template-parts/pages/blog/recipes'); ?>
					</div>

					<div class="cat-sidebar pink">
						<img src="<?php the_field('cta_recipes'); ?>" class="cta-image" alt="">
						<h3 class=""><?php the_field('cta_recipes_heading'); ?></h3>
						<p class="cta-sub"><?php the_field('cta_recipes_subheading'); ?></p>
						<?php if( get_field('cta_recipes_link') ): ?>
							<a class="button-link" href="<?php the_field('cta_recipes_link') ?>">
								Learn More
							</a>
						<?php endif; ?>
					</div>
				</div>

			</main><!-- #main -->

		</div><!-- #primary -->

	<footer class="content-footer">
		<?php // get_template_part( 'inc/categories'); ?>
	</footer><!-- .content-footer -->

	</div><!-- #content -->

</div>

<?php get_footer(); ?>
