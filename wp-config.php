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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'testwordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '=tI4Qr$`oaJMmt&T`ty*AU4Wxq9t:KY/CR~a%}AW4(jKaL`=e&OXal@1eI auR&e' );
define( 'SECURE_AUTH_KEY',  'EZVzk$+^f!s]GmqD0GSJU|wVhI%GA]<QV*x7q.m@>wc1o786MOL,EPDO@ev`va-z' );
define( 'LOGGED_IN_KEY',    '!R,i7aL&@~G&$U5!i} bYCnrz0FRW#QLq1 4|{NA*e7HGi_:lU%_ntrXd56=S/fd' );
define( 'NONCE_KEY',        'dusLl2{b|_zxW0q4H y+4!(yKtmS=A)A14IX}2DQ&<3|7u/^EYk%.2H3.9ylb$fW' );
define( 'AUTH_SALT',        'OPEXZYhMoP9uj; |c)/vTB%d]7| <6`pT~l<T?}Yy8}wQCgRUifToCyR,9njC]o@' );
define( 'SECURE_AUTH_SALT', 'Z8VT/e)&pce^v-2M7A0:?;{i 95iU<RGjJ3wo~4wl]-8Ogg)`Y C>U b6-LwUkQ4' );
define( 'LOGGED_IN_SALT',   '_LJljh<THYaQ.HTn69lZ6j1,(D$LmF12jZk*VpnPfP%q`<FfSNckm$]j%be9>Cii' );
define( 'NONCE_SALT',       'o;]%)`e%q&%>l6Fv3[mXi6FD#PCF%N4$sp<=.wj6X_M?^[i](MuV26$oa/6::pB6' );

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
