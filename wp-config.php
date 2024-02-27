<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'stackstudio-smb' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         ':ZJ{^Mzz9QP;0YD8{bPs?n:66l3Yn)TcKnY>zJ.[msB7cL_WjZSly:R>,h#/[R;e' );
define( 'SECURE_AUTH_KEY',  ',N=vP0iH-8He%hST0k=t/CROHv.LN~:Hk{c=z9z9k!$BWO:e@~yWs:]$<PI^V]F(' );
define( 'LOGGED_IN_KEY',    'x>!oJpA+)MA13x#2.0P}EV<eJMYfzuMBH~M{RJW`]Jo,@cKW7(lnSC}upu<#8#eq' );
define( 'NONCE_KEY',        '0n0N6$:WUO.;dZ1)#y%,yWLIe9A9fX@+ (AIi7GLu;mTeF=NPeAj)B]bv*eWTq[}' );
define( 'AUTH_SALT',        'n}C%stWSN@<x+^bg$DOjGw+enw,7|fP:QaTqaM~dbebxQ|:+O.$}&sGK*j+Uo|@p' );
define( 'SECURE_AUTH_SALT', '/Tjx FvJr#g~GNDNq+^B,;vq|M`C5FSMk[wPNn?%D8~cVNHE)mZ!1H1F8+)#Iip.' );
define( 'LOGGED_IN_SALT',   'V]:vL ?asmL:Ne:`o.lL|S_2>?@zF^S@20rt<ZGqR~y[Q Iz7H(cK,CU,44syVu@' );
define( 'NONCE_SALT',       '}]>R~9>(&<|bn#qN_FIJa3Z#)LTDg(CE2Ta!3-??3`Jck~|ijD003AJ,/FLK,]GG' );

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
