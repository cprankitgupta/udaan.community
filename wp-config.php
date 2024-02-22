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
define( 'DB_NAME', 'udaan.community' );

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
define( 'AUTH_KEY',         '|Qwl%&?~DuD3uo8L7SW<<N@!+~~>cf5Lc2;Y&;pD%aiGkp)8L12iu~K,S>bZ)#aY' );
define( 'SECURE_AUTH_KEY',  'Swp05stBvG4DF9jegp=nb!;,4@bRArHRm{JkFW:l2(Wqj?8Px1ZR5DKtgJ&^greI' );
define( 'LOGGED_IN_KEY',    '#52SBgfVZ-i_U-KlW`%;/)=noB!;:exdh/s$^_uJ1JV4=}wq3|YFP E:LJipJr<$' );
define( 'NONCE_KEY',        ')JXf@8U~8N}1moRPnP={H?#+e?k*?Q?m`6bZ[G&lsc j gu{0_&crkm}M.g|r1ff' );
define( 'AUTH_SALT',        'YJ+?MK3|<c,O%kt]9cj_zOMQ([Btubt18oY}DkvO6.jgn@-GP+F~&x:W@Y|#gr5d' );
define( 'SECURE_AUTH_SALT', '4^`}lSI<|W#F~>-f^ fq38I66 <xlyOg .M|-Heu@&GoRpMfB.cbA?^!-6TA~2&;' );
define( 'LOGGED_IN_SALT',   'X)EZdBL9df%ME>&k _L,I8={Dl@nPZ5DTW^VThVk<BC+YbESj}Cad{rOpTGRE;~,' );
define( 'NONCE_SALT',       ']6DwIS2if3m&Rr`/46;,1nX^l6~-erS2!v{~]P8R0>x+[HG</*XK&s/ZG}NM!Eqk' );

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
