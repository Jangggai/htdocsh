<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_db' );

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
define( 'AUTH_KEY',         'fVP#`_VN.TYOk<HPI4fOHT8.O]o=Om&KF;`;hi0XW5ru~e%/U5E_j5r0]vt*J3YR' );
define( 'SECURE_AUTH_KEY',  '.k-ool@?-`<&51V>3#(fLR78l3^S)WX^N-^`cj{?}0uw/Z@wZYcmv&?p-uw[o?mK' );
define( 'LOGGED_IN_KEY',    'NXt(-}MMto82K7U,10t[70wSF&~&9RSRr*b}v|RW?YpuJx.HSHv<pvzB5yta4a5H' );
define( 'NONCE_KEY',        'Dse/P+deA[|;{rX,MYC;5Lto@LX{52ZQ8FcwQq?;D-H:l7e01hRHpU_5W%aYsc7+' );
define( 'AUTH_SALT',        'np]}CHHpq.p9f#SU!|$+BAU80a{;w0mJ#x(z<)GnLdOY8Juw5|&~bjGYb6a`qq)J' );
define( 'SECURE_AUTH_SALT', 'u>U5{2=P>F=6M*]lW]?M>i^NRTVE+}-<Qk)yDC`5+/$,:(66*Mbaps|[#av)n={1' );
define( 'LOGGED_IN_SALT',   'XwAGbKT++BhQea)/:THodwgCn!L*!Y2}KSQU`{Xud+)pp;h?7aVXm,YxJN{ c1/`' );
define( 'NONCE_SALT',       '}cjJ|OIin(ciNK{IN%MJ!2rBrxTwU/`?!/ -__`0H_:Oo:Ji=~kAn?Nl;tyc_rhf' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
