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
define('AUTH_KEY',         'SZWszOSCd99PppfVLCFb9Z6IZ+FfL3NUl0B6OYBLH+9lq15ksvHvYHceG8wz+E/YDf9XEPslv8/ZAy6L9afr+Q==');
define('SECURE_AUTH_KEY',  'B6SnWPCX4CE6L/0LdQ+JrcNn9v7at/Wx3CnPnQrGhc7gZn+8jZfIH5LzlP/uszCYaNL8oyXsSjegxg3M2ytXRg==');
define('LOGGED_IN_KEY',    '7eMJ6B4BQGbtlwmu+F3w8jaLJB4P7kvPS0x9AI4DlUVWm9pEWJu4GuVSlI9eKg28nph8n14lvyTsq65WVbDtSQ==');
define('NONCE_KEY',        'rM5/iLvdmu3JygHuIYNb5XNgwjckPYmkr6dXmLrs5aSAysUMTtKgqR4gsLNWZRY2OKuWt4Kz6RmcWChBRqvRVw==');
define('AUTH_SALT',        'Zdbq8ok3l0u2v3P8q0TmEoLpXhuwVmYJBo10xxxLjc8kKwyp6oqRLGaVSNpaH0PQATDwdfN9tYwFP7zgki6NZg==');
define('SECURE_AUTH_SALT', 'RL4liBoBWFI4053E1k5+As0faV0wJiPRMdtS24uu+RpmYWJcljZntVuWoB/4o22tXvpTjj31m13vhN5ufHFXBQ==');
define('LOGGED_IN_SALT',   'Gnl/Z8S8Hg5NmRX90gL1QDMYxhpTHQO+4gANNQIruOuXAtzlfn1twapcgf3PFUZ6dQXlxQ0FBeowZRe+RsbG2Q==');
define('NONCE_SALT',       'gvy+BylZK/lnCixIaOGxZUcQqw+LJeyoJednXWhh0kBDsB0FgdwB0mlrx8C93N4KSE+/Uk94RoEGxAePIjcVTA==');

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
