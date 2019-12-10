<?php

// error_reporting(E_ALL);
// ini_set('display_errors', 'On');

define('DB_NAME', 'production');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');
define('DB_HOST', 'localhost');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

// define( 'WPLANG', '' );

define( 'SAVEQUERIES', false ); //debug queries

define('WP_DEBUG', false);
define('SCRIPT_DEBUG', false);
// /**
//  * This will log all errors notices and warnings to a file called debug.log in
//  * wp-content (If Apache does not have write permission, you may need to create
//  * the file first and set the appropriate permissions (i.e. use 660) )
//  */
define('WP_DEBUG_LOG', false);
define('WP_DEBUG_DISPLAY', false);

$protocol = 'https://';

define('WP_SITEURL', $protocol.$_SERVER['SERVER_NAME'].'/wordpress');
define('WP_HOME', $protocol.$_SERVER['SERVER_NAME'].'/');
define('WP_CONTENT_DIR', dirname(__FILE__).'/content');
define('WP_CONTENT_URL', $protocol.$_SERVER['SERVER_NAME'].'/content');
