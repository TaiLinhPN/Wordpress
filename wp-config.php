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
define( 'DB_NAME', 'wordpressdb' );

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
define( 'AUTH_KEY',         'GER, I,p2!0]T!:y9x6^(^eyGm(+v$eJizj?x*}$vm(AK{sZ?I:!Wh>~Su?wS@**' );
define( 'SECURE_AUTH_KEY',  '$oH*&^&nop7V#u6l]?rSw$o`Oo/Pt0tEN.Bfm#<m6>4aPbD3l6;6LXA0rGfR|n+*' );
define( 'LOGGED_IN_KEY',    'n*iVwpa%9p?W9ALSlgi108fb;}~^V3m-Ncv<oVn~FIXRm<R1O*<C{eX<hPU;6mdl' );
define( 'NONCE_KEY',        'olr&0(*ouBoT48#S5TU^mNlPDCA=45%f{~mlX1-<O-;tp<M;9E4<G5cL; 65yUoU' );
define( 'AUTH_SALT',        'KOn1>][3&;q[GGFSkfu.?D/Sbn<Dn7bmtZ#~V?^VC~]zh$=!9pz8/<w7UjvGK}c)' );
define( 'SECURE_AUTH_SALT', '6h_i(9!^PO[!Y(N0s{e9&9!rhZ+e7dMP`9k~OzWG/xA13IWZT!W7t1u~bqz6QgDS' );
define( 'LOGGED_IN_SALT',   '@17L-MGQz,WmS5c!lEG6F7N;)JA@%<9/ZJbe|8?C>IDEQkp{*6o;-2DO2dzfT&DE' );
define( 'NONCE_SALT',       'nqx=ra%qtn8<KMP#WsS1%}O7%({wI;Rx8Y!tYH&l7H>f^:TW^gJ-IIXM<EoFZ6j-' );

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
