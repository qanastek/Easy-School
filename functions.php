<?php
/**
 * Easy_School_wp functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Easy_School_wp
 */

/**
*	If memory issue use that for clean all.
*
*	flush_rewrite_rules();
*/

define( 'WP_DEBUG', false );


if ( ! function_exists( 'easy_school_wp_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function easy_school_wp_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on easy_school_wp, use a find and replace
		 * to change 'easy_school_wp' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'easy_school_wp', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'easy_school_wp' ),
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
		add_theme_support( 'custom-background', apply_filters( 'easy_school_wp_custom_background_args', array(
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
add_action( 'after_setup_theme', 'easy_school_wp_setup' );

/*Fonction pour afficher le logo dans le header*/
function header_custom_logo()
{
  
  /*
    Récupération de l'ID du logo entrer dans la partie logo de l'outil de personalisation du thème.
  */
  $custom_logo_id = get_theme_mod( 'custom_logo' );

  /*
    Récupéré le logo
  */
  $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );

  /*Si ont à répuré un logo alors l'afficher*/
  if ( has_custom_logo() ) {
    echo '<img src="'. esc_url( $logo[0] ) .'" style="width: 21%;" alt="logo">';
  }
  /*Sinon afficher le nom du site*/ 
  else {
    echo get_bloginfo( 'name' );
  }

}

/*Fonction pour afficher le logo dans le footer*/
function footer_custom_logo()
{
  
  /*
    Récupération de l'ID du logo entrer dans la partie logo de l'outil de personalisation du thème.
  */
  $custom_logo_id = get_theme_mod( 'custom_logo' );

  /*
    Récupéré le logo
  */
  $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );

  /*Si ont à répuré un logo alors l'afficher*/
  if ( has_custom_logo() ) {
    echo '<img src="'. esc_url( $logo[0] ) .'" style="width: 80%;" alt="logo">';
  }
  /*Sinon afficher le nom du site*/ 
  else {
    echo get_bloginfo( 'name' );
  }

}

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function easy_school_wp_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'easy_school_wp_content_width', 640 );
}
add_action( 'after_setup_theme', 'easy_school_wp_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function easy_school_wp_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'easy_school_wp' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'easy_school_wp' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'easy_school_wp_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function easy_school_wp_scripts()
{

	/*JQuery*/
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.min.js', array(), '20151215', true );

	wp_enqueue_style( 'easy_school_wp-style', get_stylesheet_uri() );

	wp_enqueue_script( 'easy_school_wp-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'easy_school_wp-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'easy_school_wp_scripts' );

/**
*	Disable comments
*/
include 'controllers/general/no_comments.php';

/**
*	Function for adding custom CSS to the theme
*/
function additional_custom_styles()
{
	/**
	*	Bootstrap
	*	@link https://getbootstrap.com/
	*/
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/vues/css/bootstrap.css' );

    /**
	*	Custom style
	*/
    wp_enqueue_style( 'custom', get_template_directory_uri() . '/vues/css/custom.css' );

    /**
	*	Custom style colors
	*/
    wp_enqueue_style( 'theme_color', get_template_directory_uri() . '/vues/css/theme_color.css' );

    /**
	*	Font Awesome
	*	@link https://fontawesome.com/
	*/
    wp_enqueue_style( 'fontawesome', 'https://use.fontawesome.com/releases/v5.2.0/css/all.css' );
    
}
add_action( 'wp_enqueue_scripts', 'additional_custom_styles' );

/**
*	Fonction de customisation
*/
function mytheme_customize_register( $wp_customize )
{
	/**
	*	Création du boutton dans le customizer
	*/
	$wp_customize->add_panel(
		'header_naviation_panel',
		array(
			'title' => __( 'Theme settings', 'easy_school_wp' ),
			'description' => __( 'Theme settings list.', 'easy_school_wp' ), // Include html tags such as 

			'priority' => 25, // Not typically needed. Default is 160
			'capability' => 'edit_theme_options', // Not typically needed. Default is edit_theme_options
			'theme_supports' => '', // Rarely needed
			'active_callback' => '', // Rarely needed
		)
	);

	/**
	*	Création des sections
	*/
	include 'models/customizer/sections_customizer.php';
	 
	/**
	*	Images du slider
	*/
	include 'models/customizer/slider_customizer.php';
	
	/**
	*	Devises de l'établissement
	*/
	include 'models/customizer/devises_customizer.php';

	/**
	*	Réseaux sociaux
	*/
	include 'models/customizer/social_medias_customizer.php';

	/**
	*	Informations
	*/
	include 'models/customizer/informations_customizer.php';

	/**
	*	Horraires d'ouverture
	*/
	include 'models/customizer/horraires_customizer.php';

	/**
	*	C.G.U
	*/
	include 'models/customizer/cgu_customizer.php';

	/**
	*	éléments non renseigné
	*/
	include 'models/customizer/unregistered_fields_customizer.php';

	/**
	*	changement de footer
	*/
	include 'models/customizer/footers_customizer.php';

};

/*
*	Fonction de customisation
*/
add_action( 'customize_register', 'mytheme_customize_register' );

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
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

// ------------ Functions Custom ------------

/**
*	Donne la version du thème
*
*	@return La version actuelle
*/
function get_current_version()
{
	$current_version = "1.0.0";
	
	return $current_version;
}

/**
* Gets for the CGU
*/
require 'controllers/cgu/gets.php';

/**
* Gets of each basic informations
*/
require 'controllers/basics_informations/gets.php';

/**
* Gets for the contact page
*/
require 'controllers/contact/gets.php';

/**
* Gets for the index slider
*/
require 'controllers/index/gets_slider.php';

/**
* Gets for the index mottos
*/
require 'controllers/index/gets_mottos.php';

/**
* Gets for the posts
*/
require 'controllers/posts/gets.php';

/**
* Gets in general
*/
require 'controllers/general/gets.php';

/**
* Gets for custom posts
*/
require 'controllers/custom_posts/gets.php';
