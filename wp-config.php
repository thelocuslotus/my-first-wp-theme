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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wampwp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         's#Y{VkSkc;L$>nzr=p$R>d)Tcjy@|o@&xZ,{!Ejk|qsSJx$p4IF7oR%-|49KyxY[');
define('SECURE_AUTH_KEY',  '/GE8XL|x!Wq7VXMtE^Qdd4[ofBZtEe|!en_C-vLuLJwX!<L.1}ftb9BBlMF DIhj');
define('LOGGED_IN_KEY',    '&qSJI(Y!_S|kqL]S#`]/y/mMj0[@+<rLIR<ULAZB~RD4#@4eDQ4l5Y{Hcd#0oCfy');
define('NONCE_KEY',        ')5Dz@_altjK=K[OS%6XBf>>V_=;sKsM{ Gv-|(wZt_}EQIE7bC6E_l(y)$4)[U?7');
define('AUTH_SALT',        '0jldU*SZnGig&pM[-HK/X$D%~<NWJ&d4+.<m-%18yu=1xA3l6GG! tFn|Aw|A;{{');
define('SECURE_AUTH_SALT', 'qeb&To#DNx,y:Wuk# (RZ.k&W,(LU{$kO3tD=4.BX3zX%Z[Se)CxbpKRGPk%4QDR');
define('LOGGED_IN_SALT',   'y,Xl~x,I.R$]*He<CIxUdk)ZauGuDcS-mvL<pUx3iw}L[Cd&92EE7`Q~8O#EPODK');
define('NONCE_SALT',       '#9ZN.*X8mLOmN8PXRBvqc%)dts2|iG`VHlaZd&Rx7P,9F+L{3#T5!Sh9=e(b31x`');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true);

define('WP_ALLOW_REPAIR', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
