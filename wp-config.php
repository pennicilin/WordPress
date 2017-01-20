<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'chalongrut_web');

/** MySQL database username */
define('DB_USER', 'chalongrut_web');

/** MySQL database password */
define('DB_PASSWORD', 'majinga4U');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '5IxagrCO,ykB|v!>EZ`=Av{d4|aT(1#RB_XoeUPsM(<>?,xrw6;Hf<7%`t_%Rdtr');
define('SECURE_AUTH_KEY',  '8_Tt5!1{&Ct|&tx`J5=Mg3QV>#[ mlvQCvj/;3xLO_waL>Y@Q17>`uhY%gXIwF3Y');
define('LOGGED_IN_KEY',    '-t!aI_L&Dm^NfoZ=8OhaT/>#t,2kfgD<4c7W:c1tg><<x(lh8~>t}&ON|m3Uh5vO');
define('NONCE_KEY',        'D1cX;=Urk99b&0@96`Z0R7 *MBZ=_-_@6/:0Hd`>i~v3FYEE I}?CZLQ6;d%qs6l');
define('AUTH_SALT',        '3fCO`=]e!D{7XG^l^$J,x8mPe?N<Zz$ybktuRM18qvKB3F&HaONx@a_u+k96|k+I');
define('SECURE_AUTH_SALT', 'Pq0&7NF1?pfg+n4}$G>vw@b*amx}#nU1ZygbS.}:J6Co<V;*O4-z<L{6#.x>%Dl.');
define('LOGGED_IN_SALT',   'KG31F>4d%71}RC9{adK-gTh8evcxzOE^8O`:Rdpx]2-EmAECX0 1E#f~S~}PtH^3');
define('NONCE_SALT',       '3Lop6PSfhc:R,+1|+pG&nefA9,m+tD-c)TUu7nT.!K?C&F|}V8C?Wf8yG3@qTNdG');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
