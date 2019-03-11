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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'IPzuJzaeBT5PKal+YHnGbv1rEdUafXMH8J/76QH2MZVC3EZJceqotkNhVxpzfC1bqMyNMmenvXT3XYx9++M4bA==');
define('SECURE_AUTH_KEY',  '28WbXJlbyJnDN9TWWcGhrPmTyRtzMcwWfcYUQr9QxRV2XgYIKuhQb9jFbLeFmHaudySngnVPW3KdqyAWCXeJpQ==');
define('LOGGED_IN_KEY',    'FEwsLM7FLFImFlL80lHeAEUN8WM49l+t16TkKCcL3Kc2z5xr/4gQe6imhNRr7sWZYdFWoe9kqVEb8giGxE3+NQ==');
define('NONCE_KEY',        'vgQOfcl6XFc77fNw0tszJeg8LXMVIFXuZVppQsCS51bIVHBPxrj5uFRxCsm8oGPKhLWrEC7G0G+X6/bMpW6bWg==');
define('AUTH_SALT',        '4Nzu6kYC1u/qbM1skccJRbCyQAdqMa+0bswUEdsC78MyrdJ+96a++IdqzZmrmo9ZMbg3uVhSnxhOuLEqpQQmvw==');
define('SECURE_AUTH_SALT', 'Wqvv3kKgxgJOqw+tPTQ8JTW8Xdh/e4zHnIsvmepg7wQ0kStDyWHBhQJV6vtT1Z/VIRCsUmEV62mQCOu21wpJPg==');
define('LOGGED_IN_SALT',   'JE8izaFEpzhYuWL04LSQV2graR3bDoQD/xQMxgV1L3aEqyRW0rP1f+iiEjZ6OZrMWIksQ0vIrW1rVjA/FAHa3g==');
define('NONCE_SALT',       'yJYMELQ9ETodlVO7dm2lVDepRafR/7lWuwjkWrfkk71bS4jjqoBWUXUNdMWM4eQcDvdiaBlk3tcBIhdu5Anppg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
