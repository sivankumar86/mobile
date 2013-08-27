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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'facialandwax');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'password');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('RELOCATE',1);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '?dlf]3j/,@L,O,ju1ArB85ht%i m-5B`WS!f_W5+A~Q)aT:I=;DibrtH/l!=!!*b');
define('SECURE_AUTH_KEY',  '|isW)ET;mbT4:u?+PsD3gKCp|adnAWV66Ype0RHpp.--+~XjbXnIDe/WEyn+!CH}');
define('LOGGED_IN_KEY',    ';{G`ftq~|F!&)Q~~)c&QU[HP@$-ZjSrA+{q`){ge:|K3?}tr()q<)1KmySO239if');
define('NONCE_KEY',        'kkgl= }C|ML`fZb#TTp0T>cEIYy/-+$#x /Vm` 9ztrW3skWfp)UF:0X-eh`mdjj');
define('AUTH_SALT',        '.Q-@(mJFF^-gPVa1.43HYc&4JAp|nR!n~2((-o@QiXsC$s;_S5=}1e6a6/v9dZ}[');
define('SECURE_AUTH_SALT', '/imXDks)_N%O>-P1CQ/+p.E#)o!d<@pCq|=}3 cag93tNbwheIa_|>zDd7&xa~f*');
define('LOGGED_IN_SALT',   '$X9o[18/+:yb9O#N] s65o~oaW9Y-xkt49Y^[TU@#c+%Ure@qLW#:{iAyZh`UYu.');
define('NONCE_SALT',       'CP9uz1VKyeP3B@T(&Bn9[,}yJ&+Cq>/VgUF-L8CN<mZW2=_`:3jRC~Bap4oyyaic');

/**#@-*/

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
	define('ABSPATH', dirname(__FILE__) . '/fhome');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

