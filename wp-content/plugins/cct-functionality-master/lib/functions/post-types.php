<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

 // Register Custom Post Type
 function custom_post_type() {

 	$labels = array(
 		'name'                  => 'Podcasts',
 		'name'                  => 'Podcasts',
 		'singular_name'         => 'Podcast',
 		'menu_name'             => 'Podcasts',
 		'name_admin_bar'        => 'Podcast',
 		'archives'              => 'Podcast Archives',
 		'parent_item_colon'     => 'Parent Podcast:',
 		'all_items'             => 'All Podcasts',
 		'add_new_item'          => 'Add New Podcast',
 		'add_new'               => 'Add New',
 		'new_item'              => 'New Podcast',
 		'edit_item'             => 'Edit Podcast',
 		'update_item'           => 'Update Podcast',
 		'view_item'             => 'View Podcast',
 		'search_items'          => 'Search Podcast',
 		'not_found'             => 'Not found',
 		'not_found_in_trash'    => 'Not found in Trash',
 		'featured_image'        => 'Featured Image',
 		'set_featured_image'    => 'Set featured image',
 		'remove_featured_image' => 'Remove featured image',
 		'use_featured_image'    => 'Use as featured image',
 		'insert_into_item'      => 'Insert into podcast',
 		'uploaded_to_this_item' => 'Uploaded to this podcast',
 		'items_list'            => 'Podcasts list',
 		'items_list_navigation' => 'Podcasts list navigation',
 		'filter_items_list'     => 'Filter podcasts list',
 	);
 	$args = array(
 		'label'                 => 'Podcast',
 		'description'           => 'Chloe\'s Countertop | Conscious Conversations Podcast',
 		'labels'                => $labels,
 		'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', 'post-formats' ),
 		'taxonomies'            => array('category'),
 		'hierarchical'          => false,
 		'public'                => true,
 		'show_ui'               => true,
 		'show_in_menu'          => true,
 		'menu_position'         => 5,
 		'menu_icon'             => 'dashicons-microphone',
 		'show_in_admin_bar'     => true,
 		'show_in_nav_menus'     => true,
 		'can_export'            => true,
 		'has_archive'           => true,
 		'exclude_from_search'   => false,
 		'publicly_queryable'    => true,
 		'capability_type'       => 'post',
 	);
 	register_post_type( 'podcast', $args );

  $labels = array(
    'name'                  => 'Events',
    'name'                  => 'Events',
    'singular_name'         => 'Event',
    'menu_name'             => 'Events',
    'menu_name'             => 'Events',
    'name_admin_bar'        => 'Event',
    'archives'              => 'Event Archives',
    'parent_item_colon'     => 'Parent Event:',
    'all_items'             => 'All Events',
    'all_items'             => 'All Events',
    'add_new_item'          => 'Add New Event',
    'add_new'               => 'Add New',
    'new_item'              => 'New Event',
    'edit_item'             => 'Edit Event',
    'update_item'           => 'Update Event',
    'view_item'             => 'View Event',
    'search_items'          => 'Search Event',
    'not_found'             => 'Not found',
    'not_found_in_trash'    => 'Not found in Trash',
    'featured_image'        => 'Featured Image',
    'set_featured_image'    => 'Set featured image',
    'remove_featured_image' => 'Remove featured image',
    'use_featured_image'    => 'Use as featured image',
    'insert_into_item'      => 'Insert into event',
    'uploaded_to_this_item' => 'Uploaded to this event',
    'items_list'            => 'Events list',
    'items_list'            => 'Events list',
    'items_list_navigation' => 'Events list navigation',
    'items_list_navigation' => 'Events list navigation',
    'filter_items_list'     => 'Filter events list',
  );
  $args = array(
    'label'                 => 'Events',
    'description'           => 'Chloe\'s Countertop | Event',
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', 'post-formats', ),
    'taxonomies'            => array('category'),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'menu_icon'             => 'dashicons-calendar-alt',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'post',
  );
  register_post_type( 'event', $args );

 }
 add_action( 'init', 'custom_post_type', 0 );

 // Register Custom Post Type for Retreats
function retreats_post_type() {

	$labels = array(
		'name'                  => _x( 'Retreats', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Retreat', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Retreats', 'text_domain' ),
		'name_admin_bar'        => __( 'Retreats', 'text_domain' ),
		'archives'              => __( 'Retreat Archives', 'text_domain' ),
		'attributes'            => __( 'Retreat Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Retreat:', 'text_domain' ),
		'all_items'             => __( 'All Retreats', 'text_domain' ),
		'add_new_item'          => __( 'Add New Retreat', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Retreat', 'text_domain' ),
		'edit_item'             => __( 'Edit Retreat', 'text_domain' ),
		'update_item'           => __( 'Update Retreat', 'text_domain' ),
		'view_item'             => __( 'View Retreat', 'text_domain' ),
		'view_items'            => __( 'View Retreats', 'text_domain' ),
		'search_items'          => __( 'Search Retreat', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into reatreats', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this reatreats', 'text_domain' ),
		'items_list'            => __( 'Retreats list', 'text_domain' ),
		'items_list_navigation' => __( 'Retreats list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter retreats list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Retreat', 'text_domain' ),
		'description'           => __( 'Custom Post Type for Retreats', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes', ),
		'taxonomies'            => array( ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-palmtree',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'retreats', $args );

}
add_action( 'init', 'retreats_post_type', 0 );

// Register Custom Post Type for Testimonials
function testimonials() {

	$labels = array(
		'name'                  => _x( 'Testimonials', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Testimonial', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Testimonials', 'text_domain' ),
		'name_admin_bar'        => __( 'Testimonial', 'text_domain' ),
		'archives'              => __( 'Testimonial Archives', 'text_domain' ),
		'attributes'            => __( 'Testimonial Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Testimonial:', 'text_domain' ),
		'all_items'             => __( 'All Testimonials', 'text_domain' ),
		'add_new_item'          => __( 'Add New Testimonial', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Testimonials', 'text_domain' ),
		'edit_item'             => __( 'Edit Testimonials', 'text_domain' ),
		'update_item'           => __( 'Update Testimonials', 'text_domain' ),
		'view_item'             => __( 'View Testimonials', 'text_domain' ),
		'view_items'            => __( 'View Testimonials', 'text_domain' ),
		'search_items'          => __( 'Search Testimonial', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into testimonial', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this testimonial', 'text_domain' ),
		'items_list'            => __( 'Testimonials list', 'text_domain' ),
		'items_list_navigation' => __( 'Testimonials list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter testimonials list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Testimonial', 'text_domain' ),
		'description'           => __( 'Testimonial Post Type', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail', 'page-attributes', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-heart',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'testimonials', $args );

}
add_action( 'init', 'testimonials', 0 );
