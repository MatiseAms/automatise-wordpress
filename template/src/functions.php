<?php
/**
 * Functions page
 *
* @author       <%= author %>
 * @package      Wordpress
 * @subpackage   <%= name %>
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
	wp_enqueue_script('theme-appjs', get_theme_file_uri( '/assets/main.js' ), array(), date("is"), true );
}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );

//===================
// Includes folder includes
//===================
require_once('includes/includes.php');

// Update CSS within in Admin
function admin_style() {
	wp_enqueue_style('admin-styles', get_template_directory_uri().'/assets/admin.css');
}
add_action('admin_enqueue_scripts', 'admin_style');


function acf_change_icon_on_files ( $icon, $mime, $attachment_id ){ // Display thumbnail instead of document.png
		
		if ( strpos( $_SERVER[ 'REQUEST_URI' ], '/wp-admin/upload.php' ) === false && $mime !== 'video/mp4' ){
			$get_image = wp_get_attachment_image_src ( $attachment_id, 'thumbnail' );
			if ( $get_image ) {
				$icon = $get_image[0];
			} 
		}
		return $icon;
	}
	
	add_filter( 'wp_mime_type_icon', 'acf_change_icon_on_files', 10, 3 );