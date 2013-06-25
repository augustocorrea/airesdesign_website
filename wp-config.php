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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'augu115_website');

/** MySQL database username */
define('DB_USER', 'augu115_website');

/** MySQL database password */
define('DB_PASSWORD', 'aires2013');

/** MySQL hostname */
define('DB_HOST', 'augu115.morfeo.urltemporal.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '&;VJbIA))?MVhtV{P$o4+Z qG*ms:n4agH%=L MYc*npWN>,a)o4<lm+G;v:W)LM');
define('SECURE_AUTH_KEY',  'D=CP^b Sy<?#Xa(:|V}}LWQMI99y)*>Tj~Arqj>K6!>s87r!L)EyyDswBd)#&h![');
define('LOGGED_IN_KEY',    '9g=>x.Z/[L~p9N#K>LwFJliTPDS^_%8c?IdqvK/_ Y2 ZR)qanxivbB)fAMls2ji');
define('NONCE_KEY',        '&Otc;R lQ18Q>[~qx5G1i@F$SeR!)?^d^{/NSUh>elZMAqVu>VVlCe:iBBLXu[|u');
define('AUTH_SALT',        '=# f}P}%x0W/Os)u.=p(}NcdANqQxc}$8/C!aA[Y%q0#@SV/6<EI]fS@i?}(nNSy');
define('SECURE_AUTH_SALT', '*<_%FMjo9iRe_~Rq-?~Rfsa=XUl]-M1{7o.umf@M>=Z:R^=lrYiPD;xZiQT!@[<=');
define('LOGGED_IN_SALT',   '=KUMPfy$_f6FiFK]X2g&3O`USeTiKCiKWI|~bM&?{DUOgm^TTE ?i<e:{<Qu/gB>');
define('NONCE_SALT',       'o$m8d8q<9B;o{He>d+>]vN+!Xyq{9hHfF4$^h<QF#!YJ+<M`@MC4.;F%mcwoKP[7');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
