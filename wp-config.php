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
define('DB_NAME', 'wp_monero');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'michaelbass');

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
define('AUTH_KEY',         '&[DDF|GS[qTwjY =TpflY?bG; *YTJYu ``GM.w[Xb?)pNM24<`MCYYE`%2Fa Qj');
define('SECURE_AUTH_KEY',  'E]bj?p#*xcdKO<W;Q_J,Q&!&RN(3/VfZzdMm31XB;#cA=2Fc^.G]xs,),gSI[qh ');
define('LOGGED_IN_KEY',    'nYC;v?&4tLTpg=bGI/`E:+J3fiB5qGFT_&Z0VVKL-|)6UzKWnM7%cJ6cUN_bEv2C');
define('NONCE_KEY',        'N&MJsKO,|jd5(Q|,T.x0VX</4-3!#uv=`LVhp@cvEmlYT2c+FDK520!hME&XA,t;');
define('AUTH_SALT',        '8}Q{6UaY| (h!-yc9ao*CsPuR#(23 x0(o(LoXEd>39X~k(!g:c|pT4c6:v<4<WS');
define('SECURE_AUTH_SALT', '=-^~D w8mJ#d]-ijq9(H_rAD;,/#7,VD7kSnVE#L4.[f#J#<[Srm/vu.dubVFY5n');
define('LOGGED_IN_SALT',   'IlVw0=.(ez6s-T~g!36Nc?^|W%HQ[6-_KXxumoj;8Rg[NPQ$fs`,}!a6yt7|n>g@');
define('NONCE_SALT',       '<pm[J=z@|TL*wPl0.Zb0?1:~4y`*L~s2!4;xh/T5$cA?O5}e.i|$|u;dP>;&^s]?');

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
