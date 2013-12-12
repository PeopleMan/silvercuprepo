<?php
/**
 * Silvercup Properties functions and definitions
 *
 * @package Silvercup Properties
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 640; /* pixels */

if ( ! function_exists( 'silvercupproperties_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function silvercupproperties_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on SILVERCUPproperties, use a find and replace
	 * to change 'silvercupproperties' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'silvercupproperties', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */

	add_theme_support( 'post-thumbnails' );
	add_theme_support('post-thumbnails');
	add_image_size('large', 700, '', true); // Large Thumbnail
	add_image_size('medium', 250, 250, true); // Medium Thumbnail
	add_image_size('small', 120, 120, true); // Small Thumbnail
	add_image_size('custom-size', 350, 200, true); // Custom Thumbnail
	
	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'silvercupproperties' ),
	) );

	// Enable support for Post Formats.
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'silvercupproperties_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // silvercupproperties_setup
add_action( 'after_setup_theme', 'silvercupproperties_setup' );

/**
 * Register widgetized area and update sidebar with default widgets.
 */
function silvercupproperties_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'silvercupproperties' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'silvercupproperties_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function silvercupproperties_scripts() {
	wp_enqueue_style( 'silvercupproperties-style', get_stylesheet_uri() );

	wp_enqueue_script( 'silvercupproperties-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'silvercupproperties-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
}
add_action( 'wp_enqueue_scripts', 'silvercupproperties_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
*Load slider for pages
*/
require get_template_directory() . '/inc/custom-gallery.php';
/**
*Custom post types
*/
require get_template_directory() . '/inc/custom-post-types.php';




