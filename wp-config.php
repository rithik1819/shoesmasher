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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'xXD|J&lMyn@-Tpd`qJ<+h ,FOu2wo|BFv_)pY1F)?^m(:QP`; l|X/H/l?XzXAnf' );
define( 'SECURE_AUTH_KEY',  ':0I>>,VB4TIONaWBBva4RqTSfMt_c,BPGUcEU?1<T5K2KvUGMHk_;2xZ$6#3H$Ui' );
define( 'LOGGED_IN_KEY',    '4W^pIB73ojbq,_2n[0k,f-.73J.3R5[xH.8U-(FcR6BE2U5iyhXJlMx@>+OG[^z?' );
define( 'NONCE_KEY',        'J&=gPZ:T/MY=PI=,cyw|KO`^c7}*Oa;+:L>IShYzfu9Ti%C@2aL `Z@Z5cRiH)-K' );
define( 'AUTH_SALT',        'Ub>`&/32!Hjr,8x2wgaV3*6ktHzBRYUbKUHsH*&^Ya:TN&XEr4~;Sua FB5Wu{%l' );
define( 'SECURE_AUTH_SALT', 'KX0o0QK1Moxj5?2JMjd;vx/@WaWIn/8V+#*M:O#~i2XZ>edCgAX_ZatBrbCax$3r' );
define( 'LOGGED_IN_SALT',   '}*,u~fh5A1^RftbC[n1jenL9)W&c@iEQGmM?p3`,|>P0%>3AOC.F!d=?vWc6|4z;' );
define( 'NONCE_SALT',       'S(2;=Y.*Tz*}I#hi1{S~_:d*{tZ,.[)mF2!Hs,^Hxfj?*G@,*;L5; [StNL4}J T' );

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
