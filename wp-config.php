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
define('DB_NAME', 'jcub');

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
define('AUTH_KEY',         'ssOL[&~_yM:>%03S3AQDwIY^U$>:GI*DOxy7wFwtVST61[psC|!v?X3VH WdP#X7');
define('SECURE_AUTH_KEY',  '1Yt!Z.HUw;S&@lkb~16%IB+6Mt#>3jkCA`FN;x`spCGKMoGei8xAIdWa%JCjoS]h');
define('LOGGED_IN_KEY',    'Rc?IzLXmAZ$xh`_xepnnLQh.`]f]%/CDi[RA`IfagNX2vyO!f6Iqb1K$]hM9Nfad');
define('NONCE_KEY',        '(-N<V8*1$_af^!j@|Z98-gUxL8C7[3IwYQ*J{H9SHL9lRz11:6S]cEv,gf@E)~1k');
define('AUTH_SALT',        'Abx8)Z!!sOf^m-Et=+1r0Nvsz>+AR??V&nV=JsLaDHAmYvdA}^ R+(;VDiBu#(cX');
define('SECURE_AUTH_SALT', '}r &ZXu7Bt]slPp+Xt9^#aWkQT|7.@~2P{Wa;|<=Urq fZRfC(zV}jm*KR$qwy)R');
define('LOGGED_IN_SALT',   '6<mHEnKXj.@1:p[-uOhl1spyWZ5`:,)|wRiE>n#@0jQg+NRiQk3>o%Ao(2Dw`^p%');
define('NONCE_SALT',       '}2SLs:v{yM~.]5yLl9i5OSm%SbPZz~K**PH=es#IK(:p keBzv&HebrYzX0dc@xu');

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
