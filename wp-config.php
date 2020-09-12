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
define( 'DB_NAME', 'sql7365208' );

/** MySQL database username */
define( 'DB_USER', 'sql7365208' );

/** MySQL database password */
define( 'DB_PASSWORD', 'cyPYBcvVtA' );

/** MySQL hostname */
define( 'DB_HOST', 'sql7.freemysqlhosting.net' );

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
define( 'AUTH_KEY',         'swz|k<+IaWy!>ZQ#(g`!-:.bGq dhF ;.GHdZvCkn1JM5ordz^K3pM*WL*[fWl$K' );
define( 'SECURE_AUTH_KEY',  'vOvt.~$qx$p jGo]>k6o_f3W<G{9IXJ->cSU-i{rRu)V%5in]r%}@p[hRcUyog_W' );
define( 'LOGGED_IN_KEY',    'vGA 2Q-{RP]WUz9=H/0!c;mAL66tQ$$bo@9dZ}OROA6z*VFF*Y%5#!vO8+-2,]Dt' );
define( 'NONCE_KEY',        'C%ub~pzqMs@ncD7N@i!ra+d1X<mOgg7gF15UHI>Ota_bX-K87-+mbs&VD$@1JFql' );
define( 'AUTH_SALT',        'Og(P=9`HiZ-Np)DO*XDc4R`wcG0!YY[XluwlNfLzp)[~AAOy[stZx>C2B@<C wkI' );
define( 'SECURE_AUTH_SALT', 'R@=Z}n{9<&m/{/_N(YD@3z*UNm<f#zZ+g;^8MYWCv|s*Gp`d!bNvm-ud;L=cy[Q>' );
define( 'LOGGED_IN_SALT',   'x^$]z[,~R0hvSDK~YlxKKEu*[I`5!Db3ZVY.*CS[IVvkUOM7L.}laJatf]??nG@o' );
define( 'NONCE_SALT',       'j_iJ9;@)D_!1RU5VT!PtHQCiaU!`/FYU4s;X{}H+tYV*@J,K>&fy#<s1_x:!6u{c' );

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
