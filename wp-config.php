<?php
define( 'WP_CACHE', true ); // Added by WP Rocket

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
define( 'DB_NAME', 'vastvolt_vast-volt' );

/** Database username */
define( 'DB_USER', 'vastvolt_vast-volt' );

/** Database password */
define( 'DB_PASSWORD', 'iB;0qI]Gl}=5' );

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
define( 'AUTH_KEY',         '7_q1WJ.=?$/gClA}=,+HSLA!;X2=v5%LZ|t0hHNd/buc O7e!CFE1{!FSCNvl8b{' );
define( 'SECURE_AUTH_KEY',  'bS~]0kQT.;J3CWPTm>)gF|2r(:s1ow]`uK%&A6$5*wJNp8{H*4&]u,ebI1v#<iN6' );
define( 'LOGGED_IN_KEY',    'HRAlezB:_+8-]Y_7i`D^lE<}Gn8c+IjG~oOX[/G7w.:mx@f[+ /9P{r2Ya]/A/VC' );
define( 'NONCE_KEY',        'tBLljo~aITs}H8OQKN(:(Z%~XJyj?DELY,~;4<Iuaol]:v&wnp:9U>BT[kY]/*7V' );
define( 'AUTH_SALT',        '&K2MXwQ 6P9S!O+_&^OsHFU`!u|W6@x2QRb?tUgUtKIkwZl4i=#0Po!W(BaR]bJ#' );
define( 'SECURE_AUTH_SALT', 'f%7.d:k9*oJD}0Px05_75sY+.}GoIHgG()zkQ!VC5T.#kk[%jd%0JX-X(0N{zoru' );
define( 'LOGGED_IN_SALT',   'I#Do{5c+TlL<^;Pt%r]q<io#?T#v8*$8MNNa0>m-5ZCfY7$N)NIPye*z(KVgI=8F' );
define( 'NONCE_SALT',       'i,A72~IfwR-x*SHM]9qQ^WOw5 ?sFZ}%yvq`:o6  ?QF,UDrU)VefPFM-~~1XYD*' );

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
