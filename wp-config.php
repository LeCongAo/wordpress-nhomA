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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '_iok|n,G %{9<i:8|v/J-iiQ[CVN2f<He{N`qPN@3CCml)/3{L0xr(TA0d8IKMyl' );
define( 'SECURE_AUTH_KEY',  'ts8B3{9@- Je-hgCHdJrF;L3|$g.E~7dV!newT<,5AQ3p7mYx^vm=sX[-~yWm,?h' );
define( 'LOGGED_IN_KEY',    'I<P47K8Bj+^K7tl3fF`u(~Q33Z7o+lFt1%ZyK&,G%$-S7SO9x7xcepi2I,rX 9A~' );
define( 'NONCE_KEY',        'LF.~<]%^))Ff<4] ZF%96w!:}E78/;;D|d rA!no8NH~#ut5!zhNleqp>mvM3#4u' );
define( 'AUTH_SALT',        '{|NwY0=`%*A=BEq@^OqogX^WFPVFZu<[Got-1A@R@x8Z[Z8|6G&6%c )$.i>dQ>r' );
define( 'SECURE_AUTH_SALT', ';,O/}o]d6Ut]+JE7zqKZmYRzP=@5t:w=T4rdWtKlI $D b9%&q4K!3Nc>K3y$@5u' );
define( 'LOGGED_IN_SALT',   'KX_Nc+cfe!3O]2t.jat}I0V_S5sF,?9F,/Cw:qU zNGY~A-#K%$zLuK6>AzB^7?<' );
define( 'NONCE_SALT',       'Y;?<aX_0Snb@uB=8o6Z[84=:]T+&cCD2 /IYXM|R&CXp&M6%,U6 1RC}Xq&CYM9r' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
