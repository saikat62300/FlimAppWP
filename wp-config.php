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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'flimappwp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '/1h>v*6JA?,3#(E*71;N#p9ph{r2+!I&y`+Qs8$ feBl(%/PP%~`$[fZWZ;7c{-5');
define('SECURE_AUTH_KEY',  'lyLot|ZthcjRNKIAxq#mwQkDi>ru[8KkQYpk =jRM.c$rn>L:{b^#x)-nm-nuj;>');
define('LOGGED_IN_KEY',    '?a?3Ug8b|)WJ5ePHvan1M{TBPrD2c(&E3<6Ie{Jn&tJ{w6*!Ei[`Q8{][GNVjF5T');
define('NONCE_KEY',        'mdkKX*c2j|WKKf<Dr~EYjbO2r/N(X8/CPRgbOd(PpxgMJOr9 8Ij^(P#tsz7TE}^');
define('AUTH_SALT',        '[rQfIR/O<QqRd2|wLN`48H?bY_!Ma5nvlp=2gBIu#WPs~##Lv0@D5e]@5W7vfO<t');
define('SECURE_AUTH_SALT', ',i@;UTuA^vdz&f#yMUbeH&%|;MdqSoagRf^%,{>gi0,?ULz1rP6LoaHvtQ4De7Z0');
define('LOGGED_IN_SALT',   '7k<8WmvDG^fJIF5067&<R T#:ky4W_q-HK]Sf){w;GY^&US]=O;bt,LWs#&^Nyv(');
define('NONCE_SALT',       'c09mX%05@X?usNwRZDM93rMF}GRA! dOArvKZgIR[4-d0rxembYx)axU4;|Tot@2');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
