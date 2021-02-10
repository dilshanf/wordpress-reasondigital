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
define( 'DB_NAME', 'reasondigital' );

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
define( 'AUTH_KEY',         ':A9k++kiB!&8+X!;aK6Kzj^-J=?(}<hlV 6ui*m&Ic:pp/PHB(/>XMK`bevG#L.u' );
define( 'SECURE_AUTH_KEY',  'u6)Ywl>oUUr_b.W<=?Mj!BqSWeN!cL]H}Au8/IOCnwgUG^Y(V,JM9] wo)a{[#t+' );
define( 'LOGGED_IN_KEY',    '<+vHI|tZFe2[i0~qLYm#B{8H;t(Go]R.2{t%|n:2OwU?_:>6`myP{5_r>IZC<u&q' );
define( 'NONCE_KEY',        'jPMph`EsxgZ-&$sw@+]:M,2QHg/Zd[8~f L)eTRS9t8gXpF2|&%@*#1s;s|8&jvy' );
define( 'AUTH_SALT',        '}#|PJT,p6sRI{@1wZxo[Df84U9Qh]>O?4}@2?Od1gHi{mm4BE;sMqE}lIK.U<dZJ' );
define( 'SECURE_AUTH_SALT', 'XsLjH{O>JrR^?Z}2KtF.=Z=}&)Z0{vPZMDB`D%,c&*U&|R^D:F*bRQ<GsY[HYth}' );
define( 'LOGGED_IN_SALT',   'zZ/NZ4Q1KQIKIALjR%Bov:Y-gl/24oe93Rc*n]D>H`j`:No(kHIoW=pZJ5)28Qb>' );
define( 'NONCE_SALT',       'Tbi;FV0G}VK<HC8V[ #E71l1hDofH/l%A{)#XrnIFf1idXyS:8wh@jcG62C_z6Wn' );

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
