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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'rsl145230_wp_pkczk' );

/** MySQL database username */
define( 'DB_USER', 'rsl145230_wp_urf' );

/** MySQL database password */
define( 'DB_PASSWORD', 'KL0j0i#gFe0$v_og' );

/** MySQL hostname */
define( 'DB_HOST', '10.243.11.56:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'H632!E2V66;#c)0oW49b5L/vfW%thrRx*rkuBesOjH453YuJYuf*1X407+_hf8qG');
define('SECURE_AUTH_KEY', ')s2(f3Xkw]OM3VEJ:rM[):8CKsh&[dpkT#&1NzOq8BQih(&R2T2gE[/Et2o2!59k');
define('LOGGED_IN_KEY', 'l6%+@A;QTm3fByaC!6x](ti33&)xJ717&5ek242;xnfN(~Zr+2Abr9Z4PX]f2O)I');
define('NONCE_KEY', 'M3S1F@R]#lH&KW:p6_K0[7U4)wZ(6r6&JqnN4:7L3wfgyMRb!lX&CV1[B%F4B/IR');
define('AUTH_SALT', 'gIKp;1__/]d_7R53Uy)L!2)RqH-Y:~@pW)4#u19Rf2W_6z7*Q+@2E_B~!zTC(~5*');
define('SECURE_AUTH_SALT', 'fG6%X+&3z!3Zo509w5qW*%7-c3z;#hATj3c40+A/0267aN7l4d~j2E_~L2VX6@Q0');
define('LOGGED_IN_SALT', '3LR-~E2p84IX1FS-AntX*!l09#:t;oz#@t3(OY@CA9IeM*!PVg#0|p[4|N(4Z)HV');
define('NONCE_SALT', ']o[7SC-x92yx-Z8b0--2y/4Nb6Ce;;m3F[oW9_I_0kwzAY2~N@NV*+W9/a~O]06z');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '2R0Mo_';


define('WP_ALLOW_MULTISITE', true);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
