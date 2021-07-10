<?php

define( 'WP_CACHE', true ); // Added by WP Rocket

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

define( 'DB_NAME', "aidtes" );


/** MySQL database username */

define( 'DB_USER', "wordpres" );


/** MySQL database password */

define( 'DB_PASSWORD', "aYAAhLaQSK2dEVQ7" );


/** MySQL hostname */

define( 'DB_HOST', "localhost" );


/** Database Charset to use in creating database tables. */

define( 'DB_CHARSET', 'utf8' );


/** The Database Collate type. Don't change this if in doubt. */

define( 'DB_COLLATE', '' );


if ( !defined('WP_CLI') ) {

    define( 'WP_SITEURL', 'https://aidtes.com' );

    define( 'WP_HOME', 'https://aidtes.com' );

}




/**#@+

 * Authentication Unique Keys and Salts.

 *

 * Change these to different unique phrases!

 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}

 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.

 *

 * @since 2.6.0

 */

define( 'AUTH_KEY',         '1LL1nI2MUheIYBf8WiVU6NnzkDUpmX17fWICuTDo39ZWZcKpTHBWGWiwLfR25qkf' );

define( 'SECURE_AUTH_KEY',  'fjNKXLOVPSPdB0gkcejEyJGwbqg85Oscd2JNwLRyrNYlAV5qtyThWuiHKsjYIaRa' );

define( 'LOGGED_IN_KEY',    'QZAgWWTolIKgI7QopDNtDgsSTJebLTghJqZFUXd4SoH2K43KnKlPe3RLqqADTQD1' );

define( 'NONCE_KEY',        'N6ynWa7DMpNoqHKZBTdTMkt9gizFoVIQY9acnnI9gRZhBUtGwWOTikFKcJtul5Gh' );

define( 'AUTH_SALT',        'QExH9lQwn63jrVls0ohqm1fW8hfTozaBsiYi3BNzEnQfG3xYtHdn6IwNIldHRtTq' );

define( 'SECURE_AUTH_SALT', '0SfAwHk6p1q1CVPUj9MU8GJBkmaK1PX0fkovRmpY5LSN8iCeWfOFbZTFcqVfSEcB' );

define( 'LOGGED_IN_SALT',   'wKECHlu5yeASllLBmGo9a7oYRHFKwv60RleKuZqDuRWun6rIguIT6ZEg0mRnfhh3' );

define( 'NONCE_SALT',       'Y76R6VcGQrVxmqpbMsFtE0OUTsuvpMdkIOFyhq1EU3zSSaTzpiyyJ6sURBFRG5vm' );


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

 * visit the documentation.

 *

 * @link https://wordpress.org/support/article/debugging-in-wordpress/

 */

define( 'WP_DEBUG', false );


/* That's all, stop editing! Happy publishing. */


/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', __DIR__ . '/' );

}


/** Sets up WordPress vars and included files. */

require_once ABSPATH . 'wp-settings.php';

