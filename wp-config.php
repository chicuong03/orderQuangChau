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
define( 'DB_NAME', 'QlyBanHang' );

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
define( 'AUTH_KEY',         'EjusUX4y.A x@-y)FRl8yp4cBd;hC}OK_4uCzk~S4wC`3kd(1~T<o?c&lc.{XTq,' );
define( 'SECURE_AUTH_KEY',  'AeBMxcHl3kZfoM~|[Rn$A}1d qBq~^`>gZS $3]JZn}2pY@f+Hr.9qw] ];a[0PO' );
define( 'LOGGED_IN_KEY',    'mYoxo#^Nm+6n^.q1m`{sj]X(Kb;q]vl%4,4pU|c[XO=QlJwul@jU:vphP*O!&DV@' );
define( 'NONCE_KEY',        'ZAvc|!^:z5a@gMhGkV%?8uG(=icvh*cCR1rq+C{9,[v+lp-mv89}RLR#dv=@0FSI' );
define( 'AUTH_SALT',        ';dB5j?+>7(Slx+m# f`?cU?ifhMF<e0/`rpWGV;k}Pc(:@cE?E-/@N;!}*FU#ke{' );
define( 'SECURE_AUTH_SALT', '?j0xt6F% _1Or+J[,[+WdhhHc3Ljc:?7&w]Pv_?m.d!{RBu<j}cS?j0jz4z6,pTe' );
define( 'LOGGED_IN_SALT',   'Lb_e#kAV//o!lukn5LFv#(o[xLhdP`kvtq_(&?UFnborxcb*o)FA iIY0=zjpK-K' );
define( 'NONCE_SALT',       'Jw-6w+T-{OoJf8|MOYL-,FFudCMYQ3S/-332_K-io*mnM=*^*Ht?UDN QnBsqp3H' );

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
