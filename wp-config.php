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
define('DB_NAME', 'permis');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'pZ? u+InU#FWrFU<(`,uV7-8rVci`B8aq@>{yv?p6(}=zEAubIT.`RIO%C+j,m`7');
define('SECURE_AUTH_KEY',  'T#j[71=x]9V+8ho:*-Z/(1@XZ1B*&E@ID[0SAU$Lt$:Rp042Gonn?y1GXG5Z:08;');
define('LOGGED_IN_KEY',    'yfz,r6xW{wo:e!yqL;.I?s}${Hxg 7Q,pA~Qa~2+k*,d~mO2Dh,jZ@WX!l~8~&p(');
define('NONCE_KEY',        'Afbp^ky9,5ac3O[j.Y7{qf{?FJiy-n<<9E&x^i81sO @f )ZgWGH2B:oAn485b0p');
define('AUTH_SALT',        'ZQ_P,IE]=ES_hF7Jl7:aQub|TQHJ^9=_ZW>?y>K);uj}c7;E)-0]1`hx;.87s2O6');
define('SECURE_AUTH_SALT', '&I@[zq=(:>!Tm=cBM1tAn<@v!@ Y0c5,m[rgJk~&oTAd[g6|Fy{zD:&Cmc~?~9Qz');
define('LOGGED_IN_SALT',   'T3i|Z,}h@wZ]blO#;&EPCGV<]r)rFvD9mp/Ofg{Ij4{x4K`fo]%kKSop?!6xk[{l');
define('NONCE_SALT',       '6]UTa$]`sPYpd1OA9_CEbDR4*}v#?R`YdVz&}W^w4=w+Bm{L.cLy^_}C4c[DU$o!');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
