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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'word-press' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         '1EyiX0nmEPBlhpZemAPlUITRlEsq7YT7aANYtEZ6EjLFBnePUfG0UNcHmxXFrQ7v' );
define( 'SECURE_AUTH_KEY',  'MSERVuwG2kCKdiCjFR68TbAwO3eJdbI0yXECevL2hQzQtHgaBy1EvQ4fOM6LRrUr' );
define( 'LOGGED_IN_KEY',    'Xmf6jxDZnlbPv3OxqoPS636U8Pb4JySp67DrtvSFQAuaptEduI17L1P5COrReimq' );
define( 'NONCE_KEY',        'FWFvtA6TExp3TuXmPRZULLBRfVocWmn2Dv64rshnspgcrgVikk3ExjiVAbkohso6' );
define( 'AUTH_SALT',        'UDS9pDRmPSkonF6NUexeWk8mdmTcRBdWdaZq9oX88jTWz47q6n6fNNuNJULmZTZr' );
define( 'SECURE_AUTH_SALT', 'fN8XyCbsabpvauV8kPLFzwprHbIW9t432hwm10cfMh6oV9TUFX6iNnJJBV3GLvKF' );
define( 'LOGGED_IN_SALT',   'MvlsQbwywrrheED9SS19KU53vddGE3gHwPMTUANWxO5y9hZXSPInrI09OnR4CAbM' );
define( 'NONCE_SALT',       'bVw4nKwFvM4nLxzXAIM4GxUY5AKlxdtSyY5xAeH2nihdwumXw91r7lV9uWvGSdpA' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
