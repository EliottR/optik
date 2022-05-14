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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'optic' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '&sT12IU)H!q|08V*VV=#)r-->|W_<w^|YHb0PrL3kjQm.n}Ku5Shz{95.tCu)7<t' );
define( 'SECURE_AUTH_KEY',  'WZ{[GBs4-1cf2hew E cUcPFN*co>{b*)$a_?V]rk8n3lra$.e>Dt#z?=2{X(|a;' );
define( 'LOGGED_IN_KEY',    ')-6z~P|x%e>rn@zZx1hl9l3c-3Oiw9ssC%kw}Y%,Zi.&CXTRqiu&z,An1#B.c]RY' );
define( 'NONCE_KEY',        'h1]25rbQLbAeyXl+U>!.m-vhcn^f~[VGkkN0tPO|$Xee2iNP7*~q/8cEY%o([m)`' );
define( 'AUTH_SALT',        '9vE+~@L%W:6JE,3aR-&J]i,SgX|9qF^^!m]p.uSA:&a<q]X_OgQT=@OGKvwo7 7H' );
define( 'SECURE_AUTH_SALT', 'u%H@v zTg1?xB1W~}_WUD7V*~hR.)tzjS]]I&7im8]3Q:Hy&)#t_$h=&$VhuJ<k*' );
define( 'LOGGED_IN_SALT',   '.Wk;;lG&OQQM0&K5~3redq.S}5sZ4PPBTX2Ze7Vc092mZ0),]BBGuolKtN<atWMl' );
define( 'NONCE_SALT',       'y^n,M>L LqR4vC>_d Ews6cv6cSycf3xT#zR]JddTv3q|1BLg[Th>#4(58f*EXdZ' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'optic';

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
