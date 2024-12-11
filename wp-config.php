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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '3KYn1kV&4a%:(E`^}7+_#79bl&SnQ+6Hs{OHvaP?:y=rC:yz]^Ho/(9}kM+H>chb' );
define( 'SECURE_AUTH_KEY',   '5xk?2F|NY%s`rkbEDoD.!S#DRmATRF<Dc9WN@ey158=9}ly.~<:Cg*~vIA)!H0:M' );
define( 'LOGGED_IN_KEY',     '0+ND2,Q9,A/Xak!5MJ)335;Pvvu#e5*Xxy8ij2t9_,:BozQeIMF<(b/81,_f`7Z>' );
define( 'NONCE_KEY',         'oDEt e&;n`r%#E5^m~-wUVZp!u{bGO7k>k NqMlS2J#abFQ=um3^I]}^kdqLH*Vs' );
define( 'AUTH_SALT',         '[&`4Y(UQ^ZG?IklzAbT^Q51GiY$qlKdp,ztNS.k{wtT^tQQ,l-D;KOZv!A;N4j`&' );
define( 'SECURE_AUTH_SALT',  'PWlj,(/I~uh{YV`%*0=K[cg?]<+EE=*y@QZj)IZ()e$Eu3(7% 0*zvKac1*~hXfg' );
define( 'LOGGED_IN_SALT',    'U!o|tt)&YUeN]~U]zbD(]nUYW1Fk=Z[w8#v/!$1:l1uD)SN14e.LZwRm[bH%Fo()' );
define( 'NONCE_SALT',        '|U^kg11`C%XoC_rAwP Kj2D,&P)o^-wx&6dQf=7i7CoRU8)H4MQ8<Am<Em=`B_:&' );
define( 'WP_CACHE_KEY_SALT', '3[ JkemA9/ ,vB7_Qe^u?&Ov}bk*PvT@Jc&>!Qw})j kAbBI9T6@g_zV`,mXeVHg' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
