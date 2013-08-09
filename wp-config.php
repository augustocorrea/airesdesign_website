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
define('DB_NAME', 'aires_website');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '1^(o* {tgkIXG);!xtzt09aErL0(h`uDT*w7JI;(CwJ9ekZ:v-+/Iz=FJ*FCR}Us');
define('SECURE_AUTH_KEY',  'bQGn{1XMbUKTy;=@=o@)9<P{z=@V,G.*a(&X/QjuXZd8bd `.S]UC.sZaZ:r=@Wc');
define('LOGGED_IN_KEY',    '[%x4wXO^hhqjcXr0 ,*q`4|$%zTyU<zrBIjb#ERc5*C0Xr N_hs44h=|~CRU@E7h');
define('NONCE_KEY',        ';X+ir@2nZqk~(B/mDh=HpB}$ML04LE*4/P.w{bblICi<#xFy[!.crPpl:u0da6kK');
define('AUTH_SALT',        'LCVdnnX?Nz&xD~<<@Qnc0{K-U=E}~Iy,Xf<<s6Z[Na+0 gw(e.@8V$YFQ26v:n^;');
define('SECURE_AUTH_SALT', 'Yy+oQ|eAiy21vnE/~uc~iX8*Czi_P(,qLO9|evDhAS~BXZy{4j,ZLw*6o>A[JN5p');
define('LOGGED_IN_SALT',   '(B!5%FuvmYAcXOFcS+B}QlKcUSCco+^G,ag*$<]j9|4_jj1$:BT[y3dD>@I_){2=');
define('NONCE_SALT',       'ZcBBm!/9h|Y~gbr1mHBGmm~E~% yE!v139wzjGyxtYdQ1#t?.U*Q24E!O_@;JAyB');

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
