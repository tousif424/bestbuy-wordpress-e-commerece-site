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
define( 'DB_NAME', 'bestbuy' );

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
define( 'AUTH_KEY',         ' *4bIa1a =!=kYzS)^l|lGC,yiI.Mvp6_i-fr9_]w`-Js;|VI}Ug[=ld2*ft9L2%' );
define( 'SECURE_AUTH_KEY',  ':28cG 5[Td}y?Uo%otE2S:V0a#%5$)U>H)8cuIh^pQYd9a%<Dx3zgH{b:LfN0)IV' );
define( 'LOGGED_IN_KEY',    'p:ZNdZ*~tc2FrAM;`zxO`[KnC6N;oYk.j`vuSFMnCoPJ[f&M@}k#Cc(3<cE8Ce-v' );
define( 'NONCE_KEY',        '^hL;{xV*g{r#TTnVLW#kjY>~G&5l~D]OuIu4rH-YS$kV}{<E%1g7W.v$qZrP7WDN' );
define( 'AUTH_SALT',        'f:GK9fbyV1>[W]1H#x6~dDrC=..%E<9Vy~1BO3V,hI6F anarD9GpI_HxUoM/i4#' );
define( 'SECURE_AUTH_SALT', '^3=2U0B2l5V)Z4.3S17u6>p/x3qQ0OqvGyLJ;#2Wm/*~:O;`9S7{]h4pt9M=)s9~' );
define( 'LOGGED_IN_SALT',   'qx+P72-YFHILJJMi{BmO9KWF{J#0<D,cuF-_%0Fuy>hT7$z4|h9||#,UV1iA=I24' );
define( 'NONCE_SALT',       'M^v*>tBE$M;cj*YVP+gnZx8K1bRN8LSRiEmutkcr>ClI$X`k*^B 17B&m,3v7}R>' );

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
