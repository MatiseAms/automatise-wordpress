<?php
//===================
// Matise theme Development essentials
//===================
// Change home and rest url (for headless wordpress)
function change_home_url($url, $path) {
	if (!defined('API_DOMAIN') || !defined('FRONTEND_DOMAIN')) {
		return $url;
	}
	if (strpos($url,'https://' . API_DOMAIN . '/wp-json') > -1) {
		return $url;
	} else {
		$url = str_replace('https://' . API_DOMAIN, 'https://'. FRONTEND_DOMAIN , $url);
		if (MATISE_ENVIRONMENT === 'local') {
			$url = str_replace('https://', 'http://' , $url);
		}
		return $url;
	}
}

function change_rest_url($url, $path){
	if(!defined('API_DOMAIN') || !defined('FRONTEND_DOMAIN')){
		return $url;
	}
	$home = 'https://'.FRONTEND_DOMAIN.'/';
	$rest_home = 'https://'.API_DOMAIN.'/';
	if (strpos($url, $home.'wp-json/') > -1){
		return str_replace($home.'wp-json/', $rest_home.'wp-json/', $url);
	}
	return $url;
}

// Check if we are running on flywheel, if so, enable the home_url and rest_url filters
if (defined('FLYWHEEL_CONFIG_DIR') || MATISE_ENVIRONMENT === 'local'){
	foreach( [ 'post', 'page', 'post_type' ] as $type ) {
		add_filter( $type . '_link', 'change_home_url' , 9999, 2);
	}
	add_filter( 'home_url', 'change_home_url' , 9999, 2);
	add_filter('rest_url', 'change_rest_url', 9999, 4);
}


if (!headers_sent()) {
	header('Access-Control-Allow-Origin: *');
	header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
	header('Access-Control-Max-Age: 1000');
	header('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With');
}
