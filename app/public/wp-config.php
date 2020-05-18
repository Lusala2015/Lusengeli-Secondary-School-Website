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
define('AUTH_KEY',         'JD0NVIHJBNROgYN76IR29lV5A1MR2Z2W/UIfRijwECxYLJYok2lqu8TnKbTWodamcskcFnSWIsyArJjfs945jg==');
define('SECURE_AUTH_KEY',  'UjRA2Lo7oQfEwKtO2qgNTNK+zgVdjdGgEvxdBu9y1B99hW1gXcgrZIDyS6rlPOQlZws/QUMRGE8+6oDBCC4lOg==');
define('LOGGED_IN_KEY',    'UAjlKcI/nnCMpPVGswifwZxHL6CpyAY8eJTN8MnyNe3HjPt4q2lcLxbcSSKLOtlVbqYDK/FC55FdwDTrzMRJVw==');
define('NONCE_KEY',        'KlUkWKH0NgM6EOz/R0JwSs5OB3jPhns4O26da76JNfYSZ32IMIXncA0JmHkwAF5lbm7mWxme2Bj8is8HCBMeVw==');
define('AUTH_SALT',        'keudCwMP+pigqy0yl4CVaH/QkfQe0jhchbq8P883dzgUi5l7pcpL5R5s18VQShASCPLssp7rmOzLt7T/jOEjRg==');
define('SECURE_AUTH_SALT', '2llhMFKZhO1bPAZYkbbpbCmBkLIDFc2FuKJSU+WPFWmFwEGN3X8Ykvh4vKT1iCCOF3UuTs/BH8jetfJJXlExSQ==');
define('LOGGED_IN_SALT',   '6YL6XeuSbDxfqAL6+8alQlK+bV+L4CmYYecXfxAdvNtI2LHJdZBD5nbGe3djClEY33kO5bA6RoAoNkOQFrL+pw==');
define('NONCE_SALT',       'YNUq3kfFRAfOhV/yXO0HpBRpmFUVsdStsBXRObrn8lTF3VKaTESUuvCM3R+HqdL/ZhAFvV0s7lrzi6SliFqzjA==');

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
