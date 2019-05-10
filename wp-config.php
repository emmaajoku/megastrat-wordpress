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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress-project' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'OqwFkS1_P{=`|P0ZfNPh+a:,1VbJ{>f[.3V#W_UF!;#>1j-!PE3,,?wwK)aRh8.s' );
define( 'SECURE_AUTH_KEY',  'D|:>h7Q@0VJ_W11&jSrT&kuZMX26QyZb{]Jukha1<?ZZk)=?/r(?lW8Jv;Q[f%;X' );
define( 'LOGGED_IN_KEY',    'NG/2n_;TjvBhM~n0BMBEEZW>dxsBY&CgJic_! 4TcIEI4m:gy;W@`oRm$,gX|^tK' );
define( 'NONCE_KEY',        'JY:r|@s(QU-UAvW&Ws30U4VoN7j1K`b JHMnGvZ<5r:c2.5oEsI,3],e*9,za4vz' );
define( 'AUTH_SALT',        'TK*B}Xh7|d$~aSn+L|oK!8TJzHyAj_l-u]:zE1%$9r-9H,l(8<m4TCNzMC7x1@Ab' );
define( 'SECURE_AUTH_SALT', '6XiY[)&b#3^U~-_D!C~,/g~AlqlP9P{f@g1c!x:OAhX$4a5hs51daG:oXQ)E-Qv%' );
define( 'LOGGED_IN_SALT',   'RC{dVP9^4mh<+:OD<?Z~|`f4QG>xOPG:=$se#naRCWD.<81u(Mh#[/G| NfXg16y' );
define( 'NONCE_SALT',       '>K+R8BsC;3%nKDv@~rQe80~lq5wv]+M<jQ@8o}Qjd@U:yu{iRHyCUzFFAAv?7BZC' );

define('upload_max_filesize', '200');

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
