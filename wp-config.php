<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
if ( file_exists( dirname( __FILE__ ) . '/local-config.php' ) ) {
	include( dirname( __FILE__ ) . '/local-config.php' );
	define( 'WP_LOCAL_DEV', true ); // We'll talk about this later
} else {
	define( 'DB_NAME',     'production_db'       );
	define( 'DB_USER',     'production_user'     );
	define( 'DB_PASSWORD', 'production_password' );
	define( 'DB_HOST',     'production_db_host'  );
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'I@@Ad* ~}3p^KC QU+}6LTQg#Z}]VKs`(8jt4vB*XHR}zn`RS=u9)v]?XjOH*E:_');
define('SECURE_AUTH_KEY',  'W%3nCPqE!xd#vn2C4KSPOogqxI[u94joD>YL}4n*.Od9bH2;=T@<~%Lx+p!UzA_5');
define('LOGGED_IN_KEY',    'I^jz02o%?s;8K<N2hIuh}0f}i|q6-xN1-d0n -+,.2ywv-/LZh|SK-+}]?[lF$vx');
define('NONCE_KEY',        '9Pyl[+ron=@I6DkpQ+dE@JS:=V<|x*OH~PSi|VDRo-+2Rb`ax>*G|m;;f^R=5p e');
define('AUTH_SALT',        'Nk1DdV`jy!{1+ <Ud-b*C@3:!&E  *@I3V-iIV*=~GA$|OfE:;+G.MNeV&|&:>=W');
define('SECURE_AUTH_SALT', 'rrzU(AiP&`Q),]N6E=QTo-_V8GO%<++T=YD.+XjtR4lDvBJJ3i@=I `89NgbBY}x');
define('LOGGED_IN_SALT',   'i1S]7VL)h#k`./t06b&eomKV{PMw@F[XQ_8W#[eUI*4lYmiB @>vg4IO$-rF2lZC');
define('NONCE_SALT',       'a/tCKKs%HBq7Y+htz:6Lj/~(n|quwvREmMk!d0m_|IkYy!c_|BtgPM?)en@5_uO%');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
