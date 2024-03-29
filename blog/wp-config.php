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
/** The name of the database for WordPress */
define('DB_NAME', 'goodieb1_wp');

/** MySQL database username */
define('DB_USER', 'goodieb1_wp');

/** MySQL database password */
define('DB_PASSWORD', '1q2w3e4r');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'iGc`f*0!v{KSnq{Y!`Mcd&S@EfyJi@Q>:cY-<2tTIb7b{{Jj--QK0+>AX_F0q>,<');
define('SECURE_AUTH_KEY',  'w$M3L#hJ|>A3{-P0#P&6~Ps*Qnz[MS j>p{(WYC1_Jvdo[grp9R0`]pA<ny#CyC!');
define('LOGGED_IN_KEY',    ';,YlJZUceG(])Z,9u>K7Ek oE[-sEk}yO)#*C1)|hCfP,pyyi?[_(0/Xba-D*hD@');
define('NONCE_KEY',        'e0rt^XLt{M@s#`GB/v}:JO>(_~iX$aR?&ouKd2&;v,,E5H-a8RM~U_Q+((TEo_TY');
define('AUTH_SALT',        '}F/R+iV[$Ep(_Q9J1+~IvPn}I1s[`PYwN%4jEp~k+ E=rrt!A$kWOw>qQE,Zz:;>');
define('SECURE_AUTH_SALT', 'IU;D[jFPQ~<HK]giWr_lVRGx+0c4)NLtq{8MUo-Zr&4:NH4_zC9Ud+~o{/6c.jIQ');
define('LOGGED_IN_SALT',   'WVgt6{3TYojU9K}XC|wNn+lE>t6s*}px:s)sP{#Hi5y=|)42,>95w!&JB4D^uhk%');
define('NONCE_SALT',       'i7akCLYYWKkOMLH*;;ELN?#7G/2|xyg9DqDUuU@KX:0io2Dl=KwKqdA? S^r%v}0');

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
define('WPLANG', 'hu_HU');

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
