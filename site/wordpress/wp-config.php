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
define( 'DB_NAME', 'sample' );

/** Database username */
define( 'DB_USER', 'sampleuser' );

/** Database password */
define( 'DB_PASSWORD', 'samplepassword' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

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
define( 'AUTH_KEY',         'rdiZyq<v&C:~Zo//|+R|ul5W/LuX Qd>.le:)bN/tij1LP02PesqhIn?x&v~}VP.' );
define( 'SECURE_AUTH_KEY',  'Uue)*)inmk!;ql5G,4H})8A6dvZc0WR5VpIk|`gkBxC^Vr_&y<e+<ospdw`m{mZj' );
define( 'LOGGED_IN_KEY',    '/?M_LWdhcnE3{F:HU!>FAz(yvm^eNZZDyiFk=2uOmNgZy9ZF#Ax~Iw59}yBK6t/r' );
define( 'NONCE_KEY',        '?5M[}?!H0Q4A^q]30PQ$q[VXgx4 J{T?x2mMYY(ox`$H->D6zSF6sky].OkM nt2' );
define( 'AUTH_SALT',        ',0vIm#(8O>zO/PT.z<UvB7io4H9J|R+r_ZJOOS*~YKofxsT]BEB# Z`I9-R6!$x<' );
define( 'SECURE_AUTH_SALT', 'QBzgXU$H+YbW6a%jrhX<DP ewaDaL#]Oz0_`T^I0l`tWjo`H1H.hy(/L;#lwN0oq' );
define( 'LOGGED_IN_SALT',   '=xdX1&tcsl@T{dd4ru@3&-z<M;pmDP?f c;!hnap>{R.^v>-&,W=e<FHGVj#BwNj' );
define( 'NONCE_SALT',       'B<+ y oiq,)0)P58Gl^}sgSdFW{RL:=yPimP0T(qjk:o3rk)%d@s}]N@](Bl0PB5' );

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
