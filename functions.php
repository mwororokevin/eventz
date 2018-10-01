<?php
/**
 * eventZ functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package eventZ
 */

if ( ! function_exists( 'eventz_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function eventz_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on eventZ, use a find and replace
		 * to change 'eventz' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'eventz', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary'    => esc_html__( 'Primary', 'eventz' ),
			'secondary'  => esc_html__( 'Secondary', 'eventz' )
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'eventz_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'eventz_setup' );

function eventz_add_editor_style(){
	add_editor_style('dist/css/editor-style.css');
}
add_action('admin_init', 'eventz_add_editor_style');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function eventz_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'eventz_content_width', 1140 );
}
add_action( 'after_setup_theme', 'eventz_content_width', 0 );


/**
 * Enqueue scripts and styles.
 */
function eventz_scripts() {
	wp_enqueue_style( 'eventz-style', get_stylesheet_uri() );

	wp_enqueue_style( 'eventz-bootstrap', get_template_directory_uri() . '/dist/css/bootstrap.min.css', false, '1.1', 'all');

	wp_enqueue_style('eventz-fontawesome', get_template_directory_uri() . '/fonts/font-awesome/css/font-awesome.min.css');

	// wp_enqueue_style('eventz-better-nav', get_template_directory_uri() . '/dist/css/bootstrap-better-nav.min.css');

	wp_register_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', false, '', true);
	wp_enqueue_script('popper');

	wp_enqueue_script( 'eventz-tether', get_template_directory_uri() . '/src/js/tether.min.js', array(), '20170115', true );

	wp_enqueue_script( 'eventz-bootstrap', get_template_directory_uri() . '/src/js/bootstrap.min.js', array(jquery), '20170915', true );

	// wp_enqueue_script( 'eventz-nav-scroll', get_template_directory_uri() . '/src/js/nav-scroll.js', array(jquery), '20170115', true );
	
	wp_enqueue_script( 'eventz-skip-link-focus-fix', get_template_directory_uri() . '/src/js/skip-link-focus-fix.js', array(), '20151215', true );

	// wp_enqueue_script( 'eventz-bootstrap', get_template_directory_uri() . '/src/js/bootstrap-better-nav.min.js', array(jquery), '20170915', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'eventz_scripts' );

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
 * Widgets File Additions.
 */
require get_template_directory() . '/inc/widgets.php';

/**
 * Bootstrap Navwalker File
 */
require get_template_directory() . '/inc/bootstrap-wp-navwalker.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}