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
define( 'DB_NAME', 'ana_campos_db' );

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
define( 'AUTH_KEY',         't6Zl]IS^ZGp(BK:AmfealzRbNiZk9F~y 7_SIn>oD.=qqcO=Xh5QcNUnI;WZpT*o' );
define( 'SECURE_AUTH_KEY',  ']Ide[3b|LDwd%3!t$~!. !*@Q,@.zB`P/)}?r1f@Z$7V:N@sou,`!_(@EQm%O{{X' );
define( 'LOGGED_IN_KEY',    ')Fp>G1!$V.]N~|!mSXo =].Z%{m@ajB&kp8D2*C$a! !rwZuPE`EYy3}{cuGRDYP' );
define( 'NONCE_KEY',        'wKA?A~/Y~>]j41)md%D!1Exxh&z;,Q u-U~3PBV$_zrIJQCCGGDbKpPTp/j-Y:H)' );
define( 'AUTH_SALT',        'P=V/^-ZSjv=D+w/h[lr78COw^0nb|sqdZg#<mu$W{ZrZu0K4Mb(O=}z)qaLb$?tX' );
define( 'SECURE_AUTH_SALT', '7A`dqy5RrLf`%@|e+5UICqQ)>cUVZgizS)9|}g;hj+{P<Fmu&c9G*DU)`H1O[wVD' );
define( 'LOGGED_IN_SALT',   '):)!=H,4^z[N:~ZhIg>v9vAm-Cizml!k6^`zDge8`+J~9XO*P3FPegbvpyDeEYs@' );
define( 'NONCE_SALT',       'e%3I.+!E;N$x<dZ<3L{93Q+-_w`%Z!mD52c?}OlaCpQ5w`-,7>w/NUCK]-n=J.^5' );

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
