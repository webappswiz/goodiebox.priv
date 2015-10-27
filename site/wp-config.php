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
define('DB_NAME', 'goodieb1_wor3462');

/** MySQL database username */
define('DB_USER', 'goodieb1_wor3462');

/** MySQL database password */
define('DB_PASSWORD', 'N3EIJE1Zhrho');

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
define('AUTH_KEY', '{*kqjh[V^eK&R)=EmH;F{Sl$!O}XSVX@fTY&g?bR}U_L*k<(uQBsu)OAnHoJ?HeJF<b*HZS|SbhHsexv@WhgZ{/?TqmW=C{*zSXTOjzVZ}PixNix[F|u&W|&oc<Y&cI^');
define('SECURE_AUTH_KEY', 'XQ]HPXy_d}RB|+L($[C?}?%}@rAC^Z|uAX-kRwfL=OfwJXz>L]-xF-w-_TxET*vPlX)WhMLqpsc;L)ZT<G/*iPjwF?=GMSo{JY!gy>]lQ_D[jI%f^&s<p/E={+E*{BL[');
define('LOGGED_IN_KEY', 'VIelD^C[]n(@Zvh<t^La_Mf&/gS<oTl+[};/]|ioP%*KPSLzSR?rJiGL!dCbED^z-ZrhH{P@mKbP(FdohPHS{jK&ekIAvWg?Gu(D%Y_=-<>=}ckjCPjvEs^_agFuOaDm');
define('NONCE_KEY', 'yUH!Q?GL!zr;c!y}GRYbVRTDfNsJV!F$]I*tE>|>_*ay]}!jc}w|rPtOHayB)$madx>Ync]p/NEfybGo;g=Ng<%lW;P+=!r*nFltU%+zkbQV-tchswNzW^XO^k|zXyLc');
define('AUTH_SALT', '*r]mFAX<WX$E@/(WgQ=)rq=&SpGX]K}G|qY[bS<hc>x;NN)/r&bBqRxrbNCOj-g]KIlf$zH]$aAdw))V)gT=blyb?c@eVnze]Dy?A(@%!iB{QOvN[([yY=)dWrA)<&&+');
define('SECURE_AUTH_SALT', 'Du&KfUyXsE_N{cCW|ErPvDssFF>Z_|qHMvXMgb+!Ds[$-{LYXIHOUdz|){GL?Xua@Ni+EqfWSNJx_XY=;B!gXpj<yCqJ|XHnyuC^%UMUMw{=FL^icsQ%@eh-tOCddugW');
define('LOGGED_IN_SALT', ']S$)UzbrZ>C?blF-Khm;((WvId/QCMCu=kY>=>DfDib@j_!mY=CT!>tw^]&+<{dl@dyYl}aiKbA(?ms<LIAvLb]Ou_BF@%(<R<kwGy|(/I?rNczA]CnDiq_mT-^Bx}Fn');
define('NONCE_SALT', 'ATcxy(J<FyMljrkRW@{TN>b<kS^SUx?<C?ss?KDm_vPdi>XwNuymgUu!Z<)*i_gbaNHAt;l]&OjfmaC>y(CyndEI&|N%gJ!U&YkM-+*glQ%z<psLJ/JU_Jq&]Gee@iAX');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_luvw_';

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

/**
 * Include tweaks requested by hosting providers.  You can safely
 * remove either the file or comment out the lines below to get
 * to a vanilla state.
 */
if (file_exists(ABSPATH . 'hosting_provider_filters.php')) {
	include('hosting_provider_filters.php');
}
