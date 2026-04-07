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
define( 'DB_NAME', 'stan-ventures' );

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
define( 'AUTH_KEY',         'S0Sv`.;l%w;kQegZ;-Q $gY{p2|OH{8Q&/^V6rB Y^GZ.+zv+G`DuIRA>K2P(@H*' );
define( 'SECURE_AUTH_KEY',  'Xo#*)]}2k%ww}::(JD< Y6%lk,N->%+o[X.R H2Q1ud~S7O]>4[,L 3^u7|;fb#n' );
define( 'LOGGED_IN_KEY',    'U<2~1XCS*aq^&Y[!}. AqX0LraEV2m6rz0m3D0jEG#G6p;|tl`qSK]}n:vU*d{,|' );
define( 'NONCE_KEY',        ':sISr:P/cTVm<++J6*:H{?{r&([!CKkK)?7@%1re}K fl.E/)gUc`>rF(2$Xb[y}' );
define( 'AUTH_SALT',        'lCe)>^;hv:* q)H]f}Rh$6,f`|i9JeCZ>zfHO=x;hY=NYpe43<Uwk!}CH=aNj;VF' );
define( 'SECURE_AUTH_SALT', '6]?REuKPJNattuWt|tha1w+=ItH] ?^J@g9;W8YLxaeo/`_B>y2IV8f4PQ~ogg.?' );
define( 'LOGGED_IN_SALT',   '3;:N~Kg)CRQ4|9b-z+?3w2R}4el`0vEB{A>G-9$ -DK;%$NsHWe^d}V:%gAIg@9n' );
define( 'NONCE_SALT',       'j0T9;pocU]y^/M2_dvNJ65Rh%^gAGMF|d?js(g$Vkb`$t=DX3ld5<yd&!EmrO7_)' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
