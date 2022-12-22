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
define( 'DB_NAME', 'morgane-marechal_wp_f7zxj' );

/** MySQL database username */
define( 'DB_USER', 'wp_gxi3c' );

/** MySQL database password */
define( 'DB_PASSWORD', 'a#5KfUdwf1q_Rk7d' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '9-7w]7F-Kq_QeJL2_N~K]nG*:t*/dhX*lCnb][CW]EZLii]Pm@W/H3u]e*30X6#|');
define('SECURE_AUTH_KEY', 'rzH//ljyn|@d]hw!w9|;@vUbikb]G!0_cp3-19815~i6A9mbjA8Ma%Y~UN;Fr3O:');
define('LOGGED_IN_KEY', '270sa5a7*@v+Zg-:d_3(a2tiq[ARpa[(-T&v!A3c#u8_uk((AUB!2T3wZtG5CN|&');
define('NONCE_KEY', '2&Y|;H9I!23]t-L&_Y2br)W7()BE7+o#+S]M&EVRu*o8f8[3]U(2D|([sKm~(i-;');
define('AUTH_SALT', 'F2N@7328#:+d];#PRrr5YF[@#!7R&g(i)4T+%wqI9_BoELF6lKZZ@oMRMjI56r5/');
define('SECURE_AUTH_SALT', 'ko4[~T1o-WvFn6|47tcWcCo&&E59j8UP~7g16|5Gx4R;NZ;EO~G1CZ/pzoH1FT~8');
define('LOGGED_IN_SALT', '6~2ojief2!4o#rkLmU5#b)Eg+0bpG@t@:9Aq1bpm4f)::U_i9ZN5&rO6W1910##+');
define('NONCE_SALT', 'BGN+eS~e0ez@8)(B]L22:N![N##VDYMY16u;zfd~PnethF!7+|8QdC23UZ)+r25b');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'zzQjTEM_';


define('WP_ALLOW_MULTISITE', true);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
