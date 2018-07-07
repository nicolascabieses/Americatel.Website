<?php
define('WP_AUTO_UPDATE_CORE', false);// This setting was defined by WordPress Toolkit to prevent WordPress auto-updates. Do not change it to avoid conflicts with the WordPress Toolkit auto-updates feature.
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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_5jl8v' );

/** MySQL database username */
define( 'DB_USER', 'wp_eg8su' );

/** MySQL database password */
define('DB_PASSWORD', '$rQt06c8JU');

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define('AUTH_KEY', '518OSAa7&@8]3(-im~T8c34d55y1z(M7r1*aeGt293CF&)0!rN@8V]Pc*s#9Y1*&');
define('SECURE_AUTH_KEY', 'Pp:|;#XXy976]U#3Spf+Knt-wnAI&RN!Up[6E+40Kpbj8Op1zWjQ#5Dzs8/Pf1Ua');
define('LOGGED_IN_KEY', 'ZgKd2@pKQ7:RrRO39|/86K[TG994]5(6;VT5MM+b7F-/aJ&40PYax5st-):8!3xh');
define('NONCE_KEY', 'atW|a[7+naJ)!W~gnk1)vWAq(49M*z_g*[Blfo4A8R3j@HOySb07DIABxG[&lK@v');
define('AUTH_SALT', '+E1tQ_6-8+5j#li&T8mUdE|Yn_Pop4QhPSKN[EU4eW4QHJr9(35fBw0|Sn/~/[u7');
define('SECURE_AUTH_SALT', 'h1E6I|07BlZ/|4H_Z4lA+EN1%sq2g!cmTr877(~e8JA[Oq10V9:X;0qd3Y%92IVQ');
define('LOGGED_IN_SALT', '0;:is~upb88PzVPC)@Cmd]0(n3HKH4]P623Uo;w;umD%#06]874kGCu:3TN3;o)U');
define('NONCE_SALT', '@8GB03a6+Xp7S4U059F~gy[r6wpT766@3D1D|8F&q127O1[9V03#Z2XyZye/|2L|');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '3KSnq_';


define('WP_ALLOW_MULTISITE', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
