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
define( 'AUTH_KEY',          ']grPyG8HbbhlUc58` #,yQ;`A7(CLV;[5)~sCBY~.j*sm[@6Tam#85sZNK4z/UqK' );
define( 'SECURE_AUTH_KEY',   'ehDfj4J>%j:M,Ch|IXaV.m|mmxYE .}<w&6ZYYfF}<*Pa<}uh7q}NX]/gkJBE8;o' );
define( 'LOGGED_IN_KEY',     'zt&;l()4C@nJ4i.2u|rF@G1*%P/3=LLyyq,KOLeEe.#_9/_rJ57`gC|}6uhKVVwL' );
define( 'NONCE_KEY',         'i=.iJklP?LNu_fxOJYZ]+?FxWDYMft:@6+@fTOm(j(Bt0N3P2#z{p-,q,yHy;nBp' );
define( 'AUTH_SALT',         '_7e7eb8p8);~*fgmwrPO-HNYk6Ut0#:!d)/p(|dxdkq?UW>(K{PW.am6Jc[Gtay#' );
define( 'SECURE_AUTH_SALT',  'Bw$=LS=p7h@MI]k9[uo2g:b]>K!cc$bPE]8 5Jr4cGM4T^:|ixg+K?v@E(RkQH9E' );
define( 'LOGGED_IN_SALT',    'Fq^m2jAoqZ=KjNc$SM]DR!@UvoU*DeO1M$$$i~gk<WXU>T:B(Wi~|s-TiWC<5fa5' );
define( 'NONCE_SALT',        '!`B0=93*Iq&ej7gwEgqw6-n/y?>j05;4p86ez$D[{b,JJIJ(`$+sY/(D]kCQQA?X' );
define( 'WP_CACHE_KEY_SALT', 'lC2m)_m1@-5qF%|8HT<jcKB^(<?0xI-=/%M_g`nzjC](z9z{|!H(j_6Q;<{T2m9)' );


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
