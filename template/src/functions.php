<?php
/**
 * Functions page
 *
 * @author       Matise (matise.nl)
 * @package      Wordpress
 * @subpackage   macs
 * @version      1.0
 * @since        1.0
 */

define('COMMIT', '<commit>');
define('BRANCH', '<branch_ref>');

if (BRANCH === 'refs/heads/master'){
	define('MATISE_ENVIRONMENT', 'production');
} else if (BRANCH === 'refs/heads/staging'){
	define('MATISE_ENVIRONMENT', 'staging');
}


if (!defined('MATISE_ENVIRONMENT')) {
	define('MATISE_ENVIRONMENT', 'local');
}

switch (MATISE_ENVIRONMENT) {
	case 'local':
		define('API_DOMAIN', '<%= packageName %>.test');
		define('FRONTEND_DOMAIN', 'localhost:3000');
	break;
	default:
		define('API_DOMAIN', '<%= packageName %>.flywheelsites.com');
		define('FRONTEND_DOMAIN', '<%= packageName %>.matise.org');
	break;
}
//===================
// Enqueue scripts and styles.
//===================
function theme_scripts() {
	$include_url = get_template_directory_uri();
	$include_url = str_replace('https://', '//', $include_url);

	// Loads our main stylesheet.
	wp_enqueue_style('theme-css', $include_url.'/assets/main.css', array(), date("is"), false);
	wp_enqueue_script( 'theme-appjs', get_theme_file_uri( '/assets/main.js' ), array(), date("is"), true );
}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );

//===================
// Define menu-locations
//===================
function register_custom_nav_menus() {
	register_nav_menus( array(
		'header_menu' => 'Header menu',
		'footer_menu' => 'Footer menu'
	) );
}
if (function_exists('register_nav_menu')) {
	add_action( 'after_setup_theme', 'register_custom_nav_menus' );
}

//===================
// Function to get menus by slug
//===================
function get_menu_items_by_registered_slug($menu_slug) {
	$menu_items = array();
	if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_slug ] ) ) {
		$menu = get_term( $locations[ $menu_slug ] );
		$menu_items = wp_get_nav_menu_items($menu->term_id);
	}
	return $menu_items;
}


//===================
// Add theme support
//===================
function theme_name_setup() {
	add_theme_support( 'align-wide' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_post_type_support( 'page', 'excerpt' );
}
add_action( 'after_setup_theme', 'theme_name_setup' );

//===================
// Includes folder includes
//===================
require_once('includes/includes.php');
