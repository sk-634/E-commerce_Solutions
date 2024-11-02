<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'e-commerce_solutions' );

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
define( 'AUTH_KEY',         'R[T`IlOSh)K(a<yhtolyS7YEkXuZVoM0{hWxm|-.0^mg(DeIb5LFLx3uN|7HT75O' );
define( 'SECURE_AUTH_KEY',  'LG^C6y}<VX*&o34y.Q)Xr9V4 8nis6*B~&nbfpIRyt?`c&!Q-s;~4?aW:<rcid0|' );
define( 'LOGGED_IN_KEY',    '4O_iL8!epyZcBjOJ+Ta<c.[k.W2Za8Nj*L&8tPw0)iyE#<8*>f<~S)$,Yq+&sko#' );
define( 'NONCE_KEY',        '{b$&sI>m|xg<P;ckVAS?d5)KIl>eg6rFs[p0DbB(u[DLbGyfL[QER_ld|pdYLi1A' );
define( 'AUTH_SALT',        '(Rmg~GI5o{&K2FY)65eKlmW+@>,Pn26;%KlN_qS_OR.8a5Alksw7#&3j&N+kavgK' );
define( 'SECURE_AUTH_SALT', 'eCSCX@G/[0rf]< F=4Wb)w+(xt&HT(:9ztv~K0$ ^Ab4A5-?;s,h0mZ_]9XlKAUN' );
define( 'LOGGED_IN_SALT',   '|~9<D$C!Z-78_mz<aNS9u 1p|47a^+ZrP<,%%o/t2GvrI~hb;L(` >6p 9r:ya|#' );
define( 'NONCE_SALT',       'X[S7M4vKD|R= jh+~DW/zQ|1&4UKV@jCKpB#>gofPEaDyNaE4d%eVRB-9>--?0%G' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */


define('FS_METHOD', 'direct');
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

