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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define('AUTH_KEY',         'yS904B6GnBJlNb9FdW/GdrPfF3qCg9162jiva0yOQDFbHdO2cmNfzmixCLgoZuVWUKacc+iVLAls/4aFDpO+Kw==');
define('SECURE_AUTH_KEY',  'ksF5d0WQpMa79ccOWduiOY8ca4EkATyPLz7duMXplBxXj0ShrRjddzdnpYkRn79dIdfHb4lceAYbso1fu0SvqQ==');
define('LOGGED_IN_KEY',    '1+f/sKTrZHyzct1DoghITpY3A2O74Lvl4ThmmynenrtrWAY3TdCZ3LqEn3CZGOjxKJB9Dw9PiZ4Lx6hGuqeAVg==');
define('NONCE_KEY',        'X9xjpbE24PB48tYepOvY9FpLJOk/EgVj0bOJ+I4qqymDH9DAfnhELIFmyKKKTttE4gomzHII7UO37oSMUoBmow==');
define('AUTH_SALT',        '5fx+LNsSjgeOcGhdDn7hsK7SGw7DFvGd6AuFXUk7oc3G5k61YCaFlmo96KBWw7nr+TUhZDPkf+k5N2Mh2aD7yg==');
define('SECURE_AUTH_SALT', 'Lnoj8o9aNMDd0G0T/vkVYK3WA+aM16kxZD42PvMVKp3QJrEVKDqVB1nvHp9kGuNjco8e3MwPymGvEWO+E3d+4g==');
define('LOGGED_IN_SALT',   'VavVAxNlzW+rB60C0jUWj79N2VvtvPhjoU4w1O2QUtRt4HDvExbGzQ+S81P/13WlB6KG5eHCN4hVdUah+osILQ==');
define('NONCE_SALT',       'qt0SZelu2BOzKdFb+vu18G3Qa1NZKoo9cZj0YLMP5F29tEohOylNlTPTIpTX00lRfJfORZl8nhI8XVjSOJDpRw==');

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
