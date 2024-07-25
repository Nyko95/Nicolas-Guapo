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
define( 'DB_NAME', 'nicolqt400' );

/** Database username */
define( 'DB_USER', 'nicolqt400' );

/** Database password */
define( 'DB_PASSWORD', 'Copilote2411' );

/** Database hostname */
define( 'DB_HOST', 'nicolqt400.mysql.db' );

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
define( 'AUTH_KEY',          '2b#ZEc x1;En,e=_FiB*4hiLq^?X1<-~:wRui:>&:W]X% QuY(Q5x-PG|6KZAdU[' );
define( 'SECURE_AUTH_KEY',   '@J<naq%[<?)AlkS77cBsBpl?j,36A=6_&*w:Q]gB&cAd]pD ]~hZ+.-Hh@*0sieH' );
define( 'LOGGED_IN_KEY',     'E-=2i/s`: Mw)8^PVmll|tnaqir7O.9-nXk~ca<,2&Q]Dz}eiNToZ<#*_hFTN{,]' );
define( 'NONCE_KEY',         '0)}s2-+w8P3CZ ^WKHc=am/O@.NCk:89v.&f</y)ZLFH&g$=mk$)<ZI8j,IGA SK' );
define( 'AUTH_SALT',         'Qis<w:s^yxuDD_<0;X!(RM?h(D9Xw((+AuL+V{k^@JrZCCyr>M~>q^+dO-:`,;83' );
define( 'SECURE_AUTH_SALT',  'xA($^{IF}tsE_hf}bzm~/= u*TTLDG=?BC3T08Bl5DHl$ipr=8RCW^l9l{/EQ)aA' );
define( 'LOGGED_IN_SALT',    ';cp+U$0)!Y_af(*Z{~^ O}N+Qf)nNAp]<I5-0YCV5gz.S?7Wy32yXg[e_1polA-~' );
define( 'NONCE_SALT',        'FRrr@9,{>Nd%q_~U~n?V{1_&hk3NNV/fQN:78q4q6< Cq1f,OE]moTs|?I54b7Sz' );
define( 'WP_CACHE_KEY_SALT', ';X0r]z/KSdE~WsE!Z$IBpFp=zv5NJ!+~o|2HGfj2+KhRwQ8q0~&lxj>wJUM`p:bu' );


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
