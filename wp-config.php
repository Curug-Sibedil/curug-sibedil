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
define( 'DB_NAME', 'dbcurug-sibedil' );

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
define( 'AUTH_KEY',         '6D6;df#Tv=9C!c%!%uzAXew^lt+ (brSnp&`qsB2P>2K$UkO9Dn4e$wn/v *3(Wh' );
define( 'SECURE_AUTH_KEY',  '>E}v1j?09~zs%a6$G_7QMgmNq@0@A6Z1p0Z3?z[is<J^OQaEK$o2KkvppL~$,G@j' );
define( 'LOGGED_IN_KEY',    '_DVo1FC>zf{~*}LFxNhK`Ts]IOB3IgaIHUIb{yaf<_R4wZHWFy*%MO)<5^+EVTTw' );
define( 'NONCE_KEY',        '6IRFMEF-{,SYLwt,X#Lir@)};4Os*k8)_*@jYHo$Ua[RE@v[!Ck@r2.k$WL,{-a ' );
define( 'AUTH_SALT',        '{]Tv]{(5Sx3Xycmv<7J,lFneg<t2pKQmDEd9(+aKmtc,BZ!`<w#-^h JnkbzqCEA' );
define( 'SECURE_AUTH_SALT', '4[,=q|:Jq3ZG^UJ^8wf^fx=6];2HSn;[[<T!XJk:a[A*zil4)AHc)RH$vNU_-*n]' );
define( 'LOGGED_IN_SALT',   'H~(5Y`fulKrS3gy/@<E3B@XI>70]VE|#2qoxrl%3v^x;<-Ik<*:IJf3Dr$G$!O[|' );
define( 'NONCE_SALT',       '@Nhn@8@z0@TSlCFYe:Fr/Fe=&S:#}6/v-0PFh5iJ}Qp{7v*<uY18m0-BhTZYY%=^' );

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
