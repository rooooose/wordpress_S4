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
define( 'DB_NAME', 'wordpress_s4' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'f5Ds>[I3nh~kp9r|[K3GNW)<$yL-@l}T4#4mFUcl!{}k0sjEk2g]UIp*`FZr,+kG' );
define( 'SECURE_AUTH_KEY',  'IY`jIBckC&VUXll.LBW!,>}GR_jo>/spFV7ABFKiG=s9;+ii_QD71&s&V.UJ0G+^' );
define( 'LOGGED_IN_KEY',    '<qSF;!trz3BLa0G(7,gp:Bt*GuYr=7Cadzvd/MG47<A0qN|<,T~6S:ddop/10==#' );
define( 'NONCE_KEY',        'Nr^t_uD1zXl k/C]ZDo@*|,R*`O-K/lFje_?gHy,30p02-C3(o9r-$)<RHPB5Mo(' );
define( 'AUTH_SALT',        '64S^AnlWllb(696l1nsE5B2t^(ceK4Xit#IUZ#p7E8@Qsqaki@.bm?uKs]`V):pw' );
define( 'SECURE_AUTH_SALT', 'W~n+[r]oE9>^YP*+rW@!D_F83$ztAuv]Dm@t_yaZiF>.b%cAtf&/-eV[7GIt:Kxa' );
define( 'LOGGED_IN_SALT',   '8?(3JpUxmR-A[%w~DCBkr,IJ0L 6_rf:!ju-;ElCzr_0dU8F5Yi(m8}b[9h#:,>0' );
define( 'NONCE_SALT',       'M7#>`#7yVkNRA!=vw9Z&oe5B)M1dA7d44[[,?p>MJSQq H128aLo=KKMsu5,^!i(' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
