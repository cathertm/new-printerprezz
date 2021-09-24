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
define('AUTH_KEY',         'JAOmQ3z9gQOt2WO3wYaMsT1OXXvLPpoq2Ez7J2ASChNW2nziNK2uVCyZDSNHNpLea3ICc3d4DOrk01qucMuFTA==');
define('SECURE_AUTH_KEY',  'UEBLdRGDaHoDGCbACVYW/UFfsI5LHbopWnT0qcPLABUasttelEAi+U1/tJDqsTJOn4N9w0vi/guRsPwx04gh0w==');
define('LOGGED_IN_KEY',    'wUg5fHafNB89AoFb7ARYRuqZLC13RMORaLLq9bXipXvCH1MWEfYH7xwA9ICVvYW4USahbe8F4YMmGmm9l9xibw==');
define('NONCE_KEY',        'ZFngEw5QDciOX7r5HU7XZo7tbhBVJe578sJY0XIwSepVBEyXFLW+NTajC9sERuCO4lKCpsO4qlL+zbVuXnJy7g==');
define('AUTH_SALT',        '88OyMxw2f089YFvdXpyT5ERHVNrJEnHwa+e7DnEo3IgLZv2/VsCSI2QoMRTFmktSZ/jKqKpXGjSMgS0f9wO7lQ==');
define('SECURE_AUTH_SALT', 'P+3FXKiZ0VQJJ5uedi3Sod7lZN1Ir6hk/QIWzzaL0Psoo76aoKTX0AbtqGWzRGuQ45KJZKRYrlbULj8TaOGNLQ==');
define('LOGGED_IN_SALT',   '2ifg0LZXTmf+zemNIyQ1D1Kyd9smLtI/4cHmD7KHgw16qZEzAXd6G7E3zyBElU69JREJ8+lWZ7UjK+b157hm2g==');
define('NONCE_SALT',       'oHkMSI8OWaL8H6o10puTPOoeXqVZdnu3p39czKQcmvgABWQI/EX79ulImewqHPaIvitIxFC9rv2eTLnohDXFaQ==');

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
