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
define( 'DB_NAME', 'portfoilo_web');

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '12345' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '8/eF_GxPIfk=N=J1BYs8`M^BQGXg9jn?=5Lw^)=+m4ZKB+hs*HC?tRYZMXwh,X@+' );
define( 'SECURE_AUTH_KEY',  'lqG@EqEN(qL7%Fy-^!M(,=od;G{;8`r,/}<LZL!~RxfDN?4rg8H0Ko!5{Wxua!L+' );
define( 'LOGGED_IN_KEY',    '}lPwEw;,3Pnik]b`f!|ksMf43-w0w~Pe33,Oy*<yTyr*kTI=+.)*Il0,QT7<(ORU' );
define( 'NONCE_KEY',        'p-Qqgcxap.W~|Rtx6yY9pM4C{qGOt-e&HrT{zM}IxuBhh-Iu,koD~/%8{~PwY@YQ' );
define( 'AUTH_SALT',        'mZJP%@-6E~~k,p-8`XeY(HFrGOyp$VWPM`)Tcj8 =f)]H:Yh.iRRwS^Q5&,3x>F]' );
define( 'SECURE_AUTH_SALT', 'M[$scdOw}m=tU8!bkrH&EvE2:j);{^RY5JYxXx :]ZWhY%vXV_A/SCtaoxXMX@*#' );
define( 'LOGGED_IN_SALT',   '~#&$.nY|j0!o_|!*vx)nO] sBL6;<;:)5(cqR`,sF#.!eW^U?oB8:V=TF1?Mvm t' );
define( 'NONCE_SALT',       '_pK8$N-H6f9m;x`-?zH3/@M-sHC6k>]*e*xF3=ts;3&{0O1u[ESuc,ij2O FN[7.' );

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
