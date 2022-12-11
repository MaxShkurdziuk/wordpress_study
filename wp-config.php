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
define( 'DB_NAME', 'wp_website' );

/** Database username */
define( 'DB_USER', 'homestead' );

/** Database password */
define( 'DB_PASSWORD', 'secret' );

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
define( 'AUTH_KEY',         'fX [(`VT5HIX-c^Ciy[ln7}=;_<ON-J5ZQb,3%@dc*73Y4s|a%=+xk|ROJh7}0eO' );
define( 'SECURE_AUTH_KEY',  'iNXt|5PQhGr:6l,@`$j,gnfvEhsA;a;pMJ9++oOl8>TEbmD^~nR_[&eU/!j[szw:' );
define( 'LOGGED_IN_KEY',    'yMmQUZ?<vw1n}3cj=uf*US!Ylr2a3*uMYQSdk.{l0oY(;<2V/=z m ]5,C=_GM66' );
define( 'NONCE_KEY',        ':}CDa;L|0BRNDx9ydK-fcT`#m`e:]_EV<r[{&D*^P6/+3je.s1HF:PSgv/IHJMl[' );
define( 'AUTH_SALT',        '3c>>O&}YOzd=@a^deYcd)|!~M&)]BzRD<^H]qb$:!.erC{pvoSIZh-&fuq~!8%wX' );
define( 'SECURE_AUTH_SALT', 'w1kb,#QKIKYmRM!]rCb:TuJ;1-6ZKQPjIa4K1h*fw42ZsrCEY9# gfje=3bDMA@u' );
define( 'LOGGED_IN_SALT',   'W(LxpB1?@D&S=z`>w0l*~znKDv;,AZOm1y@xZ,;?t7P^IxSqFCGj2(Xf(%o?AF*9' );
define( 'NONCE_SALT',       'c3s9nKydHa5MxT[w2i<Z_ (kvH_b/2p/PQI<R1^POq;-2tG*k[1e3hsft^{6STq#' );

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
