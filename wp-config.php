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
define( 'AUTH_KEY',          ';SA/w%Aq3AKHk.z<9mHBi/0s,q!ZvrfDRu]d9Jc,[l>nv-r:Z67rJ**H*}2WsH4*' );
define( 'SECURE_AUTH_KEY',   '^&lnw*!,sI`.MLl7<q%r;_~;USuJ*UPr5Sfnq~x9.c+aLRiX0~r$ewDVndE?<lv|' );
define( 'LOGGED_IN_KEY',     'U*:!*75*VZP>DG^y9KMP(X :laaC?_e5+> K{RJ6BPCo;;&]X]>6A<r_E|7Q7/}|' );
define( 'NONCE_KEY',         'VhsT:n3}eH(k9`5qmQTfMWV5;?<wrl0/ yKx@)/T[ 2r/K3;n~)[|AdN29JN-QfJ' );
define( 'AUTH_SALT',         'mJE>M6J$,iksHc3mx8tA]L}vvY|K(>W)bi}Y5`~k 2ZvDBHy6qx=w9%1NR=8S?Fm' );
define( 'SECURE_AUTH_SALT',  '@Nc}89Uqi[1f,{NF,(vMT+>C_fE3aTY~Kg6klp?H_q2mXPsv<s?oqG^/oN8-p%l$' );
define( 'LOGGED_IN_SALT',    'w}YiWqN.^4FPXRs1R_(/j-apeb{2R3+EBa})SYlg-Oa[L~O4VTrH1!z|$1Ov]~`8' );
define( 'NONCE_SALT',        '%nQi@/va-H`jhrC%kiyXG*u*oJ?0jg9<#ibx4YAb<?_=67,$@LJ{0suKuY{3Ak@K' );
define( 'WP_CACHE_KEY_SALT', '%5~?(Fq5JhQ%0Iv}-j43NQ2~d@U@XoQW)B1GNsAqFl1.1fQ9o;NyJ]$EC0MaK;}|' );


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
