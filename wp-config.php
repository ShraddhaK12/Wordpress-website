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
define( 'DB_NAME', 'wp-project' );

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
define( 'AUTH_KEY',         '|gYe< *x%T9j!AyVR6>TP,q!}N4-wP!Pb~lX%J8:?}n,2z2=h5C,1N&_(NgIO9y`' );
define( 'SECURE_AUTH_KEY',  'LL,P<l|Mq9wtvnDDIn4LOGdlt|]V`iLVb4>U;Yr3`O>cG@ja<$flASy7J3|0V/7M' );
define( 'LOGGED_IN_KEY',    '$:kIe6oWvl.NhT|:LIymD/;wv|^6q},H8mv7Kqa!ksuvBtH1/C_i$exK366n-g2p' );
define( 'NONCE_KEY',        'X?_a=hmN|c!jQmz7.nr6[l6(BgJkM[ZPI4wXvj~:1mA,_$8*oj,HY-Zpo;wUI@S/' );
define( 'AUTH_SALT',        '<QWe^HE])DSFJ}eG*R&}.~C:kYVAD}5nV9I6?%3r)U: Dg14kU16U)--MGHO}xXh' );
define( 'SECURE_AUTH_SALT', 'j-cmw{IR00rXiEb(ugKJ`,iAW`Ox o*;ua;I|KG?BMg>6 LhSPOxRwg1>~Rr~~E&' );
define( 'LOGGED_IN_SALT',   'T]XQxn(Jv*.kC0%7hRXL4uvbiQ)f#n}8{>Y`-zP#S+s?fWF9@ib(2 r&xPx/]Wg,' );
define( 'NONCE_SALT',       'f8G$,Hn6:0Kz|l7CcB)kW6/(.X9D_-PXZr(8;CtEHfO=UsWhdX*@y4Zs2N[_#*lS' );

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
