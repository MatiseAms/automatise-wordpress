<?php

add_filter('acf/settings/save_json', 'my_acf_json_save_point');

function my_acf_json_save_point( $path ) {

	// update path
	if(defined('MATISE_ENVIRONMENT') && MATISE_ENVIRONMENT === 'local' && defined('ACFPATH')){
		$path = ACFPATH;
	} else {
		$path = get_stylesheet_directory() . '/includes/field-groups';
	}

	// return
	return $path;
}

add_filter('acf/settings/load_json', 'my_acf_json_load_point');

function my_acf_json_load_point( $paths ) {
	// remove original path (optional)
	unset($paths[0]);

	// append path
	if(defined('MATISE_ENVIRONMENT') && MATISE_ENVIRONMENT === 'local' && defined('ACFPATH')){
		$paths[] = ACFPATH;
	} else {
		$paths[] = get_stylesheet_directory() . '/includes/field-groups';
	}

	// return
	return $paths;
}

/**
 * Hide the acf menu when not on local env. as changes will not be saved.
 */
if(defined('MATISE_ENVIRONMENT')){
	function remove_menus(){
		remove_menu_page( 'edit.php?post_type=acf-field-group' ); //Field groups - plugin page
	}
	add_action( 'admin_menu', 'remove_menus', 999 );
}
