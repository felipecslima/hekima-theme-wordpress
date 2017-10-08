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
	define('DB_NAME', 'hekima');
}
if (!defined('DB_USER')) {
	define('DB_USER', 'root');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', '81718910');
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
define('AUTH_KEY',         'QR+/Q]`vK}>_p.0!?BMNgSH0-,}3VvA,-1`r T5;n0Cm-%D0|rb;)d|fe#r(G)#^');
define('SECURE_AUTH_KEY',  '(lDM%d$jyY@6rw`FDd+1XjsJ:3v8AJXC$mYgY;I2:(ad%%~@+V,Y~&E03)rxBoaw');
define('LOGGED_IN_KEY',    '+r^r#YzL@nhS&(%#y/-< D-&bK`bJ,@6i 1pW!KJ%>@$eAE/X=*N#.QQ,sr->H+[');
define('NONCE_KEY',        'mz!70]xlhfdG:6Qz.%F2@?qes Ox25w,C:>-`ZI4WguR<LdB+5eF|q[>?#lof(7`');
define('AUTH_SALT',        'x@-/<~& `2[rDx]pe#h:4x?a25xkpg|h0hq^xl6H-M:*b* 2WWxov:EB4T.+GrI_');
define('SECURE_AUTH_SALT', 'vL{QJfi!P}ip3OOQZmVh-sI%+xS^tE`M?}q!9A1Tl?NF~4u.4rB7A%2t2N|ZQ%20');
define('LOGGED_IN_SALT',   '_uTW[D%rPx@kk=FPKfKD]GZYx-BLlQbr.2Br8P0Io?N4{-C@LEyDdc{m-p5[=:OS');
define('NONCE_SALT',       '9Wn-PL2kmBKMhPf0FQO,SR8etEi!Va8flPZ4qU oHC;u~ksA|&Fi%KlzZ a9?my7');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'lfj_';

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
