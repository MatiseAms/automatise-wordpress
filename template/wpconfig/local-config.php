<?php

error_reporting(E_ALL);
ini_set('display_errors', 'On');
define( 'DB_NAME', 'local' );
define( 'DB_USER', 'root' );
define( 'DB_PASSWORD', 'root' );
define( 'DB_HOST', 'localhost' );
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

// define( 'WPLANG', '' );

define( 'SAVEQUERIES', false ); //debug queries

define('WP_DEBUG', true);
define('SCRIPT_DEBUG', true);

$protocol = 'https://'; 

define('WP_CONTENT_DIR', dirname(__FILE__).'/wp-content');
define('WP_CONTENT_URL', $protocol.$_SERVER['SERVER_NAME'].'/wp-content');

define('ACFPATH', ABSPATH . '../../../src/includes/field-groups' );