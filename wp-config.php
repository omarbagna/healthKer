<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress-healthker' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('FS_METHOD', 'direct');


/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Kr&o[nv>MW5={I0@Z2/JZ`0oj)r@Q-!GR WP3Mwef{f-a>C8MvH,F-[Gp+;VT%4x' );
define( 'SECURE_AUTH_KEY',  'arGQ0;5(H/.l5^#e-_VtdD/rXWC)%tp&9??4REq{]NK#dFCG|H%]g>tm_FZE(Uuq' );
define( 'LOGGED_IN_KEY',    'AG[c]5bDD|~%>cqJUztpZR?D.}]j+!!`p[Y3[?!oL&YL<*:kkDFc~)o_rjI_@)IP' );
define( 'NONCE_KEY',        'r?nHNIbuo<?1X,_~_7kQO][|rxjKm$ku8=.~b8e]x]Hx#/PL4JY`0.u*gKrwg.?U' );
define( 'AUTH_SALT',        '4Kh/IJ850_#n!DG/1=l _tw`(wkn$.j!RH`E}7REO59Bk-mbQcKn/0Ww<I]0RUxv' );
define( 'SECURE_AUTH_SALT', 'qZqL&0RrI!ulynayAvw8xyw{MO~CdT;u8w$T1_R!V**OC1`4&gy#3;{er[M#K:qv' );
define( 'LOGGED_IN_SALT',   '_Y`<[O|lwLXOULlQ0k7PZ5hXa`*~ T|F)Q7m(#}bTjK+ZbXHv)<P<o/$rU9E57JB' );
define( 'NONCE_SALT',       ';lnk@~)=v^1YdgK*EZ2)@16US&RF^`F{vw<qFN_ 2@pE6p)s;JcX^^dKGo1JiR@v' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
