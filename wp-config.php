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
define( 'DB_NAME', 'Wordpress' );

/** Database username */
define( 'DB_USER', 'Wrecky' );

/** Database password */
define( 'DB_PASSWORD', 'qwerty' );

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
define( 'AUTH_KEY',         'uDLrl-bB8&N86Q?9D|iN<t}cYYkc]:bHo)[9:exy3~u,Cx:GU:jFSAxAB5V*X6S7' );
define( 'SECURE_AUTH_KEY',  ',yo^qZl+uAJnZdJ)[:38]a;:!UE.fY$m!U-03g,qT^Tpx&(#ur=r!QIENpOp0S$h' );
define( 'LOGGED_IN_KEY',    '}OARRX|_SsR`6|Ji>C.[;SV qWp1vR#Tu:<ZgFBj00nWp0+,?3I7G)@-T23c-(p~' );
define( 'NONCE_KEY',        '7&HB9C04yL:.W-ut;$qY.}2md#kbGfL9NYI|34HfnU[~1Ds.A7(VGFDu(Xz^nr&0' );
define( 'AUTH_SALT',        'p^Mv#1?/=?,SgIo?wLDnVAOsbuGq5`$d^Q^dyVs~P)d4]Q-g?H^sUP^CTP_,0< /' );
define( 'SECURE_AUTH_SALT', 'pKjjK%QmJz/(E;[{[;D;JaP[/ [(p{UMgH(:[qODtX}/f,+uBm=i.|Xi:C?R]&N/' );
define( 'LOGGED_IN_SALT',   '>_6bOh`?TF.QGX*,zraJ{8YKJc&BrXCs$X((y<*QA[LxB^5/_}s%5Q??~CzBaS@A' );
define( 'NONCE_SALT',       '#Q2a(b_gU.Gg#!X?qKREo9W1&E.w~&Xdtvm^eA+3Y`/=3c0Q_44#rpfsWf?M&B%g' );

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
