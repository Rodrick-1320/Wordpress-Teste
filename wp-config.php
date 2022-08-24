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
define( 'DB_NAME', 'Rdk' );

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
define( 'AUTH_KEY',         'SSXN+k$C$&Tth-$P_%v2yRHE]LPWBOD-l?b{9~4zU|/Ips+:Kb<OeEOOh4,,3`(F' );
define( 'SECURE_AUTH_KEY',  '_JT0_T[$2&cfERs!P>m*`EeJ!mplQGO ~3JEg*I|bB_aV{J}I~U;Wl8RHJ;18B<+' );
define( 'LOGGED_IN_KEY',    'fxF(oS]!U9t.,&.=],47!5l|#RY5)&!wT$F2%BUB>8.AfMUc12d.aNWuRI&2#n1b' );
define( 'NONCE_KEY',        'hh{o]*I3n$<?Id*Yoia*{aA0g$(TH9AXtbY^m ESkp[*BT6fr Njw.,KWe42I#xB' );
define( 'AUTH_SALT',        '_SMzak!jr$:++@9w4]ud/YT9n_@4^g4Etm76DN.3O OJbm#gkB{O!dAEc9BBDfFh' );
define( 'SECURE_AUTH_SALT', ',~*F)p^_|(8ET?misG+Q)CCOdLI^ X&)cl*Lqr]Y|+R}>5%KB~5)pft#iU(<9ap[' );
define( 'LOGGED_IN_SALT',   'tB^;n;61y~|xRn u.|fm,Sm|wtJ5iM#iowqRl*BhhS-4m/:biU854UvExp5;:/J}' );
define( 'NONCE_SALT',       '}]hi(ddF--u WBhKAD;_9thr=LvCnpkt|Bm:V}OyQ)?xexdG5E7 J{~$;3r1Fm(W' );

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
