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
define( 'DB_NAME', 'swalooki_wp_xhqpz' );

/** Database username */
define( 'DB_USER', 'swalooki_wp_sd7wx' );

/** Database password */
define( 'DB_PASSWORD', '%5M*v07ylDuLlXqy' );

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
define('AUTH_KEY', ';305i/|/0@~-+|qJY5161:53;ZNuizH;AIMl6OT7jt@9x2Qd19i+H5SN:Pz(WRx7');
define('SECURE_AUTH_KEY', '28I(AQ4|5tK_2pbr!2P%U0Z2e2%v!:b3OV@8w53Dcr0&z@~)yumm7&T52zK03rdY');
define('LOGGED_IN_KEY', ']9sm0j91h!Dc&-]N3_P0I2BdNuB82-+N0o&Ze7HbA3#9|na+H]26VIp*jI3ccb0*');
define('NONCE_KEY', '7[dQ6GOpyORJn_-NlM!;@C3yl!Yx58rFR0m6o&s!0_:c]]%5U]T~vE))(QP35v70');
define('AUTH_SALT', 's_750+_GO8@MtSVh)s2wi_XKmd~n!Z88WDKm;Ki0cr/lnNqK&lDU1Y1-m9FAOV_/');
define('SECURE_AUTH_SALT', 'IxRil+v&8C/2+9(+T)nP*I4e)a58D[DIwg22[&n])Y0m!SWLpZf|1m3S]2h;tuI@');
define('LOGGED_IN_SALT', 'a8&(-9Jlnok)Gg@zqCutYVnB68@r8ELPR*bcZba3!!;jUs@P(d1K8e%IkB3]SJr&');
define('NONCE_SALT', 'j7A!j6~_-7k):Y1/AlgQT;ISW_p(;5:88niT3nw+v67m;A:AV+-%98:48zyoF0TG');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'H8sXvWE_';


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

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
