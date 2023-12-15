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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ogivesas_bd' );

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
define( 'AUTH_KEY',         'PQ`m)av`RGTbzQv+@@:6Iqx*WZTtxB9?XoF`aV;+/@-I:oY4BQ[R@yVf1oZzzI<#' );
define( 'SECURE_AUTH_KEY',  'WM<1)67f@BR^]cUkUW2uv[Rc&dN:ymsgE[X?*s`g}R0p%jb&H}gE-QR*!p*PCJ4t' );
define( 'LOGGED_IN_KEY',    '1kc$Xaz}On:mC/XsXe8~785q#$**Dm@^MDrU6c._C)YMPN*K0bbakmLRUS`Aug:q' );
define( 'NONCE_KEY',        '4,2cVraI(8F;XEfbeeHeT%bLWlSD`tV.pZ2(RTk|u#Jg..2#Hc@cN(<uscyu!&S@' );
define( 'AUTH_SALT',        'rm*fEHk`9JN)yDSU#1UU GWR=2@:eL by>^M>UUj47.){j@F;/IQ-<Vuj*}d[W>u' );
define( 'SECURE_AUTH_SALT', 'LLUnM~z cu4]9^uEH)ymBc}_ihQ6mfsXFbBocg-_7g#$BbOg;c.,e24+Gtbtr~*P' );
define( 'LOGGED_IN_SALT',   '4P;K0Re0G}>Oo4B`MKEH+2m,kBJ{,z;crb%rU@k-&/)Idg^g26k`p;m>7%lvv6DF' );
define( 'NONCE_SALT',       ':;|9FHg!}1Y/,:(5s)Oc +H74*6S,{P]!,:/SG}X<V/h6JFT*R&H}5LdRxWNU7!Y' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
