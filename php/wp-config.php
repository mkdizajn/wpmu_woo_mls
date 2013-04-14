<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

if ( getenv ( 'OPENSHIFT_APP_NAME' ) <> "" ){
	// ** MySQL settings - You can get this info from your web host ** //
	/** The name of the database for WordPress */
	define('DB_NAME', $_ENV['OPENSHIFT_APP_NAME']);

	/** MySQL database username */
	define('DB_USER', $_ENV['OPENSHIFT_MYSQL_DB_USERNAME']);

	/** MySQL database password */
	define('DB_PASSWORD', $_ENV['OPENSHIFT_MYSQL_DB_PASSWORD']);

	/** MySQL hostname */
	define('DB_HOST', $_ENV['OPENSHIFT_MYSQL_DB_HOST'] . ':' . $_ENV['OPENSHIFT_MYSQL_DB_PORT']);

} else {

	define('DB_NAME', 'theme1');

	/** MySQL database username */
	define('DB_USER', 'theme1');

	/** MySQL database password */
	define('DB_PASSWORD', '123456789');

	/** MySQL hostname */
	define('DB_HOST', 'localhost');
}


/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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

define('AUTH_KEY',         'cXN 0rC+}Si<*E5cClk<?xpzIn #659p2lo*~|0evAq*up?Lr7Gf)w:,eZ=ES?6f');
define('SECURE_AUTH_KEY',  'V|zGP(8eCWQ{24{^jml;@}8U!f- ?-H+gE:&}r^ih45==`_k3 !j_:y:22F2jnfo');
define('LOGGED_IN_KEY',    '08q`ne(iv0cdjMBzk@t;bQ3J7!QN[^eibt{4:NoXd6}}1gwd|Sg~en|p+:4HS&$|');
define('NONCE_KEY',        '^RBB7{qK]%im7&d6.NAr8%5>D}:J|,_G9X*7<eF@WXaYpKue3%(Mu8--s7NcK0:A');
define('AUTH_SALT',        'Di2!h!]W]N!j}@YN9~#ArXN!]>qkc-7m8&-||n%FPU<1$F?}b-D[:KImM/ %Y%k$');
define('SECURE_AUTH_SALT', 'Sc)3DVDCLd<=4OH!ldNv,r;c#3>OWy)-f}GmcVu_D+z-&)-u]c!8N*_Cc+ISykk5');
define('LOGGED_IN_SALT',   ',im6H%x}jKMslNS}2S`P+.oP|p~v|l~GV=ZsqQH$#7VbqwPwJj|uy:!L0$S4>@2H');
define('NONCE_SALT',       '+2zhvCC:e=/zX8Lb(ad;rN][-X`o~g:]T2&oy!]zjRMN`iL~?dmg-8p($4@0W}06');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

define('WP_CACHE', true);

define('WP_ALLOW_MULTISITE', true);
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'mk-test-domain.com');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
  define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
