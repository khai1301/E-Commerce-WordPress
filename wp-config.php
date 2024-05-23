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
define( 'DB_NAME', 'wp-banhang' );

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
define( 'AUTH_KEY',         '=XWKaBU>t )!^ ~,BwL[pJRw+&3hwWp|CrD NA.yDKQ~9)~mB)w7Q:yA;[f&%_mF' );
define( 'SECURE_AUTH_KEY',  ']uM/f ?}=8Fw4_+0%D|1ahJ<*=2&&~)N_Q (zjVX ob:UN4j85:u,sM>uc~YstMN' );
define( 'LOGGED_IN_KEY',    't3MIf1Oq}v(5kx-];U<,mtY`uTF}kSDq6Y<`#;?8a?<X9FNL_! kmwfK?$d =/$B' );
define( 'NONCE_KEY',        'uiMf#_5*y[tQ:]&s;JWT1jzcw89~A3mg/ztq|`M+r$=ZqN}KCmIJ5rI[S1)v!}jJ' );
define( 'AUTH_SALT',        'b6w|qUO:EMu`IVUy!mq:DR!Jic#c;<r$}4uBGxTF/Du=,0TogsPf^%^DX -=(6xF' );
define( 'SECURE_AUTH_SALT', '=CJK5G((f2-@eBzy9b-RDl MXi>tPu.c;jWZTco}sZPsNO{zP~yFLEEJb]17RVwN' );
define( 'LOGGED_IN_SALT',   'QQRn1~Ni0Rxht]eKMVnnqa82bhDBbNnO!|6!vy!8P04B QFpk!<f*Crc:s@J-%sV' );
define( 'NONCE_SALT',       'nsqi|z5#IB9C;9=S,_Rzbn9D8UDL*$1eXS@uBFxnBGN6>PNix+rTw+rXB8EUq H.' );

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
