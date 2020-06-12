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
define( 'DB_NAME', 'meu2020' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'excelsior1808' );

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
define( 'AUTH_KEY',         'Rid,_M;qZ,sSfu@9EL#~yP.Pcl:LLf):^ i{-$yUa$|Y2x:|Now^!{84P>DzwW%d' );
define( 'SECURE_AUTH_KEY',  '!=`_=^92}P.inR@L?uaz@P6Tfv]$V0)fXvL2A JBO}!Ng >>{-;7iqJ{&`](_*MG' );
define( 'LOGGED_IN_KEY',    'Sx~}eNAp)yXxm-x4>k=#gJR-RL4}CB0Mm@}rJ5_CUKPq.vI3nk%`gKR*Pt,l%A}2' );
define( 'NONCE_KEY',        'u_&/*&{l,O/StY*wn1*A^e&e%iM%+`O&wWX2|nD@F3p;=[%n3#wK%x6>VzPRU,>j' );
define( 'AUTH_SALT',        'jM,r?3:XiB)jIxqD|6LuB| nj3jL%|R:6n7ExTcA?$z9bd.SXdd]kR,GCjZPeegK' );
define( 'SECURE_AUTH_SALT', 'a;@LY^Ocj`zr5FX>qC>HwBv_Y.N4f~PdUJhPC>AL~^lgM Z}>IyL]x]tYFllos]|' );
define( 'LOGGED_IN_SALT',   'PrC8r=:0d|@Sagaa:W^Ema%</(F8@8|k}yP$EZAsLx>$@SID}FdC~|{XhV{)~l4E' );
define( 'NONCE_SALT',       'c%m{MaCBi-I/tg)cUK(U:5lvkdtA3w>{L3|=rR56BRDF!qo}/;8P]# s=&9/k> e' );

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
