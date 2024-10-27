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
define( 'DB_NAME', 'teadrop_db' );

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
define( 'AUTH_KEY',         'wNCp7oc7KnY!O;-Dh*~F`2J&rVbs-<|oep9/iw_XQChx[(VH7QoxY53!_Rrk=*iw' );
define( 'SECURE_AUTH_KEY',  '*<PyU5S0`es!<*&uM#SI1bA?y+:XGQhy`lvTRA)4+kc#|UJ-^O@Db0q.`v_2;s; ' );
define( 'LOGGED_IN_KEY',    '=N|&RQb~SuK`vnpLRy!>R7_[R2p&wm&aKh.Ce){@q^Td_fGGc_+<iNsYQ9sg9(_R' );
define( 'NONCE_KEY',        '`Y;TGYz4,)6MKGUb{p{h<YLCt`ZiUJ5 5uZRbI}r{R q:nN^K&455Yh4|3*Zdz!b' );
define( 'AUTH_SALT',        'vi9icR0hpAN`nS#]u]G)7k9yHm MNV#qVh(qE|?&u+1iMP^p&NL{P><?KmNC9YA4' );
define( 'SECURE_AUTH_SALT', 'aI>8y9;Kcg/b>,d|%hp1a)v6u*Znc)`k,#`<hSNrxyA?O}JSZ:h~ZfG8809%(<7#' );
define( 'LOGGED_IN_SALT',   'n:votSk0(;; IMbD;m}}0@lB+B46 M}i+}~R{5T!~6@ OKc7R@;<H;,aJQ1xSL2Q' );
define( 'NONCE_SALT',       '5m2W tTqt}_GMc`ifR;^}dL`mBf*[HY8Qu5]mW!j&hY+)>-uf3=nZxf9{Rb`m!6&' );

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
