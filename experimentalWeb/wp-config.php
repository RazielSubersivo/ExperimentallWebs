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
define( 'DB_NAME', 'experimentalldb' );

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
define( 'AUTH_KEY',         'v{idJ$_iRfT)2V2^/Xx2N~x]6LR@mN^J5z%~&}M*oh=<tgQB#;VL_j Cgj:#6wyO' );
define( 'SECURE_AUTH_KEY',  'B@x.iG+heKXq7;NoD(<HOamUJZ<x:D50oh2S1/7A3(tUHb-d-yIU-xwy^g]uC~AG' );
define( 'LOGGED_IN_KEY',    'mL~~<^owADz^c1D_PXHW-G;Xb4KEFMKD.NRt:NO|lu)Zu1P]CokAxBd7dnNy[rGd' );
define( 'NONCE_KEY',        't:+-X1clKJ[R5ibHEToXz0> NDdJFk0T%Cs}a=7ZpC|>Y&NEvfeset?}U${!ehpS' );
define( 'AUTH_SALT',        'BBI~jt5J5y0,i?85}_S8<E9xgN&(Z/I.jp#01|%=:Di-2&+|C?:7fq1N[j4PG0!d' );
define( 'SECURE_AUTH_SALT', 'KKk3zYt*h/lkiy|hdXm1m @7;k_pMu(}t|-<}y3`npHOP!SS%kcX4`LNAOt#^`*3' );
define( 'LOGGED_IN_SALT',   'ehzc);3p:@ohATwKl]~OAUKrjnUX*9$61Ji|m^!Ng7Jos&iN$|ag*gY7Sg9e<Hw_' );
define( 'NONCE_SALT',       '.WP(E/*hZqiFJ_mK%9NS0QXU:23cU(x0L5:P{Bu`aCM;zh|vw[m-erb174W$&,q0' );

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
