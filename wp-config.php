<?php
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
 *
 * @package WordPress
 */
 
// Include local configuration
if (file_exists(dirname(__FILE__) . '/local-config.php')) {
	include(dirname(__FILE__) . '/local-config.php');
}

// Global DB config
if (!defined('DB_NAME')) {
	define('DB_NAME', 'klub_jagiellonski_devel');
}
if (!defined('DB_USER')) {
	define('DB_USER', 'root');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', '');
}
if (!defined('DB_HOST')) {
	define('DB_HOST', 'localhost');
}

/** Database Charset to use in creating database tables. */
if (!defined('DB_CHARSET')) {
	define('DB_CHARSET', 'utf8');
}

/** The Database Collate type. Don't change this if in doubt. */
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
define('AUTH_KEY',         'm!abeFeKFi;6k^0-fktzUjYtcJ:{NaU^M3JW&E!YlD3UGb4+EgS?9uW aJS=<,uv');
define('SECURE_AUTH_KEY',  'xP&rnzzptHE{Q6l0vYW6_V:|^mRLASCYe`leano0#|0uD~0~;r:~P$M|]`$52sg>');
define('LOGGED_IN_KEY',    'XONK,itUl[Op/VH|YiEL^P/k#AaPC2A|(bMs(x?%OsfnnWqeX{hoO/auOX6i6=qs');
define('NONCE_KEY',        'XX^*g4k>RZ8.Z^R`6+Ge$0-H66uj 4+FAz%z[.?JV*zqrH~b5ARmaZ>`c;6-%fo=');
define('AUTH_SALT',        'K^C0v)O*=VaE]~1+rMP_~yJa810+vB*I;gr?X=?hDfXd [N$r.snPP2l;VpRdC-?');
define('SECURE_AUTH_SALT', '3=V!AN2;.U&XMsU+>?v#f%|.8H>q7` iM7t8$(sPSk1g-1*C$VUNf>>iH[!odPQF');
define('LOGGED_IN_SALT',   'jbC9pR =YyeTri.J-J3d_@(P%2x6e(t}H^WO$yLxX S|VRh^v+e&m9%4P($UcoH7');
define('NONCE_SALT',       'q^:UPmX4U!S`yC6w{sWxap`]6P5UyOveHd@9X8;B=+pn$b+{[%0EcH Z?}sB~W=/');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'kj_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
