<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache



//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL
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
define( 'DB_NAME', 'windowsgroup' );

/** MySQL database username */
define( 'DB_USER', 'windowsgroup' );

/** MySQL database password */
define( 'DB_PASSWORD', '4K5q2D0z' );

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
define( 'AUTH_KEY',         '+Ut#EDf WdELf74Ou+[.pb2]pHErJx5$.rvBTYHA>qw4@GMSg[5oE..H/ptY)OI{' );
define( 'SECURE_AUTH_KEY',  '(Z1GXOTe=+Tay%2_lq~m+b6JUZkzMP3#-T;a;}c@s9K/r:Uhgv;raj 5e>U3uzqW' );
define( 'LOGGED_IN_KEY',    'G|>MHiBR`pU_eA?GG(faV2ri`JBz5tfG5EJg?y{P0FwEf.SrH8widIe+A#GWY@|3' );
define( 'NONCE_KEY',        '-nb_;++L}D>+`CT/Z6La}+#A6Z.Br,pScY{Ilidz{`swR(zj2`Z,LGbT~oDT6z!h' );
define( 'AUTH_SALT',        '3~EY6lTt;9wWAvp5^xp*EmqE@cDFqLHu,R~,#g4N+k@-^6-)##~_#b!}7>9P;t@;' );
define( 'SECURE_AUTH_SALT', 'kW4#weEI-8A[}xx!JGBk7n0S:zw[u^Cu,UaPksx  L[AiEHMT^JnJ:c|wt^Zw>?s' );
define( 'LOGGED_IN_SALT',   '.o2e;)nLk|a#3PnSy2/(`vfawKlt[^}j)a4Qx{e`Cyda=fiUU{=KLiw}35*snsc/' );
define( 'NONCE_SALT',       'XupP&<DnQ?6BX[|&&F?& `5xHa&DFZLiAznO7^;:&zqMHp3?YKK{(r<zVHf8$S#>' );

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
