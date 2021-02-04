<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sm' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'gG8 6G:gp#K_]EG7}F5,y3oDm?>d5H4!zumUgq&PEsZ[?x=ig6+@PrW!WgH^~@A`' );
define( 'SECURE_AUTH_KEY',  'x3Dy[c&Gt**Vd:Lx%VAoo&j#+8Im0B|p5>tX*&LMSSwG>K&Tos1)r;@krU(>wXu ' );
define( 'LOGGED_IN_KEY',    'h$~L>;|.-eA|9|?C<3j7l^9sJp?AMYpD[zqOp.*#XMYb>g[SCGl|zUO=z)KHH>k|' );
define( 'NONCE_KEY',        '1ak&O1Yvto%[pNmwwhUk}CA{=B{91p9+Jc =w8=`nrg$6qTmi iA*?vSxCVEoHTO' );
define( 'AUTH_SALT',        '%bgB+Jp5D9L#N[e$nHTxI9OC8qvc4joE>bG|G>s?]~m=pmwtQUM?{Bpxcw;~!*H7' );
define( 'SECURE_AUTH_SALT', 'yS#W~>VP]xlNak%4O;2oKq|RG~((?M+~eERQz)o5VBR&}u.K+&&m1-@zv-wW`t)*' );
define( 'LOGGED_IN_SALT',   ':ZBg~VI^PRW&sVbh _ejd@>t(u+,PY?iDwAX=Lr:sUU 5VhO9oSUNjAWWfU#kyv*' );
define( 'NONCE_SALT',       'BpvrE7sg3;zymJpjyvE!Y;4T(iP,)+]v.u:P<7@pD=~pX*X[EUjdzR0EYbPK>T|k' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
