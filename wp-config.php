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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'web2' );

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
define( 'AUTH_KEY',         'h0UK(STYH]J0lldPC*&xm~roRlzN)*+tzGwnFmUb]X<E`YwW$!q#Edw~2:=afS<M' );
define( 'SECURE_AUTH_KEY',  'S[nz*/v2chkToR+-PI,hZD%$%/.WkwhoZ`~{_-XV[cb[ qPEW1@3V&R=LV%qxc8u' );
define( 'LOGGED_IN_KEY',    'Fq&qTs^1z2KIWdl/Ru{{GFU?Eq_&8TL1YVnL)Sxc,r;<>n`GLQyE|I0cn6$ y`&G' );
define( 'NONCE_KEY',        '+u!gZuaa/ot{XB[<!`cz|V3QW%!.x<k0R2rsPs}uXOe`K+U?z~j39Dx0$QW 8fr.' );
define( 'AUTH_SALT',        'PI}^iIL;jvK6CZx<tr{5p93bs+zeUFG<:o8p&32t(_k+y0Cs4`sx@aTqC&>y *B7' );
define( 'SECURE_AUTH_SALT', '3|jicL[H4uIbH|8$__;%94DZK26EU{H.MG Q2ZB9PP8KBlpEj_0#IZ3W?xxXQOiD' );
define( 'LOGGED_IN_SALT',   ':9iy)P=LH!&|xM,W*SW/=[XR=2W[d.S!rzP_GrU6~tE0DvMHVzYYEsVhy4%f!AFF' );
define( 'NONCE_SALT',       '[|;)*wFB4A4fAIEL*$f24o8w/^n583YC%4P+O?x)e,}y$UK@.k:q0Quq>vEriW%)' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
