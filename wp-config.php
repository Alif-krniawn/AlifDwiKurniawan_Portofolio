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
define( 'AUTH_KEY',         '8>DmJ,cmmUP4}Vtxpe:`$|X=)%:I!qUh_garo;Gwjz jhTKj:5 euT.S)2P&Yv[d' );
define( 'SECURE_AUTH_KEY',  '|A` 6UUm[:qB/4~+/TUeAt}%t2 +ZGM$$>L/oZP]bTwa?^5V^(D}bw+alz*GIwKX' );
define( 'LOGGED_IN_KEY',    '.^F1I@T0-b;F)|aC_XjQT-h,M{v@`ks0s1@yUM+}GwY}3k*GddnAdm5v:TP8[%N#' );
define( 'NONCE_KEY',        '>TFU>$D~=GeuRAR1{n&NTEy``8,}O/[@[gpF<|c^HgSNuPbGrh$?QU`f>lX|Wv*C' );
define( 'AUTH_SALT',        'I[jie4q)S^R_<_iyB%BMN?2njqx|m*i p3-S=JXKRx6_?+=$Zj*gqr4cIc@OP&H_' );
define( 'SECURE_AUTH_SALT', '$[[<zP^vvF9krqev@ mJW18Yt?IT^:eq]CmWKE@G4_MYD@?)PwA#kTH-CFs>x-zq' );
define( 'LOGGED_IN_SALT',   'owQRP LY)E+Qr}:xB9%lWr8]s/lSEQ5hc/yxYNB?8?wBt(a3gn%*)Jg[xf^6,dbq' );
define( 'NONCE_SALT',       'X- dK)~MG)l~-0Z~>Tlbqz1AUxNofx~1G^zt<gOZh6&(kweXIy;UGLEx/l|TAXmm' );

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
