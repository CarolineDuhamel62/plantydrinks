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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'aYW@h8 CmIeg<N% > Fd|ENHR#<^.pFLKrz*3)AKAdH4;fedqM*[^,q!A9&!GJ%d' );
define( 'SECURE_AUTH_KEY',   'E - pcIQV!z39>D0tD(pg!<-t+,/+IcoY^>CN-n7jX0|FxgB?;1z82AXYV?-J?-j' );
define( 'LOGGED_IN_KEY',     'rt68|f4e4@TiJ{}OLaY>9Kx~hzdRRGF}o_kk/H#])FkNq =VLsud..B>&R/bp>v:' );
define( 'NONCE_KEY',         ':KNR$!t-R:+j`|ngeDyV5Dyngz~Ljxw2,b@E.!}O:N <VZh+C,)-&j|;-?>Zpv[l' );
define( 'AUTH_SALT',         'J8{}_%S!ij l_;W`fKgiW7&W}Dw]-<g}R:F-~h9gx~62-2BR.`nAN#<TX?/doj}u' );
define( 'SECURE_AUTH_SALT',  '9%bC!tvD@{5eIl:bd+zoRiu+?=;1x^nu`AUIkag*(rVy44rN9k7%oC3-WFc,BFda' );
define( 'LOGGED_IN_SALT',    'QU&TYK6,$>Egv.aBOiPRfJaQ+4$9r_bma>}<wb-G4GhjS)O-%j RL9*S-jd+iZnE' );
define( 'NONCE_SALT',        '=!amU!P I4AmJ9i91^D=/&/lm;xMqheZ|BV:;6]-t<?@DG^c_:UMA8&wy4@9>1+%' );
define( 'WP_CACHE_KEY_SALT', 'Mb9i0+Zx_U<9@!M-W9@(0f=GI`&|% IzMT7r$p26L{A?L6J_jv[)p^+*X%k}>^bq' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
