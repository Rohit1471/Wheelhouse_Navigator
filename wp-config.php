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
define( 'DB_NAME', 'Wheelhouse_Navigator' );

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
define( 'AUTH_KEY',         '$?}fEz>R%N]W*z.uET^q+nb4]h^UA#hN;wvnqaBP#:.!u1g22;<0$!aVi6S)7Z``' );
define( 'SECURE_AUTH_KEY',  'zR/jX{SM Gmm490f}y8^o&/IRuwfwbbX^R;#3RZh9E}FClZo^^A}_`f<ZwBvR9Gl' );
define( 'LOGGED_IN_KEY',    'kH8gAV&`a!Ma+IelE<NnZ#!d?V?:U0e->xuTWv TlrHV-00-)`f9Nv+]=rD/f,FG' );
define( 'NONCE_KEY',        'KR(*l2xSn^(Tjx9]}Tx?CDAM?x|<V3)Q=+vYtXWUc&A[lVoCP/A-WmzFzh`34wEk' );
define( 'AUTH_SALT',        '?wGK!>z6+WTWW|-@Xv<{sOwH Mlp+TD6(9*@ad#s))VA/gi :_]4l{nQy8@(YxH}' );
define( 'SECURE_AUTH_SALT', 'dw;#g&}SJfiG3t2NGuB-c(~ICdP@.1Rl->2e~` u<?$UartTNWxv1!jtM!Lrm+X5' );
define( 'LOGGED_IN_SALT',   '-^A ++On|.;c0Cuo,j*jawlkL@hMV#Fz[E_GvxMmYovmTG{FY%I7~H;aRUjUv*/I' );
define( 'NONCE_SALT',       ':bdHpE]G}LDP6$L/`4vWu%>:O3L~W9{l@Ntl6rSxoRj7ge*Jb)8%-~5^ X[~1Mrm' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_wn';

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

@ini_set('upload_max_size' , '128M' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
