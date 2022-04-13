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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'pp(55!2N!wB1(9IN4aGi3 du/xs@/*&l5:?*upc&LD,RLb|tHW>+@)t!/mZ$rt(M' );
define( 'SECURE_AUTH_KEY',  'gi&;lu&Ju+@+X:[Z4vL2i4QQd({CEqO;XO-M!4Ze.HDj#~[@?0U=j7nR:wxJ[|{C' );
define( 'LOGGED_IN_KEY',    '+=cz33>@fa{X8N5aq^f@_kpXy.I:rEa=j]7rCXLC,Vu>q!go#)WUAWo%4uomVh@j' );
define( 'NONCE_KEY',        'y~H;xI;{]cdF>cox|eLZA.+I{`_ :3*z*gI Zj<+:+^3-_5FG,~/e1AwGq^):>N{' );
define( 'AUTH_SALT',        '=z:s=<u3zf`9%z85J@)fe&0ENFJ5>3J1~oR$r4p.Gt_c7XFRIW{Qu.za8a@yiP%E' );
define( 'SECURE_AUTH_SALT', 'h6l,b`.,ykZ/mxIW>WMiW5(wW:s-GR``,}LSB#(DZ!tm6tP3Ru HOVAZGO9{@`bJ' );
define( 'LOGGED_IN_SALT',   'F$Xwg@Z<#8!4db`Ug|RbTo)@VIdH|7E<r>@W>)5swm2p@rOv|_Gr7eyS#*~QH=8f' );
define( 'NONCE_SALT',       ')_/CZO$Zc*6x4?x??t0S60Uf#P=bt!&/r$pr|7ek#l]kw=w0c0}QD=ETv9UA}0Pp' );

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
