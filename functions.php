<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/assets.php',    // Scripts and stylesheets
  'lib/extras.php',    // Custom functions
  'lib/setup.php',     // Theme setup
  'lib/titles.php',    // Page titles
  'lib/wrapper.php',   // Theme wrapper class
  'lib/customizer.php' // Theme customizer
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);

/**
 * Register Custom Post Types
 */

 function create_posttype() {

    register_post_type( 'services',
    // CPT Options
        array(
            'labels' => array(
                'name'          => __( 'Services' ),
                'singular_name' => __( 'Service' ),
                'menu_name'     => __( 'Services' )
            ),
            'public'            => true,
            'has_archive'       => true,
            'menu_icon'           => 'dashicons-laptop',
            'rewrite'           => array('slug' => 'services'),
            'supports'          => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions' )
        )
    );

    register_post_type( 'portfolio',
    // CPT Options
        array(
            'labels' => array(
                'name'          => __( 'Portfolio' ),
                'singular_name' => __( 'Portfolio' ),
                'menu_name'     => __( 'Portfolio' )
            ),
            'public'            => true,
            'has_archive'       => true,
            'menu_icon'           => 'dashicons-format-image',
            'rewrite'           => array('slug' => 'portfolio'),
            'supports'          => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions' )
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );

add_image_size( 'portfolio', 9999, 475 ); // 220 pixels wide by 180 pixels tall, soft proportional crop mode
add_image_size( 'portfolio-crop', 582, 475, true );
add_image_size( 'blog', 364, 9999 );
add_image_size( 'blog-crop', 364, 273, true );

function be_menu_item_classes( $classes, $item, $args ) {
	if( 'header' !== $args->theme_location )
		return $classes;
	if( ( is_singular( 'post' ) || is_category() || is_tag() ) && 'Blog' == $item->title )
		$classes[] = 'current-menu-item';

	if( ( is_singular( 'code' ) || is_tax( 'code-tag' ) ) && 'Code' == $item->title )
		$classes[] = 'current-menu-item';

	if( is_singular( 'projects' ) && 'Case Studies' == $item->title )
		$classes[] = 'current-menu-item';

	return array_unique( $classes );
}
add_filter( 'nav_menu_css_class', 'be_menu_item_classes', 10, 3 );

// load contact form 7 files
add_action('wp_enqueue_scripts', 'load_wpcf7_scripts');
function load_wpcf7_scripts() {
    if ( is_page('contact') ) {
        if ( function_exists( 'wpcf7_enqueue_scripts' ) ) {
            wpcf7_enqueue_scripts();
        }
        if ( function_exists( 'wpcf7_enqueue_styles' ) ) {
            wpcf7_enqueue_styles();
        }
    }
}
