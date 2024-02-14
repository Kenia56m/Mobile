<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mobile_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'bZ(<~h7mM~*I1!|oFwISc<4oD_9;WaCts-X!3@!GGv]0O@#uZ8s<d>j_ 2]dsQI?' );
define( 'SECURE_AUTH_KEY',  '2?t[qiOyP_, *Y#6 ygm6_ka)!01&3SCf4T*Fot>bQTmplSZ5vSIBGwm@[?cbB{O' );
define( 'LOGGED_IN_KEY',    '~OD|d?d;GvGW&L;C2;l.&5#*3TQw}>d@;h9rRmgSSYe!$~z~lZ<s|?lRqTjc8%m=' );
define( 'NONCE_KEY',        '`}#>4 IMj!w}T1u`<9lv^6!8PNc5d(Te&7u=>n/}z:L7M]XN321qL=9oj2wzD&^z' );
define( 'AUTH_SALT',        'Wyv9 w{wn|05]_V4EDRQ-&gS)ou530DjK~HV!pzfQR(8-KV=$i<JsVG=c6GN,|at' );
define( 'SECURE_AUTH_SALT', 'ls!YE[zL-sz%<*2|b rgFc=k2V*fJBT_mNb`/J@?]s2H&[rD9R~hjR&l}Z?&5i=k' );
define( 'LOGGED_IN_SALT',   'YF?zW=ldY1kgBF7U1cJogw n~8_l8;U!y!VoO@wT27w{M J#8&Zh,N?(!gZ5&C}J' );
define( 'NONCE_SALT',       'OJ?>G6cSJv#q|J`Ym.;xhspz/`Zr8&mS(MZo{WK2gWs*>sOD5EHM9](5|1!,h/1~' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
