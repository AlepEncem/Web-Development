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
define( 'DB_NAME', 'lestari' );

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
define( 'AUTH_KEY',         '[3MvIG2Gs:Y}S`Y^BHt=C?~-KWD*+Df(g`5gUVXo@Lhi`g>rqN>@v,q@[kw/F-=N' );
define( 'SECURE_AUTH_KEY',  'W#Yw/k5WTp>B.s^PwNA(oy^<W`YLlC6,[f$r.Jrf37<]<0c7>0^wXLxlWag$e70C' );
define( 'LOGGED_IN_KEY',    'V{.3f[_N*C3u2jF7kj:=dR9;HN3-2U@=4;.xiO%Ue06@cD}q.ypLU`$D~r{Hr,e`' );
define( 'NONCE_KEY',        '!w[`@9,y`_75E+Rr;oY03ud8^3{PeGSfh<9u`Wk7;/4bJS:^l+2wM|TAFQ(Xd(NH' );
define( 'AUTH_SALT',        'x9+W2F}!=HNS=D;hIVUU<hyUZ|va>/EO*[xtu@TS:>vafd{C$WGFKlbbOr7(l-)l' );
define( 'SECURE_AUTH_SALT', '0NdQeyx/r~=SL `( w#ok&X<oV:?~K[tiYP/6+kNI:x%tHT/;$VSr;zYv;/F~<p ' );
define( 'LOGGED_IN_SALT',   'rgdh=}h]H5|XsDdWx;TDVCkeA@3ED1a|q_/;~jrn7Lk>qfnzo{JwW?=zD8E::-$)' );
define( 'NONCE_SALT',       'r_VeBR|XE+1rM efKx))yJK{vf3D:g=[$:J|C:[3 .{0*>^Hb22BVR+7`,|>*Jj,' );

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