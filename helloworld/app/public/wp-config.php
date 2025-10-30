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
define( 'AUTH_KEY',          '$Qh?u9o[$M:kT@SM)yr0H:wukUDZ`^uAWeQ4^}R^d4LH!&LT3`cv=B.-rPSU.p/n' );
define( 'SECURE_AUTH_KEY',   '@Z;7N*l9uW(C3~8QsCk#Iah@_BT=0:|)7QHC{e}1+g^/g$%y}qIqSbsn;Ze`bQFl' );
define( 'LOGGED_IN_KEY',     'P-CfK#fIxt]PG3g@!F{SB6@?{bjNaVq*9jUJ3,qGEVi%7dc#JmAaT;0OyR55v77U' );
define( 'NONCE_KEY',         '+^JrJbN,M}Cmh=:(HgEqt7Og[&O2*dZQtLg1qI[IG_?j|KWFz$p>S+q?yyvK}i3z' );
define( 'AUTH_SALT',         'Cz#O&Kh-ULOF/KI3*KR8F}l6C(NjTc<b}fg/)WYYf#Mi-?{5!)3a6[<ZZ Wrva&I' );
define( 'SECURE_AUTH_SALT',  '@Y-w{Wup2VF.b?|.+r&4UGLmb<EGO[Y<H3CpWZ_7WCJkiJV$;ovlfkj-lx*$X:q7' );
define( 'LOGGED_IN_SALT',    'X&03RGh~5yVy]n;a^J#;8o}dN;TTR]okCCq_LxZEH>32S{wjEeb<jn]p<cwrM#-9' );
define( 'NONCE_SALT',        '~t*=6s9o$mPqM@vP0u.-cI jZ>$E6bt:@DmkoN/ed(Dp]_}*lF5t{MP<NK)%SFM,' );
define( 'WP_CACHE_KEY_SALT', 'XugJ{]bdNGe=6%@vR.2]NNpLn5]Zw.Ok>4_BW}9@.{r>Vu0Or+MIvYR)CWAo}mw!' );


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
