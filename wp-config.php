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
define( 'DB_NAME', 'scandicweb' );

/** Database username */
define( 'DB_USER', 'scandicweb' );

/** Database password */
define( 'DB_PASSWORD', '9r^yihV2RYfaHDN!FS&!m^JxHFiGCS5G2D52%wkzBDjHfQvJaoTRcqEEf79ykSNiVf4hyNmvupPN%#Fa6*ygFRZbGFxfwtY5aSi8Egv68jVjk4D6q@cQms#MfHxG5WWh' );

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
define( 'AUTH_KEY',         '2@[@0DYcxcCp/puGe/C>nH[zC^CKQp5B_t_supRT7G$<%?OKZQ^QXDTc5<[_{HAw' );
define( 'SECURE_AUTH_KEY',  '+s[Lg2|brgkYJVu?Kjd[&v};@[yb3Zi$96H%Hwfz6N35O,jT<+P[bs9-&3.&iaZz' );
define( 'LOGGED_IN_KEY',    '_V[zjX,KqqAY<%x1+owa_nn%**N;LwepO~{#ct24,/h$S2XPhKd=qc^O{7S6aw._' );
define( 'NONCE_KEY',        'lf>Ap+q(bH_|4A;*^<+|H;SHd;__-D}8R!}FJ11R8!J2*N@b:=CeA3|<K{f:?orI' );
define( 'AUTH_SALT',        '$vAhUVa_ve{qXBLS&Mn<jMyH,8$;z,iNV]UFLGcs9*@qGto$AI4BMFCBr+$qXVWp' );
define( 'SECURE_AUTH_SALT', 'Z.yt^vqt`Q&cc8-}2]N$anLnW^6w:/WecN>JCOQlvEh66+)%78ff15V~Y;WDOs3w' );
define( 'LOGGED_IN_SALT',   'v%&8k4@.Z~|#aJTgUIM0XBb:vv$MxHcYFxXN:v?9g[l8dH`)FU{gZY8 l<~7m@tV' );
define( 'NONCE_SALT',       'S-w`@:Ap&Ogo E>og_Q+K+N~CVaB.dS9%*zs@nzeVs=xI/=knp:o:~cWk?hD0l:*' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wphv_';

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
