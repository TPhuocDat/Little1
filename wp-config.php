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
define( 'DB_NAME', 'Little' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         ' hY6wpCy9f~?*Ho_3BW|:Jh9O?ZLoR=@oAj6GyI~I{4q;Y8+A}RQE:iOksA@az07' );
define( 'SECURE_AUTH_KEY',  'pGA<H+P}S&FO+o}cGTb2*#Q,[OA1d(MIS.kFE[={S+X4K?4]H|CKM?9M@R7|/E~z' );
define( 'LOGGED_IN_KEY',    'P$W1`|;2?N(2!d>1gpet+4yu_Olq;W_wF#WeNLZcr,q5{g[dx+8>!?[pFjzZbsB!' );
define( 'NONCE_KEY',        ']]35&Cx#eAM5oOV]:]E3F1P/@M^*>m.Rqr7kQNP(I7jw>P4et92c*A$QD&s9DCfR' );
define( 'AUTH_SALT',        '%zQ34hT+S=n)d1~O%etk;tFQBHKO$+6 1Ty/Z4|>b:78-ZPlF+2ktr>M {is, v[' );
define( 'SECURE_AUTH_SALT', 'QfA%S{Ip+q=<y+K]M2/5Dcl.n|r40wYnuC^B@?wSc`m*n0E B5b}pJDJ_qfKJH,H' );
define( 'LOGGED_IN_SALT',   ')=Lcj8*/zhoKz#YyLpu!ZP^ZfPS2S*F!XZ2rk]f5s?/ZJ7G{(GD)LfGY:.t!h{W!' );
define( 'NONCE_SALT',       '&E3?_&RDJ4>0hA&S;]f]ajF<n%2dM[po1<G}_UJfR8-mqV!<$?,4t,%}NVxcrg|:' );

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
