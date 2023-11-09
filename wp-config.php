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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'wgFI>EEKB1b[O[pOJ9=:<G}9huW%x..Urwm*AnqK:0/[la+N>dgBK-`x[2l%S6DH' );
define( 'SECURE_AUTH_KEY',  'mVz|;- Dq$)eI?-Pa/IC7Hb498t##*7}TcuQV=LKM+K$5nlbl~k%=/B;II([!Q4M' );
define( 'LOGGED_IN_KEY',    'K=F2m[b[QS#4{A3$xOat`varUC2*?fT_;6wXcR%U7{^2kuwa.kdDMl6LrpIz]<at' );
define( 'NONCE_KEY',        'UoPy^Aw]LYQ;kBBEZ@P<YqNFj5ebR`^VFADC_^],8Yp:+>jIsz3/Ts,{E0Nqx`mG' );
define( 'AUTH_SALT',        't6Bj%w`1iXfi1G!^W7s{/gG<k<`y]8L~MxyuJ:;mRcO}A@$>#^4D!(@CCIRKl&a{' );
define( 'SECURE_AUTH_SALT', 'mj]vq{tR~i(5(ufQ[|%lcWdQFr(3SPM]K]YBDuzbgCk/+vD=9KAEgE|}F}!wI#`F' );
define( 'LOGGED_IN_SALT',   'PZc+G{W*cBzF4;xxFkO]1iqDuAq#zIXuwo*R1wEH:KkRWj): OMs4p/,kYXd`X2y' );
define( 'NONCE_SALT',       'YuA/8Ay/ww9B$)T!W2!36Du6Dl=8>7vF~E`W7tT.{B|y3iUd-%tST 47IeY$Uz7J' );

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
