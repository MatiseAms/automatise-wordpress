<?php

namespace Matise;

// use Matise\Register_Fields;
// use Matise\Utilities;

// add_action( 'init', __NAMESPACE__ . '\\matise_start', 0);
// /**
//  * Starts the fissa by instantiating each of the classes (which is
//  * included via the autoloader).
//  */
// function matise_start() {
// 	// check for plugin using plugin name
// 	include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
// 	if ( !is_plugin_active( 'matise-wp-core/matise-core.php' ) ) {
// 		function matise_admin_notice(){
// 			echo '<div class="notice notice-warning is-dismissible">
// 				<p>Matise WP Core plugin is required for this project, please install and/or activate the plugin.</p>
// 			</div>';
// 		}
// 		add_action('admin_notices', __NAMESPACE__ . '\\matise_admin_notice');
// 		return;
// 	}
	

// 	$basic_fields = new Register_Fields\Basics();
// 	$path_page = new Pages\Path();
// 	$menus = new Utilities\Menus();
// 	$search = new Utilities\Search();
// 	$translations = new Utilities\Translations();


// 	// add extended fields variables to page endpoints
// $basic_fields->init_by_array(
// 	array(
// 		'uri',
// 		'link',
// 		'fields',
// 		'title',
// 		'children',
// 		'siblings',
// 		'content',
// 		'excerpt',
// 		'featured_image',
// 		'categories',
// 		'tags',
// 		'template',
// 		'guid',
// 		'breadcrumbs',
// 		'seo',
//		'custom
// 	)
// );

//	init basic uri pages
//	$path_page->init();


//	$menus->translation_key = '<%= name %>';
// 	$menus->menus = array(
// 		'header_menu' => 'Header menu',
// 		'footer_menu' => 'Footer menu',
// 		'social_menu' => 'Social menu',
// 		'legal_menu' => 'Legal menu'
// 	);
// 	// register wp-json/menus/all
//	$menus->init();

//	init search endpoint
//	$search->init();
//	$search->enable_default_filter();

//	Add translations to the project
//	$translations->translation_key = '<%= name %>';
// 	$translations->init();
		// if (MATISE_ENVIRONMENT === 'production') {
		// 	$cache->netlify_hook = '';
		// 	$cache->site_name = <%= name %>;
		// 	$cache->init();
		// }
// }
