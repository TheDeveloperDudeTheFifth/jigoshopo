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
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define( 'WP_MEMORY_LIMIT', '96M' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         's)MhLk0Pr9ZNU ;uc7,4-wt]VhrOFR!Bn3ANt_B-VB?5y`(AhFM9I^UFNZxKP<jr');
define('SECURE_AUTH_KEY',  ':a{ZjKlgqz2`|hC.<2PX^|RQo3l*=k7L/=2ZU-^ElGFjh[_EYG7+7!bUEIsUlGDf');
define('LOGGED_IN_KEY',    'BMzdd7dJx20*_f0Zd$$8$@oE3ur:%k%ax|2.@5-Oko4o%G]~C5e!u;SR{pE/8B4(');
define('NONCE_KEY',        'tI97;v-T /fW(kHap`5(M&y& VWs6$ljM?~yZ|+GTvg?i6cp`ytB<bhSKe.7x@hK');
define('AUTH_SALT',        'ka--n1w^G{u{d.n#DEYcGC@<P=0a<yCwVMn!F+cKW}`Xk6;Jb>0>J 1=z},4C,gi');
define('SECURE_AUTH_SALT', 'ia(8?GcQ<M_tr1E);vz`OH,TwX}Z0NGK.5+%SQUL@z05A{_`r,AehOj#x|1Q9 K<');
define('LOGGED_IN_SALT',   'j<w1ueq6?y<?,W8R?>}*?;;5 ]gxDM.|xllYZ5+Y|4m ;!Bo%)f&soOq&WEfF-_U');
define('NONCE_SALT',       'n7sF1T]Co&4D#WF,U9LDhnyzVE)*9}}(I=|g<G|;@Rr^[|auS ?Y<g[M_~S/Y#3;');

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
