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
define( 'AUTH_KEY',         'd0OIt`R09|NPz,<kcC6|ZRRrtH!F-EN#R1]x-nJG;iU~78bRUdtp-^H0crl5 0u[' );
define( 'SECURE_AUTH_KEY',  '(?q!)l{Eh&`[KfJ<$z^a62b0%im}TTIXK[DA?4KY_<V2,<9YGej/BT{Q4NQG5xe<' );
define( 'LOGGED_IN_KEY',    'Pjal/Icsjl3GhzE]k0wFhr*o~+7INMUUg%ig.`S|@bP~$TQuP)-;.65>3$__IW V' );
define( 'NONCE_KEY',        'Z.TW>8_3o_N6I!tz[$JM931Og{pU.Tjt&FV!JlO#A(}h9L$z^s-^T!vmsW>?fr7]' );
define( 'AUTH_SALT',        '6l%72a A-LlkMy 5yY7>1d#%K2WJiP6iN~&R*){/N7)&b {Q1+QjBB-<e+8 d_Gs' );
define( 'SECURE_AUTH_SALT', '4K|zh]1hjCr`%> WNn,F2|/4{is2gG4L[+ FqW*vtHWrr<8Bdw:D;sC&w>)b9{h1' );
define( 'LOGGED_IN_SALT',   'aa[N<4g@PCn)e}nb94*Q(PY[sTSC>y>QSE]<|VtyY=[Yvhl^]ieSL[21?uJVXlJp' );
define( 'NONCE_SALT',       'n,PDbG=FL@@H=dEg<$im68A){:/@It!D$+Hn.jQ;gkBQ=!g% lGS(wp>,R2H}^6;' );

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
