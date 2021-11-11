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
define( 'DB_NAME', 'vino-web-DB' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '.PU,IH;Q3(5*%X,3^3f02O!ERi_a|Q;DC$[Wb]&~KL@amA)N][:4kCjFF(n!c$YK' );
define( 'SECURE_AUTH_KEY',  '$ft(<TA0ve7?>nJi1Z@kVs]^}9Hd!5u}whB}Fy:TCZU+<`vH|&-}N~!xm<BG//#M' );
define( 'LOGGED_IN_KEY',    ' @N$E^.)}5RS?k]AEoBc]&DAk_gq!usfH28jl7_23H=X]VSr%xuV~!/!wg a.ClD' );
define( 'NONCE_KEY',        'b5#iQcATL$c>Tq<JnFyE!}mU<&B=fFB8&O)#aU3$}/q:J~y4-m5HfVBj)]36{s[3' );
define( 'AUTH_SALT',        'H0I6IYcGX>om53)ohBOq2U*#}7qmTC9}$t8``d[WrU*#Kn9&xFO{E:bOCP3FMx]v' );
define( 'SECURE_AUTH_SALT', 'sn|`2_029`I,CDvLvg&K&F{*m=,qc7JxSH4=.M{<*I [@pm|]xM~:4[4}{sUcEdi' );
define( 'LOGGED_IN_SALT',   'VIzV}9L4Xff]NhIR7Yv#EY|PZk6DYMgD<j(.PkmMMXz+QmGL!=+Zt!Urio>w5N/b' );
define( 'NONCE_SALT',       '^Lm^V%_Q8L>Tqt9Mkz![zC FeVeIP.e-dQrf&$HSo$lEc[(k>M,[]3_3q~wvK>Hs' );

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
