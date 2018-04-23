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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'i1v{X8CB)Wwi[]Y]z~7$Hp)gZVTo^qW<#jQp^.i9TOs#oXMS8zITi2Bn]^okKS(O');
define('SECURE_AUTH_KEY',  'lv@kiuo<ol&:2$}#KIv)+T,hj%RyX6kB|RN^mc;f9ZpAes{ZPM;D0:.d?A*r;5y;');
define('LOGGED_IN_KEY',    'u/;z 5%53)Dv!!mvM$~4fxoZc>|ItJuLp5S$:5~}./On^j8pEpm[bMv.]- 30Vec');
define('NONCE_KEY',        'xnseAHWxKNxIe[rc,G_;L]i,Qm-O.;=6JHdQJ`LAAI6O:_N^UX;rmb44i:4}=xWd');
define('AUTH_SALT',        'qu+,@q#D csr$Zrnea4F<fEi+Zom9GC$vC`@mTn|32#nazb(S])84evajt9)~W#]');
define('SECURE_AUTH_SALT', ',RZ~!ZwtmSKw]rv;il{^89j9,7ZTkLth_E{._aesJae|>F$Yf?MW5YSy-)mA_ekn');
define('LOGGED_IN_SALT',   '|3_777$~w%AL+:w;1=#$oeH{-m6KJprfp9=boC=1~(QW4A^ET.oe0# [ARvnX/xi');
define('NONCE_SALT',       'gL+]yiw4%>jPKqmrIk:v.SQEs`F{Jo?^WiV?U_u$W[uy_Td` vQd~w>/fq-blLDX');

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
