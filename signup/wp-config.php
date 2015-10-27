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
define('DB_NAME', 'goodieb1_wor9073');

/** MySQL database username */
define('DB_USER', 'goodieb1_wor9073');

/** MySQL database password */
define('DB_PASSWORD', 'ba5x5NbDCIoZ');

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
define('AUTH_KEY', '+UeRsson}P>Cb@ZRdp]=i%XT+YK)ny*S<Wx@XjG*a)p^|BZAKZMvU=Jc/[KzIJ=j{zhy!([y;]H|h[Nlow-cS_sSPXA%Jol+w)mlrJXhdo;glBAE&qJ$A-sFzZM%R;c=');
define('SECURE_AUTH_KEY', '|mHOJZBaiHol&Bvgi>+M|B<]EZeToRC$PW@M=SnG&Rn]zd/fBTjAz?-f(Ywm{ym(Lk!Nu^;De[%%aAHu+WaZ_EShZW@-vbSB>o;NO=@Tsk}ofKp{}l%>PZWFwwTxJq{D');
define('LOGGED_IN_KEY', 'x]AOFiD@BFzdpZBwnYS-StYtJ<rh!FeOA/jG$D${?Ubao*!m+KzWOMFzC^^XjiZ!x@s>+}KzPVQ!V*$JUCz]r+$MBL_e*vDvJR%XN/R*wbj&aWqsZiIug}_}yOg{@|sF');
define('NONCE_KEY', '%v-AyKPebi^mjIiG!ws][i%DgsgvlShW=(*svssL{fVOnU)lQ}dTGGWrN!yecH>t|FN!gZ$}EDKyycjLbNGGN%^v&dnz>BOZi_HEuw[rvaKW(yrBVKkUV+N]^UfGrWfs');
define('AUTH_SALT', '?Jp;McEW>)rYMLkzqGXfZOUeOr&|bcs=|[qM;Vfr=xjc^pI|iH|)JnG?bqH+oD%k/RGswh//!U=YQ?v}_$M%XcMO>+hvMB+vZ+[Q/XPO!JItY|&%!];j=Nw)xSOg?^Tb');
define('SECURE_AUTH_SALT', 'Zj*eJGmleGrc*OB^v;xD-ryUr*ZnxLdZlhDL+>OQ[iH_wLr*f@HGl]</LK]H&BpXg/]hz/ARn-FOq_rHB^LhTZ_A%_XqFoba?Mwgh=t;?*sqHK<l<c@WNrA(MdbgAA@{');
define('LOGGED_IN_SALT', 'ZRmG;zz%&{l*QP!UBO&FtghHrfVqHcE_pLbRtNc@LD^z;JY}%b|mjkQJDAXsbzJ{+hFYjmr;P(On*DqRhX+fPaq>oHYSQsP[f}d!uF-jW&j<+??!KNjwcf/(|w;P^wuT');
define('NONCE_SALT', 'iPle>SEYTBvzvlnaFA!&%<V;/rw@W?sZ(V_Dq>a-arFBe=Lh&d}zNl}jLq-rqytPT-Ci-bTfNT$b$lI%=sDAopBcC&DkO?jeSaezqj<Nu|ySc+V@E&=z?_[-Za|Kb[UG');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_sldl_';

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
