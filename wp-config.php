<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'jarkgazt_wp530');

/** MySQL database username */
define('DB_USER', 'jarkgazt_wp530');

/** MySQL database password */
define('DB_PASSWORD', '25JNJp@S7(');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'o2n6s009k8pycnlc8dicjnmhll2zkfllzdkluxgrcwbe61jnfnnaugcuriyancpl');
define('SECURE_AUTH_KEY',  'bi0zzaieahuoxvb2zlbqhvndpnxrybmsnqwiwed4nf5qirrucvbwe5ohad8wqoqw');
define('LOGGED_IN_KEY',    'hdqbmnyywbnw9zx1pwo1tyapc4cqngbzxuzocmgy1arna7xwhpllcqgrazppmgfm');
define('NONCE_KEY',        'jt7tpjcdczdnj0c9ai9nhs76jxtfeobms3vhqv8wf4urkjwgpybllkest28rwt1y');
define('AUTH_SALT',        'rnhgx3kmfw0veffbp9af40zedxgxsdsgcf800vujzm8smgaznvjvs7yp98rwznng');
define('SECURE_AUTH_SALT', '3hg72huspyrcgxgnscta5zeq5iwdbsrojfzew0l3fy61az3lf8zy6qwvyvemm1ls');
define('LOGGED_IN_SALT',   'jb9ek6cz7czsng6wnabqrrajtyedplricms4zus48nafwlqykbz1v7ywwrf7ykpo');
define('NONCE_SALT',       'tzllt8aahuukxxsvas94ulytneucilgeud5c6wc8xqkhgkcvpdafqhim4kirpcaj');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp9o_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
