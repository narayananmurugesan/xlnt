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
define('DB_NAME', 'localhost');

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
define('AUTH_KEY',         'GX?zu-_-YI7ohOiSo% Yjprfz*Ic7DQhV}jPA9aZuqbd9$R:>xTxG}]Y++mb,%9/');
define('SECURE_AUTH_KEY',  'e5}(tR/K~SBzu-v.{?e-L%>_TolOah,[i!<VFx*/[7M3tz*f|`o{m,lOX_l4mBOT');
define('LOGGED_IN_KEY',    ' sJ.NDY#0oz~_UA@ND)Hs=`p!f@nZu.`oSV$KGu1f/*2z@zg#Cy!Nl~i33,0D &T');
define('NONCE_KEY',        '{]DH3#2Q2uN(7<V93:0/J@Q$;>%ky$} YR+~4p>q6`*:0GVx.;`hU_9;$oCl +%.');
define('AUTH_SALT',        '-Tb>k*F;|CpW!at]3*9!W~$2cVX^Ds`o-?*Ta$Gs&2lY2i@(wTM1TUMi5j#.{wD}');
define('SECURE_AUTH_SALT', '0U}s9=nnY@wG#z1zVR*eD$=uv=KF9)M]2s2b^2&%4BfpM>K_6inJ95`)^eQqMY^m');
define('LOGGED_IN_SALT',   'e$_i[cH $t.d;!<4{8C4&f &t3iKl:}pv)w K~W:g0}rLRB<@^nwV7rU5q~fURK~');
define('NONCE_SALT',       '5)9JabjaKz:9ci@-`.a]WKJ]KkO&wdXK$ZVW~raX}.X>KYC*xf8F]nZ=IEQrs7s0');

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
