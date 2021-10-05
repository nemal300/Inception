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
define('DB_NAME', 'dbname');

/** MySQL database username */
define('DB_USER', 'kbulwer');

/** MySQL database password */
define('DB_PASSWORD', 'password');

/** MySQL hostname */
define('DB_HOST', 'mariadb');
	
/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */

define('AUTH_KEY',         '~?1EBT_9i28|jqddVeMM3x1|?;+mpy1~e2TUtU<kTi2jy1An>p`$-0TLB=+#O$zQ');
define('SECURE_AUTH_KEY',  'h>^*HYyiQ2eHtQH>Iq1TPKt+&;5HY{{8t!_jPXNdy2EwbLL-l>0+?#>arwxxS#[t');
define('LOGGED_IN_KEY',    '2-o>9M3.1G=s4qTZ9pEt&|,cdGV7y{*0FhOH9h&&]iaD8SApbq?+8pH488uT?VPT');
define('NONCE_KEY',        '!uR`~34:7Qp2OVBeYd0|5C;iv+M+H8k5N28Id&80nLLtnd*$1|Y..-FD?sz+9kdH');
define('AUTH_SALT',        '%OxF?t_ ;E`1hDZ9*=XmhAV8NMt0~3Li&Q,F:V+D8$wjI>#dwLmKQ}EWk-+:1^9d');
define('SECURE_AUTH_SALT', 'x.b6-BHMJ`G*V#NmR8BLd~H#-&t|0G||xzfi!0]xbF~1T`_E,JCGUSeM.O.,*u]x');
define('LOGGED_IN_SALT',   'RK>yL5m&V^tCLdOi*Fv6~vf?M.9gM^fh]Yjr+NO!1aS| m{:#e/XzXv$C`,o?wH&');
define('NONCE_SALT',       '%!H|c8%D!U)aN6sYyqtzT+EgalkATbN-w`Rgi_8u.1Ts0GF]`lu^h+y)a(e<Fnt3');

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
