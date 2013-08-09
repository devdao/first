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
define('DB_NAME', 'db_wolverine');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'nguyendung');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'O4e3Sz@,UXM)k=R^GJLN;TN~6Aj~hG*IA|9Dgg<Aro)*9c<3^G1bUfB%YCfr(0Bc');
define('SECURE_AUTH_KEY',  'NarV8E{Zy}N!H4d50nq},z]<.FH6#rZ%g<3P:#7l[[m!yRvLBYboZlfVJDd%5Qw.');
define('LOGGED_IN_KEY',    'Wi<5G>{+rmvkS8<e3xGF-8Q8Izcgm>e7k</}1:hdZvj;I^Vec&:rBL(zPpGv^9`1');
define('NONCE_KEY',        '#$R`VWq20A^U;UxA<$m>(MMU1{imp~jp$#RmFb|b;pdLkqLe*cBultxal1k^(UW$');
define('AUTH_SALT',        '#4hB`qI|PN4-v#>:tMo/vH9mp}TE,N0^@u<)6]^LAWwg{.7* jH=L4GpVH-W.hRC');
define('SECURE_AUTH_SALT', 'bIeBIgO&17)VK(4,$=<p~PUa^Yu$&x&ukrEfaqh(n0H4&&aj%nTB/sr)x1WB>9a*');
define('LOGGED_IN_SALT',   '@Pb:u!1>!:<+w##{5=!WWVOJ?N@2iW-UjkfGr,*#hwK(oY`oduclX_kN*okDX%!5');
define('NONCE_SALT',       ':)>%~0n@X<A7((pWwjqQ&^VQ.G$.P:B(&(&JkKMCI]-J9WT[+edpdy$H|Cpa>jQE');

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
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
