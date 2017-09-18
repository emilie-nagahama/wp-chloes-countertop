<?php
/**
 * RED Starter Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package chloescountertop
 */

if ( ! function_exists( 'cct_starter_setup' ) ) :

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function cct_starter_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'desktop' => esc_html( 'Desktop Menu' ),
		'mobile' => esc_html( 'Mobile Menu' ),
		'work_footer' => esc_html( 'Work with Me Menu' ),
		'checkout_footer' => esc_html( 'Checkout These Menu' ),


	) );

	// Switch search form, comment form, and comments to output valid HTML5.
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

}
endif; // cct_starter_setup
add_action( 'after_setup_theme', 'cct_starter_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * @global int $content_width
 */
function cct_starter_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'cct_starter_content_width', 640 );
}
add_action( 'after_setup_theme', 'cct_starter_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function cct_starter_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html( 'Sidebar' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html( 'Footer' ),
		'id'            => 'footer',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'cct_starter_widgets_init' );

/**
 * Link all post thumbnails to the post permalink.
 *
 * @param string $html          Post thumbnail HTML.
 * @param int    $post_id       Post ID.
 * @param int    $post_image_id Post image ID.
 * @return string Filtered post image HTML.
 */
function wpdocs_post_image_html( $html, $post_id, $post_image_id ) {
    $html = '<a href="' . get_permalink( $post_id ) . '" alt="' . esc_attr( get_the_title( $post_id ) ) . '">' . $html . '</a>';
    return $html;
}
add_filter( 'post_thumbnail_html', 'wpdocs_post_image_html', 10, 3 );

/**
 * Filter the stylesheet_uri to output the minified CSS file.
 */

add_image_size( 'home-recent-thumb', 300, 300 ); //300 pixels wide (and unlimited height)

/**
 * Filter the stylesheet_uri to output the minified CSS file.
 */
function cct_starter_minified_css( $stylesheet_uri, $stylesheet_dir_uri ) {
	if ( file_exists( get_template_directory() . '/build/css/style.min.css' ) ) {
		$stylesheet_uri = $stylesheet_dir_uri . '/build/css/style.min.css';
	}

	return $stylesheet_uri;
}
add_filter( 'stylesheet_uri', 'cct_starter_minified_css', 10, 2 );

/**
 * Enqueue scripts and styles.
 */
function cct_starter_scripts() {
	wp_enqueue_style( 'cct-starter-style', get_stylesheet_uri() );

	wp_enqueue_script( 'cct-starter-skip-link-focus-fix', get_template_directory_uri() . '/build/js/skip-link-focus-fix.min.js', array(), '20130115', true );

	wp_enqueue_script("jquery");

	wp_enqueue_script( 'slick', get_template_directory_uri() . '/build/js/slick.min.js', array(), true );

	wp_enqueue_script( 'main', get_template_directory_uri() . '/build/js/main.min.js', array(), true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'cct_starter_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Filter the except length to 20 characters.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 100;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

/**
 * Add the Pocast and Event Custom Post Type to the Main Loop
 *
 */
 function add_my_post_types_to_query( $query ) {
	 if ( is_home() && !is_admin() && $query->is_main_query() ) {
			$query->set( 'post_type', array( 'post', 'event' ) );
		}
 }
 add_action( 'pre_get_posts', 'add_my_post_types_to_query' );

 /**
  * Add the Pocast and Event Custom Post Type to the archive loop
  *
  */

 function add_my_post_types_to_archive_loop( $query ) {
  if( is_category() || is_tag() && empty( $query->query_vars['suppress_filters'] ) ) {
    $query->set( 'post_type', array(
     'post', 'event'
		));
	  return $query;
	}
}
add_filter( 'pre_get_posts', 'add_my_post_types_to_archive_loop' );

/**
 * Filter the "read more" excerpt string link to the post.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */

function wpdocs_excerpt_more( $more ) {
    return sprintf( '<div class="read-more-bg"><a class="read-more" href="%1$s">%2$s</a></div>',
        get_permalink( get_the_ID() ),
        __( 'Read More', 'textdomain' )
			);
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

/**
 * Remove Featured image from pages that don't need it.
 *
 */

function remove_page_uneeded_fields() {
	remove_meta_box( 'postexcerpt' , 'page' , 'normal' );
	remove_meta_box( 'postimagediv' , 'page' , 'side' );
}
add_action( 'do_meta_boxes' , 'remove_page_uneeded_fields' );

/**
 * Add Pagination
 *
 */

function pagination_nav() {
    global $wp_query;

    if ( $wp_query->max_num_pages > 1 ) { ?>
        <nav class="pagination" role="navigation">
            <div class="nav-previous"><?php next_posts_link( '&larr; Older posts' ); ?></div>
            <div class="nav-next"><?php previous_posts_link( 'Newer posts &rarr;' ); ?></div>
        </nav>
<?php }
}

function pagination_bar() {
    global $wp_query;

    $total_pages = $wp_query->max_num_pages;

    if ($total_pages > 1){
        $current_page = max(1, get_query_var('paged'));

        echo paginate_links(array(
            'base' => get_pagenum_link(1) . '%_%',
            'format' => '/page/%#%',
            'current' => $current_page,
            'total' => $total_pages,
        ));
    }
}
