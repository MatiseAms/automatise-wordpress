<?php

//===================
// Matise theme Development essentials
//===================
require_once('field-groups/acf.php');
require_once('filters/acf.php');

//===================
// Theme specific functions functions
//===================
// require_once('image_settings.php');
require_once('components/partials/generate.php');
require_once('components/svgs/generate.php');

//===================
// More settings
//===================

/**
 * Helper function to get the relative permalink based on post id
 */
function get_relative_permalink($id) {
	return apply_filters('matise_get_relative_url', get_the_permalink($id));
}

function debug ($debug) {
	print_r('<pre>');
	print_r($debug);
	print_r('</pre>');
}

function perror ($debug) {
	error_log(print_r($debug, 1));
}

function remove_posts_from_admin() {
	remove_menu_page( 'edit.php' );
	remove_menu_page( 'edit-comments.php' );
}
add_action( 'admin_menu', 'remove_posts_from_admin', 999 );