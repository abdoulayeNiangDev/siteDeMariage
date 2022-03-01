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
define( 'DB_NAME', 'sunumariagedb' );

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
define( 'AUTH_KEY',         '5dtJr{g|=.AuDTmf]8`KHFmmEqrUF8*k%Fa!f^?WMc()xT;k_0(cr16>s@wFE9Eh' );
define( 'SECURE_AUTH_KEY',  ';Yd=nDWh2^pfLENe&wK7>X<bCGM`XALa :3hrfWc;7Na)T,=ow<,<)h^bm`0k9g$' );
define( 'LOGGED_IN_KEY',    '^t&x$u&[h*<fA3@4pZu:NxjVzP)?eo3a[=eS$fatUH[#@(J#DCh&ww1(#k}MtYcq' );
define( 'NONCE_KEY',        'a69_*eAx{=[iWwgWU86rXY}</z1$MQE7!G,^>99{}9=-d]kfcP,BeoN{6D.)RD6E' );
define( 'AUTH_SALT',        'f*cDm6XrSWCV+aS7mtxY7+0pG!KxIe*P7FQm|&9ahRc;1Hgj6]MRTA C<QbHmpne' );
define( 'SECURE_AUTH_SALT', ')E$nYi<NL~!|mhQ h5%$X&ey)^#G|Yt uk[60.(_cGZ7s1O`89Kip;@^ESNm$=Yp' );
define( 'LOGGED_IN_SALT',   '7>k p`J+|%LkJdUInxqpTeC@7hW>?+sY,(t*#6uxwa##P,sJAI<t/gou0wXNA&~d' );
define( 'NONCE_SALT',       'NyKzROuP:6mkf0}Cw7OFoQ?HauyKRWY|Bz=>udkxJFlgRh<-(YRDe7$D/:o*).=t' );

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
