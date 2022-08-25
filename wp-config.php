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
define( 'DB_NAME', 'beningin_db' );

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
define( 'AUTH_KEY',         'tQO5LPWtS&7/nAjUC3=gDMyN~+1SXy-bx8YSxALNP:uc}o~Z<5x_J(!m(TxBz!*w' );
define( 'SECURE_AUTH_KEY',  ';xF4g@W,oz)N|uiyQ&/~M(C:LR[mzbg!QG>*=6<|w^@c/5^M1(k8tyW) LBvE!QF' );
define( 'LOGGED_IN_KEY',    '#M<xPk4})2Ut#teM|n>s |fRY{zp|^&yFlvA1iME,dUJBy9`n*<-r[l:+v&@Bi^y' );
define( 'NONCE_KEY',        '-n{mV@L<[=9PC6tmZoG(UAU&JZ,ZSy$pJ|fa<@jY.C<6<E.<TYkI.?Wl^FE>A}vh' );
define( 'AUTH_SALT',        'r6d?owq>N sGLQwe$#_VO1YC}+CwwR[KPl?^b|%!FaUly(;qWXw;!CT!k02:@/wl' );
define( 'SECURE_AUTH_SALT', '#~{/xb4als<+=OBzGvrk#9VYhL0s6G0*6>%Q~f_UwQlk9a5a6tt<Id8l)y-!nSe>' );
define( 'LOGGED_IN_SALT',   'q5wKlN8ToSqFe,%*z{!mj+7Gpiuv-e *a[^921){8G6V8(2{l&g!juT4dDc!#F#7' );
define( 'NONCE_SALT',       '^~STH%wO!c?is3CNGEbs_GXEfEiZ~eFj&RO0Tr/Y]z+?  1Q8J=,7;WO5#]CcWj3' );

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
