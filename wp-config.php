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
define( 'DB_NAME', 'db_frameworklocal' );

/** Database username */
define( 'DB_USER', 'user_dbframeworklocal' );

/** Database password */
define( 'DB_PASSWORD', 'user_dbframeworklocal' );

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
define( 'AUTH_KEY',         'b=$ZaAvwzA`rS*A(,>nD%+W5@pt=1~2Y{DaL@AMsVt$NUR@sBGKe(Brpd7;kqm)C' );
define( 'SECURE_AUTH_KEY',  'c,TT0kM?FH:e[{m_8+C[^!M`0#i7eHvwhO|{5~0/=3{STEKxISe>|F1)yQopj|TZ' );
define( 'LOGGED_IN_KEY',    '&o4$9IB3[w><,Hx$=fuC<yT6%xDunUKKRPj,9P_o/d.BxAZi8Nva}3wXY=Up|?:o' );
define( 'NONCE_KEY',        'eMr<oEL(ZambAnWIhsFoF%;e9_f4<sP#Urja<F@&KjBP(K%b6iP`o):<(BHyLv7V' );
define( 'AUTH_SALT',        'Uv/ke[2[!E5FC#{m`l1K.iyQg?S$y?9Q17B,.vBC;lV;Zr1^&p,56I06O+9Zwg(e' );
define( 'SECURE_AUTH_SALT', '9ll6dSQ}WG<07/,EL_%_*7Xo!ed ~nWzuF$Bi0d(x~LK[1 %s=p_1a7g!`74j_bE' );
define( 'LOGGED_IN_SALT',   '_~w_wHF!{oxta>*?y[:|N]fXL&b_Qv_)E9=YDBo:*IjBy>:/ofHnfYs-$IQ_AD&p' );
define( 'NONCE_SALT',       '[ece^I}`}q(2`;`T;t.WVFnv%q-nAxthuJ%BKQC2[E,Tb|=L[K%,!!3tR]_9(o`b' );

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
