<?php
/**
 * Functions page
 *
 * @author       Matise (matise.nl)
 * @package      Wordpress
 * @subpackage   <%= name %>
 * @version      1.0
 * @since        1.0
 */

define('COMMIT', '<commit>');
define('BRANCH', '<branch_ref>');

define('WORDPRESS_TYPE', '<%= type %>');


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
<% if (type === 'normal') { %>
add_action( 'wp_enqueue_scripts', 'theme_scripts' );
<% } %>
<% if (type === 'headless') { %>
add_action( 'admin_enqueue_scripts', 'theme_scripts' );
<% } %>
//===================
// Includes folder includes
//===================
require_once('includes/includes.php');
