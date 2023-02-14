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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'newpass' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('FS_METHOD', 'direct');

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
define( 'AUTH_KEY',         'fHLETv^?VD]9^g2^YA/HE3Q^r6,YmUt8RXBFz]3jC3XzXjw!g,O2J;7;9-~Vf:MB' );
define( 'SECURE_AUTH_KEY',  '}~sY8J}lX*BFm<aAD`!]8Cm 98|,[EuW/,$`j)guGAp{lb5SUYyX$!G*j-F0-?*p' );
define( 'LOGGED_IN_KEY',    'O8j{uI0#LvPT,3}jKh{F(edsozjs(52BkJ_g#CHUd2%H|24<git(q]P=F@9!#-zM' );
define( 'NONCE_KEY',        'WJaM([#j6L*.i#)zKvVRZ9~)}Jc&_-w)9IaDePaIJhez`-PGLKu]3p*$y.&uh];/' );
define( 'AUTH_SALT',        '<>Ez6Nl&L.y>3bBfME!; H();J%Q!Jeoeq<1M.IRPTz-!.?>C0,y-vBs-Ob^A|{e' );
define( 'SECURE_AUTH_SALT', '*.U(t%j],nyt(!#kT:EfH&NB>w& BB4jm10wB0T>6|IPprC?K=bNRqMU,JoA]I}w' );
define( 'LOGGED_IN_SALT',   ',dSrhD96VC`vYF1[|&82IF[vxb^UQ]FuY+XPp/@V`y6EGNFA&Q8aP1?{_P?^@#<_' );
define( 'NONCE_SALT',       '+wvx=gf[0xb=E04x>#z_pRvM*_,U$h|^s 1-4FFg7Agj+-I-$,UT>u[Z!/P=-Kbs' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
