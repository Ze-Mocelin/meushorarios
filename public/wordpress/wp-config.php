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
define( 'DB_NAME', 'meushorarios' );

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
define( 'AUTH_KEY',         '#6x|W[^J4VRuj{&-eElSz9xtfJ.31ZzZM$94088C#^aUsTBR}yr~-*oN7-cqrS=n' );
define( 'SECURE_AUTH_KEY',  '-q:3!U m)N? |cmm:bd=CAXSUb&0n/;HlyVUz`bAP2Nung3iX)Zdu_% KMbb>6y,' );
define( 'LOGGED_IN_KEY',    '9GG!gFmQ>swCC/rKr+sVk@4pGO:z!XwG75[U}>O,L}88VR:X|9G`}ssy|eaa-NbO' );
define( 'NONCE_KEY',        '+0RN&>N77sWX8I8y9H@u Bsbq7:hv3L# Ui~$O [<aA?k[w;Wdn_m)[(_9(JSr6 ' );
define( 'AUTH_SALT',        'tHQ |u`lhavpZg[3X!ZX?B*w#C|7m?-]pk`bTY jjL8EWJ|[7)CE_khirtd}0bwK' );
define( 'SECURE_AUTH_SALT', ']`2=:!Ey9& ZOGM%3U<?lJ$WvyKr&30I^$m{hNLB(>iRUMe&#Ns@XQ%0QJAXhiHv' );
define( 'LOGGED_IN_SALT',   '&b1a75N+f2YobbE`O-DpaJEQe:+>_#;3#0*9_et*#eJ%8dUz!VjG {%~oJWsjkEb' );
define( 'NONCE_SALT',       'EplB5.x`#1M@d{1+FWuw[E9.wC.7s&+^<W{ZvoVz}P:9.8N<).o8g=P^x6mA;?Il' );

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
