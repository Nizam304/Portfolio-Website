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
define( 'DB_NAME', 'Portfolio' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'MOGgWsFN518E#DA9)C#*A9w&z^|wMn2)xrUy-fx%`/,krHv@$uEEYvir.Lxb2Kz-' );
define( 'SECURE_AUTH_KEY',  'M[?A&xa+NdA@=<}2qBX[cCJ5L3aXt`!P7@JZetT^o+FGr3AIz~qxhe_gN3Z;ox<j' );
define( 'LOGGED_IN_KEY',    '^uV_qBo)bK &Q5>grotd}cS$W2/X}Y:59e@1/i/1@nc?Mehs^7[F6~g8OI3r`Z{]' );
define( 'NONCE_KEY',        'K/@qYD8kw%mMGRPcZ:rpfxO?uzBu`SNiKj}_t<*+)E=R~uGM ^3M<BTEG2puYwn?' );
define( 'AUTH_SALT',        '(*mf4LH$^|$uWXcm$>1x7$ jfg7az-C3;}%XN!38 xbx1kKV{Hi+H1x-X/3Ni/(y' );
define( 'SECURE_AUTH_SALT', 'JV[w5~l7~i3JZw7N]/Tb#J*b[_Q@x2t V#u7jn^XS=sa)#:{$MtPt&%?huplK1@u' );
define( 'LOGGED_IN_SALT',   '82{<KK|o{4f(Jz<Cd-2w7}dL8$Fk@%X_iONx;r*4TneR`vSGz%J/x?7^+e@nTo9#' );
define( 'NONCE_SALT',       '`Q(Q3j)-s9F~WDz@utl~HU.Jrsfr3w7#09&N)`)pyO4]m,J@ e}N~(Zv*,Kc5(e,' );

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
