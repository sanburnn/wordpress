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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wpdatabase' );

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
define( 'AUTH_KEY',         'kwu_9dqs*1Kk~PRxj/,NB58#Tdi=#Hn 6.OhXVE>y0zn2?i1Q~2zAR`X=k?yEyZd' );
define( 'SECURE_AUTH_KEY',  ')3iI}ri5cd*Kc5It8t#c(-D-6O]BQSilUmNtgICy*,mNySpD%w]to6ucs_rhcXQB' );
define( 'LOGGED_IN_KEY',    'BV]/ qnPl+$ Xgj|hwx(a)0j@b0&#?NhcW5jx;YtE+G /Yz{02bqWdu&[)NzoFqD' );
define( 'NONCE_KEY',        'm4uc5LOPMR;XJ,w bil$ml=$}a*}7vrRe388pWFD~FR5>QS4JQj3{nJ8]bn{p]TI' );
define( 'AUTH_SALT',        '03!94L}AbYkin]fDv`I5Suc<w140|OQ/,DHX86xqa?mk~mkZ%1t)GjXei4ksOpuy' );
define( 'SECURE_AUTH_SALT', 'O;;;p/BxxP`#V]xw7<_#/G?r/9ly3<w}k4,BWwszdo_#&~)>r2w)YP5,ZEj1JJ-#' );
define( 'LOGGED_IN_SALT',   'J!h:$t}mW7UE`.C0C#Oe^f))HP^J0k:MB>x}!]hnZS{KkI,PREA*QJvj6~cL!4A<' );
define( 'NONCE_SALT',       'Bb@}i(.bGt*gNMQ5;y860CdFgc-lh^{;YhR[ih/# 5{+:D-kUt+1.S<o|2PdOax^' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );
define( 'FS_METHOD', 'direct');

/* Add any custom values between this line and the "stop editing" line. */

// define('WP_HOME','http://192.168.1.11/wordpress');
// define('WP_SITEURL','http://192.168.1.11/wordpress');
// define('PLL_CACHE_HOME_URL', false);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
