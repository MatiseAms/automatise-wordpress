<?php
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
// Function to remove admin menu
//===================
function remove_posts_from_admin() {
	remove_menu_page( 'edit.php' );
	remove_menu_page( 'edit-comments.php' );
}
add_action( 'admin_menu', 'remove_posts_from_admin', 999 );