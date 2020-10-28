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
define( 'DB_NAME', 'db_maderos' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
define( 'FS_METHOD', 'direct' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'q|OE>+$>5:c9FR)E<pe2-w>=|)Zb6A]*c;l68M%k &z&uZEkYEKWXifX*qP}^Lo[' );
define( 'SECURE_AUTH_KEY',  'mH2 HgYm]kao%Qb+]B*Z7N!L)2>l4h?|`mpqh/i?!6;|B/gf`)NPU@`k<0Z0 i?$' );
define( 'LOGGED_IN_KEY',    '@(z#$%PiRo9J-0W$&3<Ai_ls&)*>d4vks&>@rhE{1BNnrqTJ5B~]Lt(Yr)dv0.js' );
define( 'NONCE_KEY',        'DOm/o>fA=)~CQ#[A]Ykv64k+t7Ek~#!ddmhP2x+/</Ymc)r0gxMt%m3]A82Un3Y|' );
define( 'AUTH_SALT',        '}!o>||$&!x8jroN]9a NV&XwG67CLVhqs^zh_909}be<:g/e-t3zFY4O%1G9Veij' );
define( 'SECURE_AUTH_SALT', 'LNX}zwgdy<#=CRNK)ma@STm`,NFZjd/22tB/B^eQ,d]`>^#8BE-u,&@@oOrG8{`c' );
define( 'LOGGED_IN_SALT',   'WDTTu]=<Jx<AM)(lBpDRg.#<l|enM3P0Fud}a~pGk7OMFu13Y7CI*na[`$%}?g$R' );
define( 'NONCE_SALT',       '|3viq-$Pv4vg/8K$pT3@#Ylcf#@ (DsmD#ys-X~:I!!GC*@Og~eiD.Dl@GlP+|+P' );

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
