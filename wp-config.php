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
define( 'DB_NAME', 'botsoruramai' );

/** Database username */
define( 'DB_USER', 'botsoruramai' );

/** Database password */
define( 'DB_PASSWORD', 'Saghnash15*' );

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
define( 'AUTH_KEY',         'PmiT5(KV:nF_I%!_F/ErLuR2l8xJ?^e&.d%|9,(se?g<xYc3EKc4g@Q+#*IZ|F>%' );
define( 'SECURE_AUTH_KEY',  'z,V}xQ8}z AgVelQU:>Pp/kT-Z~#;8Q1^t~E:oFXZ`BY!={_.O5|19Mn/l[h/!dk' );
define( 'LOGGED_IN_KEY',    '-h^(dv~q|#oqL2=ReR&OI9%)uUX asv!:e>lO(qCp,mI>LosxJ83})weG@6d9-M=' );
define( 'NONCE_KEY',        '`9A7vRUNr~I6p6zS}#JvOF,97*wTfu74;@NlMz9t|_$3Z6I*R|}ep>E.-9vYk2dq' );
define( 'AUTH_SALT',        'i`rq4IWQsle$w}^UJ},5X@ke-|>[;CzxQD;x4{{,1e#r){iE}# crpI<ctQ$xZbE' );
define( 'SECURE_AUTH_SALT', '&]S+nG!-[kzUTGET(Ip;ZBi*fJU,d8;j%S9;6orn0S,8!mV]/i+>L9n48D?qXoL ' );
define( 'LOGGED_IN_SALT',   'gj;9Hpu72Ty<fpMeVh# o2=B*9AF@3,k{,RPV~{.|x {LQlKj)uO(2_|%35?oUuf' );
define( 'NONCE_SALT',       'gXRQ|1eH8jQ!dIozd_2no|C?YUbtiH,ufPp6?Ry%]JKVd_%H6!?j>S`i2`$dsyKy' );

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
