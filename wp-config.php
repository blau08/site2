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
define('DB_NAME', 'site2');

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
define('AUTH_KEY',         'mGbZmvS9E01Wpyff[|fF;H3cMY(.n1zw)o;S4qs_4>&ZKy]Z=pa?e+DqmDCk,O}g');
define('SECURE_AUTH_KEY',  '*|Drl,w+aiGlLY>NoN;g[ZcJ! bkO2$@KQDYZh@SKa@p?1Ft!{6O](u{Yud0]`{O');
define('LOGGED_IN_KEY',    'D?-iY*`.Ey{5WO#nqKw+3}D:el%xP?VQ~0Dv~NTRbvK^rrLU6~uR>iF|@jLcWTw6');
define('NONCE_KEY',        'F.:F;DF{V`X+n2hGa-:|c4dY7Zs(V[;{9NIcZ^0|P= N QSKYi=-$,$Vi6fuy .k');
define('AUTH_SALT',        '8IK9:M6z&b:o.IT{vRP`-,~y3xd;]-9 O@MRBk4GQgqw/9]7MR-3}79A[F>yitw`');
define('SECURE_AUTH_SALT', 'h ym$:dvT-o/YVD9O9SXTR#|lc<pV!r((E/4%bpwWj^.+4rPtGnK9RaqE4_oKN_B');
define('LOGGED_IN_SALT',   'OU^tVBe{=~(&xy3nB@3FGBLn6gRTtO+=NkekgMpbqb*=G,v:+[Bg.i=2ol>)g `+');
define('NONCE_SALT',       'mz_N[HzKh|9m=:}5nK$cYU`{-9@!#-JmU?6n*v%0O!P`0U `}2{!p[63zmlNokD^');

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
