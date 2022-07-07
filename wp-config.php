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
define( 'DB_NAME', 'pureti' );

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
define( 'AUTH_KEY',         '}Ft[~nZMn3bn.(KGd<HG(QcKgU)aIUm@*<~h&5k-`Y($!M@*KE`z:ga|DFpY4J>w' );
define( 'SECURE_AUTH_KEY',  'PGdddS[`:Z;VCH#`e}E$&F;&xfXYl&r2;?3x7!kGZXOr6FWaIDFSB!4r-u3Hly?q' );
define( 'LOGGED_IN_KEY',    'a8[S8nIws&%_HQyz/yu;4;9|}f2nTZb/Goa}AcJOlO|ae9G!3=n@j)996U?S.sAN' );
define( 'NONCE_KEY',        '=31[IGdxe68l!G30m~_^Unua~?9E/,20:]$LdS7JX_(c%~>^+:GftsdXW2@-rbq9' );
define( 'AUTH_SALT',        '9#zNEJJ8#)WqwS8|he[B-Qmd*6n!4EIbmm>|3@Mng@v?S76[gd&?z`69yD.<[[0j' );
define( 'SECURE_AUTH_SALT', '%o ?`h%f#~h^83<@QRz-L9Ialox!mLmHT]5e.b0r:HZeRW<e~sZ5*ygUu{s/w/:#' );
define( 'LOGGED_IN_SALT',   'w)9c#9jr2?>8d7#$UT/>TFX4R#pXw%n>?c,1*Ci#}At,p P9TCN#hCM&v_-EAxy+' );
define( 'NONCE_SALT',       'i;Q3w5tH=WOa9R[ZY3XIE Eg&zQ{`*:>L]in>89_8#)+d>d0eDPH%YU8s`<u4@*n' );

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
