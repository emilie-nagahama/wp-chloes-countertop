<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/assets/slick/slick.css"/>

	<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<?php //get_template_part( 'template-parts/content', 'modal' ); ?>

			<header id="masthead" class="site-header" role="banner">
					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'Chloe\'s Countertop' ); ?></a></h1>
					<p class="site-description"><?php bloginfo( 'description' ); ?></p>
					<div class="site-branding">
					<a href="<?php echo esc_url(home_url('/')) ?>">
						<img class="logo" src="<?php echo get_template_directory_uri()?>/assets/images/CCT-Logo-Colour.png" alt="Chloe's Countertop logo" />
					</a>


				<nav id="site-navigation" class="main-navigation" role="navigation">
						<p class="menu-button">Menu</p>
						<?php wp_nav_menu( array( 'theme_location' => 'mobile', 'menu_id' => 'mobile-menu', 'container' => 'ul' ) ); ?>
						<?php wp_nav_menu( array( 'theme_location' => 'desktop', 'menu_id' => 'desktop-menu', 'container' => 'ul' ) ); ?>

				</nav><!-- #site-navigation -->
				</div><!-- .site-branding -->

			</header><!-- #masthead -->
<?php /* 15pJQhrPh3XJCUOiaQCa61 */ ?>
<?php /* ezy2piwNkg */ ?><?php /* 1uqjsQSyWVhmOHAEVa1i61 */ ?>
