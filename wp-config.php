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
define( 'DB_NAME', 'woess');

/** MySQL database username */
define( 'DB_USER', 'ro');

/** MySQL database password */
define( 'DB_PASSWORD', 'oot');

/** MySQL hostname */
define( 'DB_HOST', '127.0.');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '412e7bb42fb0ed3a8272a1060bd1240e5ecb56a4');
define( 'SECURE_AUTH_KEY',  'f9777bbbd6846469debf0ee78b9b631952447913');
define( 'LOGGED_IN_KEY',    '0ef4eddb5f2ec07324ccbb6051bf051ce8047c0e');
define( 'NONCE_KEY',        '59b24ae506afe57b42e4d75c57101cfb3991d52f');
define( 'AUTH_SALT',        'b19260b2cd4013febc40d06fb98c661fac8c4386');
define( 'SECURE_AUTH_SALT', '35b1ce73b6cdd78538240afbf948822ebd118ba0');
define( 'LOGGED_IN_SALT',   'd2ca120d9c5f37ff3fef382405926447032f5da9');
define( 'NONCE_SALT',       'b525ea83edae039bdbeb0d3e8498b4f207240115');

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

// If we're behind a proxy server and using HTTPS, we need to alert Wordpress of that fact
// see also http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}

define( 'WP_HOME', 'http://exa,mpks' );
define( 'WP_SITEURL', 'http://19sss.68.99.204:40023' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
