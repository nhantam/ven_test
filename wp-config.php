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
define( 'DB_NAME', 'wp_tour' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '-JJf3O9NYXE_k)PR]~--@him-=fm.ig% z;^TJF pITAIjqc+v]#n?ZfrvblR`06' );
define( 'SECURE_AUTH_KEY',  'zM>SP{9HaNCJG_s&(])VEAd6ga5KfqjH5We+85VL+1xg6#sX|P@CdfH6<QAc|l$H' );
define( 'LOGGED_IN_KEY',    'xaJH[X@2El 9+S{HLPV=WI*cC;qk2fzsfFCwju^6v$>e=x$==O45drssd-|vu@oI' );
define( 'NONCE_KEY',        '`MdOI-TI9eYI+Ux7KX@1/3W=qkxqHk%U1aqCLMPk;<g<pfk{P>X;r{Ym}X^nJ;w&' );
define( 'AUTH_SALT',        'RvpwR*i4gHFRkhLFB4]`F%h%h`BOE-[FLW+18|:>RXnJs*`c*O~B  0`~-?PU4.K' );
define( 'SECURE_AUTH_SALT', 'pW9xyQlLqrI2<DKZy#EG5fjwPHqqS|^M^r82i*=MEnl!:*1fDK(!GhxvfBLr[s{9' );
define( 'LOGGED_IN_SALT',   'D0afg9zRF}N/qLAs|y,byp>jhnBUX|@Ud2W~Dcers|9]^7W=(X/jRJ8(>#a}u9.%' );
define( 'NONCE_SALT',       '{Nno|_01=#Ip(cOe;{>7GNe!!Tlw P@fI?h|@*Pf XUpXd+RI/mkc(gq 1f!VV{r' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
