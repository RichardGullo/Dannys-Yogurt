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
define('AUTH_KEY',         'S460zIGfyxM3fnWJpnMN8ZUc3heP3RH1FDQjlf3Fw/g7Vp+QeHiIK/A0VjcJa71dAElyM5SCafnUWZC719xycA==');
define('SECURE_AUTH_KEY',  '7dA1iXA1TQSWMI7PkNCTbBeRkb9pFoqm8aRFgopVleYL41rfmHd1wbW2KEb86jaoOQKa66xsCk/HPVzVmUBgmQ==');
define('LOGGED_IN_KEY',    'zwxP5bJ4bQuskyQiBAAyG6ktOX5CQhsvtwlbMYE8BjT1Ifzl2zb/8dxNKkoLPevJXC1C1MB1j+lGxeO3bsw3RA==');
define('NONCE_KEY',        'WwAOuIg9ljarD0HXcEliSgh6M9YiWCbXX0Su7FwVY2idoWutiX7ylQnCZrK13M2ils6F60dLofv6IPrP4O7Peg==');
define('AUTH_SALT',        'bOisnw0ut7CwOoyJxOFhFUlTfOWYzXY/SCLGRGAIZ23drMuLlfvNWeNpuFiVQvyx+LabkIzJWz46ZPU9xYubrw==');
define('SECURE_AUTH_SALT', 'sMuCJiif7PMjxvLKoetIM1fX5bb8jTi0OfKFQx6k/QjJK6FJIL7vYRIgfDdS/qPRQx3khLmDng+/2TAeLXLWwQ==');
define('LOGGED_IN_SALT',   '+R+TlaJExUzhg1IcoDC5A+19xKY5zGIe2HdTGCwpi96CXh71ZpJWj8+LmnQTKGm0o/gn2WZBOwfxw+huOvqoWQ==');
define('NONCE_SALT',       'zjkyy4KbXh8OyVSQ4/ww2HoVvObtLohAvCtH1jmgqEIVoITEj0Tef1vHFhzSVdqzx0qOOv7/DC1suFlaN9RIKQ==');

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
