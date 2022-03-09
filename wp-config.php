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
define( 'DB_NAME', 'wp_seminario_em' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'rqBuS91-aNPrSv}hHS;W^uDX4~]`f8{2=?lz-G7iEh?6<z/}:PwvqLsqpXFAqtrT' );
define( 'SECURE_AUTH_KEY',  'JGKDoqhUo?[^]P${jQv(U1sCFsJ%pii2tO.NZ[{n?US>RnXEMElD=eq^ ~7d*y`<' );
define( 'LOGGED_IN_KEY',    'P!!p{}I5ph@QEsl^2RfP3&I3aqDn)Wk>iGxZ0kAlq<#RLI&m@QKPfbw?>ypQ3dY:' );
define( 'NONCE_KEY',        '*V#ExT?Qg<G{A#<**Z*4)nSr&jk3gI`Bu5n[^][:L!HKQ]Q{ORm3A]}fKmu$gdk4' );
define( 'AUTH_SALT',        '^J/Rx<%|rQuQfmwU3(x^98_X&q)GB0Z&qXjD|+cM55iL&z.S17{BKK;SstjS*$,f' );
define( 'SECURE_AUTH_SALT', 'b{_(Y$_yd03ZmPu>p9XVG1af#5p?78:h2r@dI$TFIG:D59QR-&3+T@Bp6<E!LmJ$' );
define( 'LOGGED_IN_SALT',   'KXQ8P(a(:j?H*oyE0| q7$ek1oLu.;t%r [L]0n^jCh5I2zzy%xOtuB-d .5gS$ ' );
define( 'NONCE_SALT',       'h <jNm[H*pXHj}+y>x}CyLK]9gSq/vpeZW69K|2Mgc3)=q{|o&4eS/ Gu#@B,EQm' );

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
