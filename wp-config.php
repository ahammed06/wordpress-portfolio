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
define( 'DB_NAME', 'portfolio_wp' );

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
define( 'AUTH_KEY',         'Ez#}@xah)}:>8WlV${V5{jsJD-j$Md,Q:iY-&tP|n-zLl$a@lS1^<~b;Gq4LMyiF' );
define( 'SECURE_AUTH_KEY',  'd-$w$wX}KpCttcKh&DwYaWO#$$>R^BM)dg{sq$mBj0iG)OktgQ$Ez %0Ohmw|woc' );
define( 'LOGGED_IN_KEY',    't]?Wj!P8yq<aLE/0]UMRxkx@H/K^>G3;O&6e9-kPTfHB]]/sBD] ngWW43sxL~X%' );
define( 'NONCE_KEY',        'w4Q.v4e?5MR<ub-ek4GI%FOb1Zc] .J=C)#u85Y/(cJPk;^d-u9Z7ZoFM>6`(h)v' );
define( 'AUTH_SALT',        '/m}CsxF%K)wzIh!)XQj+_pvxD,*>y<c?]{u>$L%LOwy[,ANe,x@37#jWPjYqk1O4' );
define( 'SECURE_AUTH_SALT', 'j`o>`%t(=?mk.ns.>;!hN{kZ/]B@Z$72gtI;t4pB`dKsla44&o(7l)XDH0hX[1}w' );
define( 'LOGGED_IN_SALT',   '5QDrI==Sn.um*2AQ_j:kwL[2*<Yo.pV#W_&vJ|$OQJ`Zhj4~,:Ut9prHo|[V>o9g' );
define( 'NONCE_SALT',       'X9$KSk/E)<`g[UAg.9cNw;c?`]c&z_H=r,O:pN6>QrVmfyOzitB@q#E]D^>By-6V' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'sam_';

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
