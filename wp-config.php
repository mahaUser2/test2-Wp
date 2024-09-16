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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
// Test om vi kører LOKALT
if ($_SERVER['SERVER_NAME'] == "test2.local") {
	define('DB_NAME', 'local');

	/** Database username */
	define('DB_USER', 'root');

	/** Database password */
	define('DB_PASSWORD', 'root');

	/** Database hostname */
	define('DB_HOST', 'localhost');
} else {
	define('DB_NAME', 'mfw_ucn_dktesttest');

	/** Database username */
	define('DB_USER', 'mfw_ucn_dktesttest');

	/** Database password */
	define('DB_PASSWORD', 'testtest');

	/** Database hostname */
	define('DB_HOST', 'mfw-ucn.dk.mysql');
}

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',          '}U4aw6*b:d!E1G+fcO7b9(5/)eKvyqc:V+ro.obbjI&n<aqY_J+ $Dx)r7`NN{^.');
define('SECURE_AUTH_KEY',   'bHbSI )JhT)09O>Y f$B.vDc(0xJ!N(skyeTw!sr<6gBgsu1ib|B3%|!So3j2^Cb');
define('LOGGED_IN_KEY',     'LWsLV%`LMsX},ubjj(5w{}(Uf#l,Hx,->nJkF5-3bdk2~J6w`Z&@<WUj$A&aD@a_');
define('NONCE_KEY',         ']>}~Qz!*FLS^5/}GQecxDMCj-d i4R]LxN>y=<RKggf*PhypVa*05aLChITtXyuJ');
define('AUTH_SALT',         'Ql5ZiGj^!ggad=^:zbDqoA!9z [X7y}fEY)V 3?Nx]Pya`}]%08,K5bfS&Mq4YX2');
define('SECURE_AUTH_SALT',  '4)aZ:Q6<H?z?}&J#H[p8@*BS|PR%)Q7ciN}uFw/J4jq4{J7^)sbmwsZ5J$bm#BVV');
define('LOGGED_IN_SALT',    '[F1nbM3#4mU?6Mgi<Z&ObIjaC^|]UU{I!s9B.~,PU1=c7vt&&TzienUFNPYRJfM,');
define('NONCE_SALT',        '@>xm&|hQX|tqW%+OE/GsrqZ9$rr/2+(Q*nY+:Gm}sH6r~MsI{,?k:uF%p`MH(YH}');
define('WP_CACHE_KEY_SALT', 'y0q`8&L?*YK1PeZ.ShzL]+s0J|+S:m;R#2GBO{KNOH`(x+Gw^{EE}[}({{1]~I9p');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if (! defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}

define('WP_ENVIRONMENT_TYPE', 'local');
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (! defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
