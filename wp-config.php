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
define( 'DB_NAME', 'city-and-people' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'B/01iJ#ZF5NorC]$I5?^eNtbS:Rh4VH>ZIak@p0uzzUb^T[Skt)`V6LS!];)YP_#' );
define( 'SECURE_AUTH_KEY',   '|39rn><b%~%mk4k:9rD%IQRqwH/2gAvJ8z?K9_nV3J)3`bL{j2bC^4]Nabj<THIq' );
define( 'LOGGED_IN_KEY',     '{!JmU$4KZ2^+j69d0{cyffQoC,NrPbBAJH]1`OF2PK0KY,/JeY!iM1hZ#3z}T6FJ' );
define( 'NONCE_KEY',         'Ore<#Gw{h#Emb@)Bq/E6LoJ5:z&;wOt-Er~XKD7Hl?J!S_3x/0V9_%B`bb>.!qBd' );
define( 'AUTH_SALT',         'BYzFkHFc0NI>z FP$oQ_LJI$][/|@.h^#29ip2$=10S5^u)WhoMTx~i.g}w#.|;3' );
define( 'SECURE_AUTH_SALT',  ',z]-N*`AO 8rP7qor*0Qsrmiy{-_*37bE VR_<D)*tE,9)BMJ]Su*=kk[QMeU!_0' );
define( 'LOGGED_IN_SALT',    '2-)-BEzsLPWcg&bmGG@JEn4MWvHC/W`q{%7}S*XWj28[3e?u2%fu(C%p(u(.@@D6' );
define( 'NONCE_SALT',        '.UPchC:q9G&_5Qo`YK7wsm| CPz}w&.!davU}Tg2d]8W$-leJHRBf.-2$IZF-.fC' );
define( 'WP_CACHE_KEY_SALT', '8bc!b4z-(zVF*-^T~vo~x4k&v$ zSd?(Bv#IDGS3hZs5I.B<(8H5,s ZI&qKurE.' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
