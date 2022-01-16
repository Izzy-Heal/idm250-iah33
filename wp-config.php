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
define( 'DB_NAME', 'izzyheal_idm250' );

/** MySQL database username */
define( 'DB_USER', 'izzyheal_iah' );

/** MySQL database password */
define( 'DB_PASSWORD', 'b1ackb3lt' );

/** MySQL hostname */
define( 'DB_HOST', '162.241.244.73' );

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
define( 'AUTH_KEY',         '.!yV]+9<>LzP>EBui]j7K/B/b9ED!4A^W+NigGLUM%n;-]ML xZ%#x0kfz}4/J[Z' );
define( 'SECURE_AUTH_KEY',  'Ei9h(q+N+yyq3Vb5Rd|)0!d8>0W(K^7DB]An2gm>U(|qUeh*:wn8EZ$/>UE554AD' );
define( 'LOGGED_IN_KEY',    'fs~.a?U9P}~.*gWV$Zt^udHI*xf_uN8Ww~SJa-WDt4QtJ[%wu8{?)b_<UdTSPa.O' );
define( 'NONCE_KEY',        'w^MMQN/KeoCofESTRm##laG)4}RBpXKzPbR,-<8+f%uLbfR>U4lEr4ot@|b]9)J9' );
define( 'AUTH_SALT',        'u-VWJdG!cP-F@in9j:u*?ukLgl;o<ivFxv!xoBY#R~R5OfCR[lt@R (qti+PkbXt' );
define( 'SECURE_AUTH_SALT', 'x,)Dg/s:0H?KUWX3Hm4x%ymYxe.%>xI7p)3pl:IH5iNT~{EUm+T8!L>;0><wU(d_' );
define( 'LOGGED_IN_SALT',   'n53<e1zJ-j#1XWUwS1qPeBNEF[a5MimQ}vI{PeN#k%w@TaNZ|$Ds^0>G.1KSH%b:' );
define( 'NONCE_SALT',       'g2DFRz8e3C4U$[9u[HLt;FU%%lPZ-$WzD8CM{}2O_N2z *c{$;w({GyFp{i4(j_F' );

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
