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
define( 'DB_NAME', 'abadl4' );

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
define( 'AUTH_KEY',         'IQA%+6PBnCmkeEDS#.QtDZ7aNG{,X.[LoV3iW&U!*zht@Ev!u]`8CE6N ESn7^X8' );
define( 'SECURE_AUTH_KEY',  'e]*!+j,%)/F@aaWDUXD#dly&Xd0JYrWp_0MIcuE{I,w[-X^Zg TbE1IoRi!@Am{U' );
define( 'LOGGED_IN_KEY',    '~-x0/rJ1++Cs,Yp+oQ0ZDwMOhm5XDt+NwGF|)~k?0i*VG@N;yQ^$B9H*8[Qx|f^r' );
define( 'NONCE_KEY',        'Vn*fg8`R(7<;2<;JTLm%6y%`m% H6)vdp$P%wNN<]U)UO;.T)30&JDh=`%*EZ4!-' );
define( 'AUTH_SALT',        'z4z},u|DR;`r$A2cKt|~_<BooX_hviTr*gawiKrOP5zC!e4-x6X>0#Bfk!.]^[Gs' );
define( 'SECURE_AUTH_SALT', 'ypkyV4q-;XRxxq:/I*R0R+r6t~d5mi)Z?U$>(9p;h0., ^9EH~[[;O7vz>GStlmT' );
define( 'LOGGED_IN_SALT',   'Nw|b.X[.(a^:c8($-bjD&[eRWTSKe(?)a^wP}y{o_l}nd@uMQ-5p=dk:|}5Ax&tN' );
define( 'NONCE_SALT',       '7u[#d[fN*{&_~PMO%#;F9IxY[O<wC=x<.$mK]!euQ,KF6BXP>n;oA|c5!3zd9-1W' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
