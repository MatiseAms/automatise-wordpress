<?php

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