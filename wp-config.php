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
define( 'DB_PASSWORD', 'Dev@#123q' );

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
define( 'AUTH_KEY',         'P`R|Dyke6i#`@B1w,)${bh,EZt10(,2M -<h$4+WbbgDWa~D^$YqpCjcgyYhC;>2' );
define( 'SECURE_AUTH_KEY',  's_7&RlyuLL3K&CfF_q9~6LQoZyg}i--q3~m%PIpW/s?JGZ]}NB615i}VVBQ49U%B' );
define( 'LOGGED_IN_KEY',    'B:f*aIC16j[#&^MJ?%_*g~n=xehjIj!JKa~#UTqT53R/8@y(!3<{dZbNliL+ynt%' );
define( 'NONCE_KEY',        'i/xpvThq66SQ7@EyC87$me^3<,kX`WT(giG>P+Bv@JBcpl&(_+y 72g6{i9200Js' );
define( 'AUTH_SALT',        'x,roI`:zB<A)kc2lI9?fq,eDOs7i_(Ds5vh_KgGe~l3/{%4-&U8yG8R#y!o86/Ob' );
define( 'SECURE_AUTH_SALT', 'Odu<Gok)+xP1GF/f8,VntCXR_+n%dqI9Y u5[u9 T&9-W]~JPKhr6@HRRjQv!c93' );
define( 'LOGGED_IN_SALT',   'UQaw9yaBD=/gT+:c1O&FcNgaFdmAwew1%Iu%t,jz+*;O%bA)l#dkrl[~)b_Fu+ic' );
define( 'NONCE_SALT',       '+Fkkgf0bd~O1U](|ts=}]# ^W]ZQbtN)F=IjujSYIHDftm2~Pv-6-6Lu:%LDgxW=' );

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
