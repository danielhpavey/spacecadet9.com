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
define('DB_NAME', 'spacecadet1');

/** MySQL database username */
define('DB_USER', 'spacecadet1');

/** MySQL database password */
define('DB_PASSWORD', 'aeUYCYsQEyKS');

/** MySQL hostname */
define('DB_HOST', '217.174.253.159');

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
define('AUTH_KEY',         'av{%=*YYw`J.F|>!gS/fw~fWga^~I|h-nP&3u,-2w~?.-1J*-*,D|pHvZx^A 6`>');
define('SECURE_AUTH_KEY',  ':MZjY>{I$B,7_rgJF%mZ;*&&O4$hXcT-II]KNgl{zH$HHn+|xhdPJ>T3}Us@E Fx');
define('LOGGED_IN_KEY',    '(%P~JZG/Q~w(l>ROZ7p#YK|6FyWHA[IMf{-_cJVLf>9JDHxCBpA6]/HaRR<*y#V>');
define('NONCE_KEY',        'nQ#>B.G0N_nX]D##VWUyS<hV{Pb]vyu5Hl#(7rWZEp@>+$WK~M+1cP#9fI)igm;p');
define('AUTH_SALT',        '$-nj#Pl+ujFD0%IV#<-p$ax#ezUD -%y^bW!6w!eKkF):h?ulTZdm][r2~W{hASD');
define('SECURE_AUTH_SALT', '][`8S+D=SdZSu4#--y-#B&[/|]NeG>/J+u6kY*@B^la~)ekz= /AO4^tCUdRt8/c');
define('LOGGED_IN_SALT',   'wV:=f-=vT#y|J$Nwj44{HriiKD~=Tx683?.xD+i|sz4uKiTjrnfQ/0:Qb1d.:pxN');
define('NONCE_SALT',       'mls>]vnx@)w~6-v-`-JgL+|(rh4Yg)x:w=iC+$,@ViE^%T*QntuM?Gv.`q:_>57K');

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
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define ('WPLANG', '');

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
