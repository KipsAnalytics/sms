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
define( 'DB_NAME', 'sms' );

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
define( 'AUTH_KEY',         '/Awc}kiq5^Lwa>j]b<](}vB*tI6|]+!(0Rl3gl I0}$%RZB(>{E>ba.`n?j]s[V{' );
define( 'SECURE_AUTH_KEY',  'g6pq=vOK}C;iX?`VJs:FyUr@M$:)L 3&i^S2 [:Z~>i{{SXm{/bVn+DU;ccw@RVD' );
define( 'LOGGED_IN_KEY',    'cP@P!C|(mS-rGhGH||Gi&X(yz[1_y}P!7Q4H]O9&zk;Y%qC$MZ140dcDzk &_7c2' );
define( 'NONCE_KEY',        'JK<)Nk0[oeY!{1?c6]}RX0[vNu7k2Y!+a:!Uj)SNt|~r$(F[!XX$_9I$q0XjQ:.R' );
define( 'AUTH_SALT',        '8S={]Yfv)w%:;1Nif O2UPIUoVGWs~b,]YD5K_/I1h)q,|Rinatwj[kukAb5N`oS' );
define( 'SECURE_AUTH_SALT', '&Kr[zJMUcn-l}cU+0dvj}LguQJ=!q6eiXl1Ps;R6Q]$7[nhM/Q!WUEpar5BENyfB' );
define( 'LOGGED_IN_SALT',   'QQgHCg|x`U.Dnw/I*3+frU;De{81VnH@w(zs,Xa7YE@b3|sS7HFb7ry<>xFGC?dj' );
define( 'NONCE_SALT',       ' 6.i7+FE|F^- JYDOL^1$lmf:C9;MEt,GL+w:}P-~8=}JvdW{%Y(E?i{-%kGufxB' );

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
