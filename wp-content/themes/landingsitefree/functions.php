<?php

if ( ! defined( 'THEME_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'THEME_VERSION', wp_get_theme()->get( 'Version' ) );
}

if ( ! function_exists( 'landingsitefree_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function landingsitefree_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on LandingSiteFree, use a find and replace
		 * to change 'landingsitefree' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'landingsitefree', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'align-wide' );

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for core custom logo.
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 192,
				'width'       => 192,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);

		// Experimental support for adding blocks inside nav menus
		add_theme_support( 'block-nav-menus' );

		// Add support for experimental link color control.
		add_theme_support( 'experimental-link-color' );
	}
endif;
add_action( 'after_setup_theme', 'landingsitefree_setup' );

if ( ! function_exists( 'landingsitefree_fonts_url' ) ) :
	/**
	 * Register Google fonts for LandingSiteFree
	 *
	 * Create your own landingsitefree_fonts_url() function to override in a child theme.
	 *
	 * @since 1.0
	 *
	 * @return string Google fonts URL for the theme.
	 */
	function landingsitefree_fonts_url() {
		$fonts_url = '';

		/* Translators: If there are characters in your language that are not
		* supported by Poppins, translate this to 'off'. Do not translate
		* into your own language.
		*/
		$font_families = array( 'DM+Sans:wght@300;400;500;600;700' );

		if ( ! empty( $font_families  ) ) {

			$query_args = array(
				'family' => implode( '&family=', $font_families ), //urlencode( implode( '|', $font_families ) ),
				// 'subset' => urlencode( 'latin,latin-ext' ),
				'display' => 'swap',
			);

			$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css2' );
		}

		if ( ! class_exists( 'WPTT_WebFont_Loader' ) ) {
			// Load Google fonts from Local.
			require_once get_theme_file_path( 'inc/lib/wptt-webfont-loader.php' );
		}

		return esc_url( wptt_get_webfont_url( $fonts_url ) );
	}
endif;

/**
 * Enqueue scripts and styles.
 */
function landingsitefree_enqueue_scripts() {
	$min  = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';

	wp_enqueue_script('jquery');
	wp_enqueue_script( 'landingsitefree-custom', get_template_directory_uri() . '/assets/js/jquery.custom.js', array(), '1.0.0', 'all' );	

	// Register theme stylesheet.
	$theme_version = wp_get_theme()->get( 'Version' );
	// FontAwesome.
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome/css/all' . $min . '.css', array(), '5.15.3', 'all' );
	wp_enqueue_style( 'landingsitefree-fonts', landingsitefree_fonts_url(), array(), null );

	$deps = array( 'font-awesome' );
	global $wp_styles;
	if ( in_array( 'wc-blocks-vendors-style', $wp_styles->queue ) ) {
		$deps[] = 'wc-blocks-vendors-style';
	}

	wp_enqueue_style( 'landingsitefree-style', get_stylesheet_uri(), $deps, date( 'Ymd-Gis', filemtime( get_theme_file_path( 'style.css' ) ) ) );
	wp_enqueue_style( 'landingsitefree-design', get_template_directory_uri() . '/design.css', $deps, date( 'Ymd-Gis', filemtime( get_theme_file_path( 'design.css' ) ) ) );
	wp_enqueue_style( 'landingsitefree-responsive-style', get_template_directory_uri() . '/responsive.css', $deps, date( 'Ymd-Gis', filemtime( get_theme_file_path( 'responsive.css' ) ) ) );

}
add_action( 'wp_enqueue_scripts', 'landingsitefree_enqueue_scripts' );

function landingsitefree_block_assets() {
	$min = '';
	$deps = array( 'font-awesome' );
	global $wp_styles;
	if ( in_array( 'wc-blocks-vendors-style', $wp_styles->queue ) ) {
		$deps[] = 'wc-blocks-vendors-style';
	}

	// FontAwesome.
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome/css/all' . $min . '.css', array(), '5.15.3', 'all' );
	wp_enqueue_style( 'landingsitefree-design', get_template_directory_uri() . '/design.css', $deps, date( 'Ymd-Gis', filemtime( get_theme_file_path( 'design.css' ) ) ) );
	wp_enqueue_style( 'landingsitefree-responsive-style', get_template_directory_uri() . '/responsive.css', $deps, date( 'Ymd-Gis', filemtime( get_theme_file_path( 'responsive.css' ) ) ) );		
	
}
add_action( 'enqueue_block_assets', 'landingsitefree_block_assets' );

/**
 *
 * Enqueue scripts and styles.
 */
function landingsitefree_editor_styles() {
	// Enqueue editor styles.
	add_editor_style(
		array(
			landingsitefree_fonts_url(),
		)
	);
}
add_action( 'admin_init', 'landingsitefree_editor_styles' );

/**
 * Load about page.
 */
require get_template_directory() . '/inc/about.php';

/**
 * Load core file.
 */
require_once get_template_directory() . '/inc/init.php';

/**
 * Add Excerpt for Page.
 */
add_post_type_support( 'page', 'excerpt' );


/**
 * Admin Scripts.
 */
add_action( 'admin_enqueue_scripts', 'landingsitefree_backend_styles' );

function landingsitefree_backend_styles() {

  // Enqueue your backend CSS file
  wp_enqueue_style( 'landingsitefree-backend-style', get_stylesheet_directory_uri() . '/assets/css/admin.css', array(), '1.0.2', 'all' );

  // (Optional) If your CSS file depends on other styles (like WordPress core styles)
  // wp_enqueue_style( 'my-backend-style', get_stylesheet_directory_uri() . '/admin.css', array( 'wp-admin' ) );
}