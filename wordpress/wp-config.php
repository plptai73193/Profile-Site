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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'my_site' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'u?~c~+gP!XB~XD#ZZMVVZ<=SR0V`dA~[c$EOwZF?[3(^$P~j2G-5 Il+qN-&j=RR' );
define( 'SECURE_AUTH_KEY',  '=x7S@ >bb{28Ux:RrUC.0)[O)Bu:1Hfs`sK[>NDO&.NRST2%O3Fe}>+tg&5kVP9c' );
define( 'LOGGED_IN_KEY',    'nL</U^!Ik{L^86O7q;D;%r:j0MAI|xkfhO:cwb{Vt%F3HqHc L@!*~C#YC4HKE[H' );
define( 'NONCE_KEY',        '7.|cAi[o=y$722J[rRWD0sq#9S|Al`{H<zZm!dny8x2HOWMq_~)7EEg}Os:(H!X`' );
define( 'AUTH_SALT',        '}ioz&QQ*s2}-R9TJ3+2E;@1puI;reo,v}-!hbLUaZrZ}a?nTWA2^^[65vujLN/?;' );
define( 'SECURE_AUTH_SALT', 'gWD(QgUy%e(#5.ZJy|oPja5L:8:vAyf%qAZ=rmY9h|sR3~~pum;,Z,NWWkUlgJb0' );
define( 'LOGGED_IN_SALT',   'gw9{#Z$yHEdFNCTRm!v`$x])c x_n[DONUdzh6G-@&|L^VXGL+<G>b}D9NJ{(%h^' );
define( 'NONCE_SALT',       'PIO(Ig(7e%GOL*-Tsq!zrfF-nHHEF[c`V/K-:l2Tjs{8gWmV/FH4)O:O.4y#a9mI' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
