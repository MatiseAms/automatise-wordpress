<?php
/** Enable W3 Total Cache */
define('WP_CACHE', false); // Added by W3 Total Cache

/**
* Wordpress configuration by Matise.
*/

/**
* The base configurations of the WordPress.
*
* This file has the following configurations: MySQL settings, Table Prefix,
* Secret Keys, WordPress Language, and ABSPATH. You can find more information
* by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
* wp-config.php} Codex page. You can get the MySQL settings from your web host.
*
* This file is used by the wp-config.php creation script during the
* installation. You don't have to use the web site, you can just copy this file
* to "wp-config.php" and fill in the values.
*/

// ftp credentials
// define('FTP_USER', ''); // Your FTP username
// define('FTP_PASS', ''); // Your FTP password
// define('FTP_HOST', ''); // Your FTP URL:Your FTP port

// Include local configuration
if (file_exists(dirname(__FILE__).'/local-config.php')) {
	include dirname(__FILE__).'/local-config.php';
}

/* Database Charset to use in creating database tables. */
if (!defined('DB_CHARSET')) {
	define('DB_CHARSET', 'utf8');
}

/* The Database Collate type. Don't change this if in doubt. */
if (!defined('DB_COLLATE')) {
	define('DB_COLLATE', '');
}

/**#@+
* Authentication Unique Keys and Salts.
*
* Change these to different unique phrases!
* You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
* You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
*
* @since 2.6.0
*/

<%- salts %>
/**#@-*/

/*
* WordPress Database Table prefix.
*
* You can have multiple installations in one database if you give each a unique
* prefix. Only numbers, letters, and underscores please!
*/
$table_prefix = 'wp_';

/*
* WordPress Localized Language, defaults to English.
*
* Change this to localize WordPress. A corresponding MO file for the chosen
* language must be installed to wp-content/languages. For example, install
* de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
* language support.
*/
define('WPLANG', '');

/*
* Set custom paths
*
*/
if (!defined('WP_SITEURL')) {
	define('WP_SITEURL', 'http://'.$_SERVER['SERVER_NAME'].'/wordpress');
}
if (!defined('WP_HOME')) {
	define('WP_HOME',    'http://'.$_SERVER['SERVER_NAME'].'/');
}
if (!defined('WP_CONTENT_DIR')) {
	define('WP_CONTENT_DIR', dirname(__FILE__).'/content');
}
if (!defined('WP_CONTENT_URL')) {
	define('WP_CONTENT_URL', 'http://'.$_SERVER['SERVER_NAME'].'/content');
}

/*
* For developers: WordPress debugging mode.
*
* Change this to true to enable the display of notices during development.
* It is strongly recommended that plugin and theme developers use WP_DEBUG
* in their development environments.
*/
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}

define( 'AUTOMATIC_UPDATER_DISABLED', true );

/* That's all, stop editing! Happy blogging. */

/* Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', dirname(__FILE__).'/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH.'wp-settings.php';
