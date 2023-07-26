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
define( 'DB_NAME', 'wp_digevo_frank' );

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
define( 'AUTH_KEY',         't^>j7mzYwWBdM8&#.9wPIy1VT>`z$:?*:XW|N#{->RV+9pksDrHmbbH@$~wP~0W-' );
define( 'SECURE_AUTH_KEY',  'HUSt2baYB+}#Rz*LYyc:z)*C3r+FyF=8SXCm48J3su)I@Qc?m%B<U^}LqM(D1XVA' );
define( 'LOGGED_IN_KEY',    '1+~Ybx,_Mc^O[?jGd-ikYKRlRA>0*n4jP/uLJ4F[HByKhuH%LH{x5TOI#$~#H:p-' );
define( 'NONCE_KEY',        'R2w@6MJ%)l4JiE8`^VO2:jfYg :P3TZfP+0xe!%.v&/?) <H[|*RR7*GTrdM&)cl' );
define( 'AUTH_SALT',        'ML<s&xQ}<sC]hcV3z]jU|!6$bU~x3I.%}G_|o: ,!D%7a6YMw9EX-Ibdd{`lA(wC' );
define( 'SECURE_AUTH_SALT', 'i`X+Px}K,l!R8~VI)cdp~*B6r4nREr<Am{xAy?;Mi^qTiG*f|p^/?L2.T#maU:.,' );
define( 'LOGGED_IN_SALT',   '|3;[A`7Tx{p_n~RG*,Ws_*JE&2d#[^N*&W;26<<ahfT!,tZ+S^RaPQ3!/<bPNvlZ' );
define( 'NONCE_SALT',       'fYZG-?- eB<[Bku-.w4lh]BI`OxWBB02<?#Y++@hS;Ubf:]QSYQo*/2unz3KctV;' );

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
