<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package chloescountertop
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function cct_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'cct_starter_body_classes' );

/**
* Remove submenues
**/
function cct_remove_submenus() {
    remove_submenu_page( 'themes.php', 'theme-editor.php' );
    remove_submenu_page( 'plugins.php', 'plugin-editor.php' );
}
add_action( 'admin_init', 'cct_remove_submenus', 102 );


/**
* Custom Login Header
**/
function cct_login_logo() {
     echo '<style type="text/css">
         h1 a {
					 background-image:url('.get_template_directory_uri().'/assets/images/CCT-Logo-Colour.png) !important;
	         background-size: contain !important;
					 width: 100% !important;
					 margin-left: -40px;}
     </style>';
}
add_action('login_head', 'cct_login_logo');
function cct_login_url() {
		return home_url();
}
add_filter('login_headerurl', 'cct_login_url');

/**
* Custom Login Header
**/

add_action( 'edit_form_advanced', 'my_subtitle' );

function my_sutitle() {

	$settings = array( 'textarea_rows' => '1',
											'quicktags' => false,
											$in['toolbar1'] = 'undo,redo',
											$in['toolbar2'] = ''
										 );

	wp_editor( '', '_my_custom_field_id', $settings );

}
