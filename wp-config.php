<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'docsoraya' );

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
define( 'AUTH_KEY',         'gwYtdi`rBIs]JX:h64!ourM{/{;58)7A)IKJ4,,,g]BmK>B4BP8>L `.t$8~JOJX' );
define( 'SECURE_AUTH_KEY',  'WHnXT7j?[<vL_QqEk.;z}os ~C7g {[]o+pQp6GV`Pa*;_T[=GC@K5H[eP+!:IE)' );
define( 'LOGGED_IN_KEY',    'vu~KYSQs{<5u}!X]V3Z_Hs3fMPJc7DV.4J@cTiijsd^C-AC(PLj/kC,T!aM{N*X)' );
define( 'NONCE_KEY',        'bq8@mu@%L-,Oe%y1]+lhYkSy8lf?fk!}a:=?M-wcTOwU|X$JKD%rrw1{M&(Ue;=;' );
define( 'AUTH_SALT',        'hDT~BBe+z,-XOIYb+P`ux}jG19 d<[&uppH9tAR}M39{xR1@tVm+m,>jpr=pWPKg' );
define( 'SECURE_AUTH_SALT', 'ziX5v-_:$J6L&Tn%T)*nV: +YxuPFVxRBkR~78+Bj6yI6{F&952sXzn)Ms]qn>U#' );
define( 'LOGGED_IN_SALT',   ';eK%Oi(nu}S3y/PN_5LwESMM:Jy+W[l$&Dxj[!`T0a6SPr*WBaHA@? pi5~A]^xh' );
define( 'NONCE_SALT',       ')R2g:i`hL.:Nd%o)o^2s,|lT2(_tU>a/m]n;TlAa2_5l=asjg]qT%JPD<WXm{NIe' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
