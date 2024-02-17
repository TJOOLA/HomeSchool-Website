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
define( 'DB_NAME', 'HomeSchool-Website' );

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
define( 'AUTH_KEY',         'NDjUHGrBWmLsZObe2uem}_U53*WHFGBn~+H:7&sZ*u{@ 0CHS1ZrE;[/RpCxpU4q' );
define( 'SECURE_AUTH_KEY',  'W|n3r,{whM:*_=)IlD~O0>;h(WgT)&,Ib7)pBu(9DeDR>eS=w//V]}D*c~1z`LH6' );
define( 'LOGGED_IN_KEY',    'gf3VjQa|[9P1&J2j*#{%Rh)Z2@,*2%m7?iD]w>K)!oP8+@>LcI,x9v.`+dKVN,x<' );
define( 'NONCE_KEY',        'fLYFRl1/rnU{!V!gQ+vL/s@8Xs<GPBe&`z)L1XaMbqhs,]il@8o*148Isvcf~y{J' );
define( 'AUTH_SALT',        'dik[$p{RgrN!X9Fg&)i%[--O8hv,!~++3o(|[;eVyY>v_IIG{Gd,ntW<CibgAsRt' );
define( 'SECURE_AUTH_SALT', '<ss+LdbW_.P[ACXN>.,P-ay$v:^Y.If@{BNu^ldvh^s7}[%:rAjmz2T$C`n(Dw6D' );
define( 'LOGGED_IN_SALT',   '>uCN3Ljk-`>0dQ,mh5?-,9rxNJi`aRC0| ,+/nCu|%Srq2T]!JjpBhC(n5O.[-*S' );
define( 'NONCE_SALT',       ']a|Q%2le>GwX-Vl|.Tg[W}0}KXd4{kdWRK3F}ruk+|aJ$uN|B/1by#7/g3Xa!B#a' );

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
