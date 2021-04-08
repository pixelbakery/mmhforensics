<?php
/**
 * MMH Forensics functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package MMH_Forensics
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'mmhf_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function mmhf_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on MMH Forensics, use a find and replace
		 * to change 'mmhf' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'mmhf', get_template_directory() . '/languages' );

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
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'mmhf' ),
			)
		);

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
				'mmhf_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

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
endif;
add_action( 'after_setup_theme', 'mmhf_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function mmhf_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'mmhf_content_width', 640 );
}
add_action( 'after_setup_theme', 'mmhf_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function mmhf_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'mmhf' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'mmhf' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'mmhf_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function mmhf_scripts() {
	// CSS
	// wp_enqueue_style( 'mmhf-bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css', array());
	wp_enqueue_style( 'mmhf-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'mmhf-googlefonts','https://fonts.googleapis.com/css2?family=Poppins&family=Space+Grotesk&display=swap', array());
	wp_style_add_data( 'mmhf-style', 'rtl', 'replace' );
	wp_enqueue_style( 'mmhf-flickity', 'https://unpkg.com/flickity@2/dist/flickity.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'mmhf-pbstyle',get_stylesheet_directory_uri() . '/assets/css/pb-style.css', array(), _S_VERSION );

// JAVASCRIPT
	wp_enqueue_script( 'mmhf-bootstrapjs', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js', array(), true );
	wp_enqueue_script('mmhf-fontawesome', 'https://kit.fontawesome.com/87040b45a5.js', array());
	wp_enqueue_script( 'mmhf-pbscripts', get_stylesheet_directory_uri() . '/js/pb-general-scripts.js', array(), true );
	wp_enqueue_script( 'mmhf-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'mmhf-gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/gsap.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'mmhf-gsap-scrolltrigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/ScrollTrigger.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'mmhf-flickity', 'https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'mmhf-isotopes', 'https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'mmhf_scripts' );
/**
 * Load Custom Post Types
 */
require get_template_directory() . '/inc/CPT-videos.php';

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

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}
/**
 * Load Custom Comments Layout file.
 */
require get_template_directory() . '/inc/comment-helper.php';

// Create Theme Options page
if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));

}

// Allow SVG
add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {

  global $wp_version;
  if ( $wp_version !== '4.7.1' ) {
     return $data;
  }

  $filetype = wp_check_filetype( $filename, $mimes );

  return [
      'ext'             => $filetype['ext'],
      'type'            => $filetype['type'],
      'proper_filename' => $data['proper_filename']
  ];

}, 10, 4 );

function cc_mime_types( $mimes ){
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );

function fix_svg() {
  echo '<style type="text/css">
        .attachment-266x266, .thumbnail img {
             width: 100% !important;
             height: auto !important;
        }
        </style>';
}
add_action( 'admin_head', 'fix_svg' );
// END ALLOW SVGS

// GET PRIMARY POST CATEGORY
function get_primary_category($category){
  $useCatLink = true;
  // If post has a category assigned.
  if ($category){
    $category_display = '';
    $category_link = '';
    if ( class_exists('WPSEO_Primary_Term') )
    {
      // Show the post's 'Primary' category, if this Yoast feature is available, & one is set
      $wpseo_primary_term = new WPSEO_Primary_Term( 'category', get_the_id() );
      $wpseo_primary_term = $wpseo_primary_term->get_primary_term();
      $term = get_term( $wpseo_primary_term );
      if (is_wp_error($term)) {
        // Default to first category (not Yoast) if an error is returned
        $category_display = $category[0]->name;
        $category_link = get_category_link( $category[0]->term_id );
      } else {
        // Yoast Primary category
        $category_display = $term->name;
        $category_link = get_category_link( $term->term_id );
      }
    }
    else {
      // Default, display the first category in WP's list of assigned categories
      $category_display = $category[0]->name;
      $category_link = get_category_link( $category[0]->term_id );
    }
    // Display category
    if ( !empty($category_display) ){
      if ( $useCatLink == true && !empty($category_link) ){
      return ''.htmlspecialchars($category_display).'';
      } else {
      return ''.htmlspecialchars($category_display).'';
      }
    }
  }
}

// END PRIMARY POST CATEGORY



function last_updated(){
	$u_time = get_the_time('U');
	$u_modified_time = get_the_modified_time('U');
	if ($u_modified_time >= $u_time + 86400) {
		echo ",</br> Last updated on <time>" . get_the_modified_time('F jS, Y') . "</time>.";
	}
	else{ return; }
}
function check_category(){
	$cat = get_the_category();
	if(! empty( $cat ) && esc_html( $cat[0]->name ) != 'Uncategorized'){
		return "Categorized as " . esc_html( $cat[0]->name ) . '</br>';
	}
	else{ return; }
}
function aspect_ratio($ratio){
	switch($ratio){
		case '1x1':
			 return "ratio ratio-1x1";
		break;

		case '4x3':
			return "ratio ratio-4x3";
		break;

		case '2x1':
			return "ratio ratio-2x1";
		break;

		case '16x9':
			return "ratio ratio-16x9";
		break;

		case '21x9':
			return "ratio ratio-21x9";
		break;

	}
		return "ratio ratio-4x3";
}

function be_display_image_and_caption($ratio) {
	$get_ratio = aspect_ratio($ratio);
	echo '<figure class="post-featured-figure">';
	echo '<div class="post-featured-figure-wrapper ' . $get_ratio . '">';
	echo the_post_thumbnail( 'post-thumbnail', ['class' => 'img-fluid post-featured-image'] );
	echo '</div>';
	echo '<figcaption class="featured-image-caption">' . get_post( get_post_thumbnail_id() )->post_excerpt . '</figcaption>';
	echo '</figure>';
}

//Comment Field Order
add_filter( 'comment_form_fields', 'pb_comment_fields_custom_order' );
function pb_comment_fields_custom_order( $fields ) {
    $comment_field = $fields['comment'];
    $author_field = $fields['author'];
    $email_field = $fields['email'];
	  $city_field = $fields['city'];
    $url_field = $fields['url'];
    $cookies_field = $fields['cookies'];
    unset( $fields['comment'] );
    unset( $fields['author'] );
    unset( $fields['email'] );
		unset( $fields['city'] );
    unset( $fields['url'] );
    unset( $fields['cookies'] );
    // the order of fields is the order below, change it as needed:
    $fields['author'] = $author_field;
    $fields['email'] = $email_field;
    $fields['url'] = $url_field;
		$fields['city'] = $city_field;
    $fields['comment'] = $comment_field;
    $fields['cookies'] = $cookies_field;
    // done ordering, now return the fields:
    return $fields;
}

add_action( 'comment_post',	'save_comment_meta_data' );
function save_comment_meta_data( $comment_id ) {
    $city = wp_filter_kses( sanitize_text_field( $_POST['city'] ));
    add_comment_meta( $comment_id, 'city', $city );
}
add_filter( 'get_comment_author_link',	'attach_city_to_author' );
function attach_city_to_author( $author ) {
  $city = get_comment_meta( get_comment_ID(), 'city', true );
  if ( $city )
    $author .= " from ($city)";
	return $author;
}
