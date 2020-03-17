<?php
//===================
// Helper functions
//===================
require_once('helper-functions.php');

//===================
// Matise theme Development essentials
//===================
require_once('field-groups/acf.php');

//===================
// Theme specific functions functions
//===================
require_once('settings/index.php');
require_once('filters/index.php');

//===================
// WP Core
//===================
if (WEBSITE_TYPE === 'api') {
	require_once('wp-core/init.php');
}

//===================
// Components and partials
//===================
if (WEBSITE_TYPE === 'wordpress') {
	require_once('components/partials/generate.php');
	require_once('components/svgs/generate.php');
}
