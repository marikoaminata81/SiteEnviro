<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings
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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'epiz_32988437_w682');

/** Database username */
define('DB_USER', '32988437_2');

/** Database password */
define('DB_PASSWORD', '2QwS)U9-2p');

/** Database hostname */
define('DB_HOST', 'sql304.byetcluster.com');

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'zh724gneyd86o1cxbao52s63qgrymlwfa4bqlxpesiduor0xoe1c8bwhuaerzten' );
define( 'SECURE_AUTH_KEY',  'opbneblth6qzxmmtc6mwb5kjp7l254fotguxfwwrswthdd9sv4dhxlr9i0wbukb4' );
define( 'LOGGED_IN_KEY',    'lu2nkdmmfmcq9y0xjmp7ulwy9aucztbyqjoegqbcukt5upwp781rohedgg6mcodt' );
define( 'NONCE_KEY',        '9ewdekrkv0nztylnur9lfatdjp3f40bajcargyqlsdzhlhilpdhitnbk3i6kicl3' );
define( 'AUTH_SALT',        'm9dam19lagd9sq9nmximxicfkfq9eplaba2dwcottbhnk37laojhib0erducmk6k' );
define( 'SECURE_AUTH_SALT', '7myrtzrggztaeyfrqccpj3x057isjoifolvrnknncdrimhvynb5yyyxdae1323rx' );
define( 'LOGGED_IN_SALT',   'fe1qohj6tds8y7grmzbkjewzmeu3cjzktigo8usuquwl7tdqtrawil3hhwnbhgpn' );
define( 'NONCE_SALT',       'edrc3kibr8hfgxjbkifayczn4m3r2w34hzude2rky2t8stxb66gsbmf5gdtpjwcg' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpc3_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
