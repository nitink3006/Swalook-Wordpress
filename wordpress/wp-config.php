<?php
define( 'WP_CACHE', true );
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'swalooki_wp_bxojx' );

/** Database username */
define( 'DB_USER', 'swalooki_nitin' );

/** Database password */
define( 'DB_PASSWORD', 'nitin@swalook.in' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY', '37|3]@4gBbnJx3/:i9Ys7/wSq;:W:3f4aD9#Z5zgS|S1oZp*xYR;%2cw4k%8Z|*g');
define('SECURE_AUTH_KEY', '8%rfE0M0#tArDfN8iq/*_~URRI1U19f9L(g7B0daLy#AGqmRr(|GWR0Mj35(63Wj');
define('LOGGED_IN_KEY', 'UQ-|cKCl!n~Y5BAGGOHM4K64q9/fP##0m1qcPgFS(xF7Ld&))v%)v5d:!Ox_8_Y|');
define('NONCE_KEY', 'u95!*Z4]-E9Tm4@l4C9@m~#7InO54nI_Js5/@:1Bm[Myafh)e02@88Y_2Bcn0dtA');
define('AUTH_SALT', 'X4a7e7uwQEY6z+Y]/k667GfA-1DXH#X;2hh6)O+n-Rh1p%r5SVa6X47h-|*_wS*Q');
define('SECURE_AUTH_SALT', 'Fe9qhSP]64XLZ~)b4d+0Q|F4b_Dn85KhcUFj|~d-]C1c8Gbd*s[W2AOAcErpXJNJ');
define('LOGGED_IN_SALT', ']897f3fube6jI5(8jq2:d&_F5AVInZQs:eV8%Vz45W0pr:#QXb+w(]|[N0mpiEVi');
define('NONCE_SALT', ']:!w*T3C_m13X4G_~9|Pfr%j~QGSvn&l!o9NE#3Pb7]g)A|8SV4l7l5~vR13|7Hz');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'OBbhm_';


/* Add any custom values between this line and the "stop editing" line. */

define('WP_ALLOW_MULTISITE', true);
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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
	
	
}

define('WP_HOME','https://swalook.in');
define('WP_SITEURL','https://swalook.in');

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
