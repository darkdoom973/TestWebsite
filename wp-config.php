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
define( 'DB_NAME', 'TestWebsite_db' );

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
define( 'AUTH_KEY',         '2>&(D!6,E%qY>QamuAPO#yd?5Q9(3o0ZA^/f%GDw&+hnY<Z.Cr%heq5.`}$bP/0+' );
define( 'SECURE_AUTH_KEY',  'ASM5C,bWzxF42 H]B:+QeYLMx8f~/(nnKT~tptcb5i74 rL?PFF{*OIN%;jzjJ+1' );
define( 'LOGGED_IN_KEY',    '.xxJ/ufthtAvubmO=S7>l63OY#8%MW*XQcVSCi9sG93HKwK^0|(zZB@..z&a+J-9' );
define( 'NONCE_KEY',        'M!+4,>w:X>q6WtIUcs2EB1*js-/KHfbhLW-iEAg;!Il6KJcMm+;@Q^@ .>Zf*_zf' );
define( 'AUTH_SALT',        '+RJ!<N5`*:_1f^L{ty#f9g@b-;Jtu*Jd;5FOi&E<tSe$4};-8@n2r_L%fHiTm63k' );
define( 'SECURE_AUTH_SALT', '4D}`#e%e#5!0}M*i[bNaPa=TcYegNcbygh[q^J?|DOLaU)>tncmo_%iuU<4vz~3l' );
define( 'LOGGED_IN_SALT',   '_ps 3+d]g]ZlfE5Po7{3)=qfhj2o}Wh{k$lB.> v5S]~QzIh$T~Wm^b$Vs;ahT/y' );
define( 'NONCE_SALT',       '9WM $x6?I0]ok{5o@+=)SnCp525/?h%nA^MF~q0Hd[pEWS2+Faiv@-J/XuDf6Smv' );

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
