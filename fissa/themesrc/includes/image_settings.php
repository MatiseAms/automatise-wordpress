<?php
//===================
// Theme specific functions functions
//===================


// add_theme_support( 'post-thumbnails' );
// update_option( 'upload_url_path', 'https://' . API_DOMAIN . '/wp-content/uploads' );

/**
 * Allow svg uploads
 */
function cc_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');
