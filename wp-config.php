<?php
//Begin Really Simple Security session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple Security cookie settings
//Begin Really Simple Security key
define('RSSSL_KEY', 'a5vyayUxcQASD7ZevbtsgWMsrUuYqiSLeQPgvknDGb17jnLhRIYPdWN1j34HKbXn');
//END Really Simple Security key
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'securebeautyhubm_wp166' );
/** Database username */
define( 'DB_USER', 'securebeautyhubm_wp166' );
/** Database password */
define( 'DB_PASSWORD', '(8GS]3pT34' );
/** Database hostname */
define( 'DB_HOST', 'localhost' );
/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );
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
define( 'AUTH_KEY',         'lc4gohs7msxkypga9nklfv3fzi7rjkri1z3w70usrq82yxgcspcanbmr82ovsjja' );
define( 'SECURE_AUTH_KEY',  'zfzciwvlsqinta5kzzdfomukiqvvczfwjogynho1a9cfr8fmasfo1seziuv840ci' );
define( 'LOGGED_IN_KEY',    '9h3yxhaqlls6udsx7lc96y1jpelpkazqjvpcemmn8lz2u8d6ptkbydshll0uogqw' );
define( 'NONCE_KEY',        'tiiuwjqdgwmbazywy4lr6q1rbax2uu6nouwbdwptpt4s8zh4hamdnttf7l2zqqz8' );
define( 'AUTH_SALT',        'ohojaoyvmr3y6uff1dhqvhbtlzuxtdp8wuub6xklsofm6qr3zabadqwgsviwkhf6' );
define( 'SECURE_AUTH_SALT', 'h0w3nghsoketklvfzz93v8olxvmysfcpvf9xr1nb7c7eaodojv00ofs7wtzclrtm' );
define( 'LOGGED_IN_SALT',   'hcbgaow66orjwyxmdtlouookyriph6v2av2cbv30wn2ls9kun1sjjoedagelixzk' );
define( 'NONCE_SALT',       'y6w1fquhqlvpeow5vsm45lmh1icldruzepgj4chrmsow6djrgwad0up9lp6mfssg' );
/**#@-*/
/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wpra_';
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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

define('WP_MEMORY_LIMIT', '256M');

