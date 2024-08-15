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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'metrologi' );

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
define( 'AUTH_KEY',         'SMT *M eLpQ]Nmj|&(21Th Wz>f<#_bdrvyx2Ny+QIvQ<a2a}n`/<l`QIlKzz,?7' );
define( 'SECURE_AUTH_KEY',  'S~Dv]J>#TSuOGNJz^IVs.RbC:GKH.:v2]%^riE0:h|Jxw(r)<)J+6ZSxY#ei~t.,' );
define( 'LOGGED_IN_KEY',    '6KD1FqaZC(X|=P|+.Rkk?#~&?5chMiw^F?r(wX-lS:<uMZ=fNJa%YLy{PkZ+=?<E' );
define( 'NONCE_KEY',        'EIDvS=;&y&):=sige?^D4X`RcHt?9f`UFR,nak#$TJ{|j>&/-M$vDnGqx#Io9&$3' );
define( 'AUTH_SALT',        '4iuAX~}A&:Cj+H3d2q+%SKRUBw|{@!`z**UT>{/{SMVt7rg}#U+J(@::771#;()j' );
define( 'SECURE_AUTH_SALT', 'tMn3)t=3WxopPCg?lV`Ib4}rq$tax-8mqOsM=rTx;09HnGK2+H{@OD!wKQixfDy7' );
define( 'LOGGED_IN_SALT',   '*=Wn`=4`[?mxQAYEO:aQ_p3=~Nl c%Z;Q/3NA;lK:A-=9KUcFEU5&OTRfMEaM7 C' );
define( 'NONCE_SALT',       'yws*KT5ze7_l3P]{W:+!SZYEs^h<+8W6P|)`5h HyncSYwVxI;acn.o`k+lCF*3P' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
