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
define('DB_NAME', 'design');

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
define('AUTH_KEY',         'z&j Ic-3.(^~`EO~k |X$hEA!.GF[2^1&XURb]^@6mV&geZ]t}?ER]kCv|}2lwwZ');
define('SECURE_AUTH_KEY',  'X#kiqOHUI[MfzxXG2Nuq@c.k;/vd)i>/-&(eLY^}C&>g%!ZaqH~pcWF@prg7M>`=');
define('LOGGED_IN_KEY',    'AK,w}qWrM4i1{SE]>q#bf-L#Ll((gDF<hYoqN/yZ*}aVrF.I`pib)O.S&P>AN!5[');
define('NONCE_KEY',        'D1<rh`A=eQC[R(kPf=Zr;;;yj20LR=@PqwIdHoToz(cP)#hLrm55!r:Z>d`F}B`a');
define('AUTH_SALT',        'YDmf+t BdZR5nl# _QUFi?Xu&:R=G7w/.n;_PiT@_hqI{f7!Qck|`~rc&;_Yj% -');
define('SECURE_AUTH_SALT', 'Kd(,3*g0}YVy#xl:s,)Kcm`>vJRcI9:ICbrwhbby7un0X:B4%j+#$5>x>-}DLW{E');
define('LOGGED_IN_SALT',   'XD_ ,wP1I,GuzB##R_nQ=?=B3j(wi|)VPL^^Lm;<c6*dRb?%>^[z6&1+FbE^3Q][');
define('NONCE_SALT',       '@Xx; Qe1$+(0(BC|>H![0fRVE&|u>hJAe><E,Cg-1,Mv4s&aBqJzD2Gq/bl|@%gh');

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
