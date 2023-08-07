<?php

/**
 * Nitropec functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Nitropec
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function nitropec_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Nitropec, use a find and replace
		* to change 'nitropec' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('nitropec', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support('title-tag');

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support('post-thumbnails');

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'nitropec_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action('after_setup_theme', 'nitropec_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function nitropec_content_width()
{
	$GLOBALS['content_width'] = apply_filters('nitropec_content_width', 640);
}
add_action('after_setup_theme', 'nitropec_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function nitropec_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'nitropec'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'nitropec'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'nitropec_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function nitropec_scripts()
{

	//Styles
	wp_enqueue_style('fonts-css', 'https://use.typekit.net/ynx5trp.css', array(), _S_VERSION); // fonts
	wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/css/vendor/bootstrap.min.css', array(), _S_VERSION); // Bootstrap
	wp_enqueue_style('swiper-css', get_template_directory_uri() . '/plugins/swiper/swiper-bundle.min.css', array(), _S_VERSION); // Swiper slider
	// wp_enqueue_style('lightbox-css', get_template_directory_uri() . '/plugins/lightbox/ekko-lightbox.css', array(), _S_VERSION); // Lightbox
	wp_enqueue_style('nitropec-style', get_template_directory_uri() . '/style.min.css', array(), _S_VERSION);	 // Nitropec compiled scss 

	//JS

	wp_enqueue_script('jquery-js', get_template_directory_uri() . '/js/jquery.min.js', array(), _S_VERSION, false);
	wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/vendor/bootstrap.bundle.min.js', array(), _S_VERSION, true);
	// wp_enqueue_script('fontawesome-js', get_template_directory_uri() . '/js/fontawesome.js', array(), _S_VERSION, true); // FontAwesome js
	wp_enqueue_script('nitropec-navigation-js', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);
	wp_enqueue_script('swiper-js', get_template_directory_uri() . '/plugins/swiper/swiper-bundle.min.js', array(), _S_VERSION, false); // Swiper slider js
	wp_enqueue_script('nitropec-main-js', get_template_directory_uri() . '/js/main.js', array(), _S_VERSION, true);
}
add_action('wp_enqueue_scripts', 'nitropec_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Custom functions addons
 *
 */
function enable_custom_types_upload($mime_types = array())
{
	$mime_types['vcf'] = 'text/vcard';
	$mime_types['vcard'] = 'text/vcard';
	$mime_types['zip'] = 'application/zip';
	$mime_types['gz'] = 'application/x-gzip';
	return $mime_types;
}
add_filter('upload_mimes', 'enable_custom_types_upload');

/**
 * Add Nav Menus registration
 */
include_once(get_template_directory() . '/functions/register_menus.php');

/**
 * Add support for Bootstrap 5 Menus NavWalker
 */
include_once(get_template_directory() . '/functions/menus-navwalker.php');

/**
 * Add support for SVG
 */
include_once(get_template_directory() . '/functions/svg_support.php');

/**
 * Add ACF Site options
 */
// include_once(get_template_directory() . '/functions/global-acf-options.php');

/**
 * Add support for custom Admin styles
 */
include_once(get_template_directory() . '/functions/admin-styles.php');

/**
 *  Add Theme Support for Featured Images (referred to also as post-thumbnails)
 */
include_once(get_template_directory() . '/functions/post-thumbnails.php');

/**
 * Add support header scripts
 */
include_once(get_template_directory() . '/functions/header_scripts.php');

/**
 * Add support to print all Resource Types for a Resource
 */
include_once(get_template_directory() . '/functions/print_category_terms.php');

/**
 * Add support to get the data of the Featured Image for the provided Post ID
 */
include_once(get_template_directory() . '/functions/get_featured_image_data.php');

/**
 * Add function to move Yoast SEO metabox to the bottom of every Post/Page
 */
include_once(get_template_directory() . '/functions/yoast_metabox_to_bottom.php');

/**
 * Add support to get the content or excerpt for the provided Post ID
 */
// include_once(get_template_directory() . '/functions/get_the_content.php');

/**
 * Add function to make excerpt's length 27 words
 */
// include_once(get_template_directory() . '/functions/custom_excerpt_length.php');

/**
 * Add function to customize WordPress's search query
 */
// include_once(get_template_directory() . '/functions/customize_search.php');


/**
 * Add helper function to return the top most level term
 */
// include_once(get_template_directory() . '/functions/get_term_top_most_parent.php');

/**
 * Add helper function to return … after the excerpt
 */
// include_once(get_template_directory() . '/functions/new_excerpt_more.php');

/**
 * Add function to redirect and noindex CPTs without Single (Detail) Page
 */
// include_once(get_template_directory() . '/functions/no_detail_post_types.php');

/**
 * Add support for Table of contents feature
 */
// include_once(get_template_directory() . '/functions/post_table_of_contents.php');


/** ------ Add functions for GTB Blocks below ------ */