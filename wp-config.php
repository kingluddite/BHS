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
define('DB_NAME', 'bhs');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '$Sp<<O5}%3qM(:*95]Dfgl<bciHapF+@V.3C3(D+EgBMZKbU:9-I?2~C2Vw:jL.*');
define('SECURE_AUTH_KEY',  'j.Z`P9Ckgk#>~F[NB18be11[<q>Np+V{X)_t-B(t>>Pca]K`Yh:z+_pgo8B_v1z@');
define('LOGGED_IN_KEY',    '9+(|9JsW^hjL1d)>i`aRymZdCnKNe&>md|!.8H.0u(0*?u&y1-/XHMoFGsFd*$5b');
define('NONCE_KEY',        'IEXc&Wnx:|)ii(52IfE(zIpq)>Pp<{$.3Q%+z}&A++BJEple|0K-K W$dV=b6(%g');
define('AUTH_SALT',        '}i%Tnq*i>}RXB.`*!TN%Tz+x6,L ?6H}z!q_|QS~$xv@W@g]m[Ye$qmr<Gco;APb');
define('SECURE_AUTH_SALT', '.r8*31NuAlu#(E|z,m32-c^xr#<Rck(s|H!>3P[X?IOck!3,vtI^hyIbVEi7Hxga');
define('LOGGED_IN_SALT',   'F-0P9Cd{WVevnm:{95Yj(TxlSWF1kJy9]xVZw8*.y;>+&y?k)t`)kbwgx ^2K:n_');
define('NONCE_SALT',       '{K/5|X>{Lv50=B3(g?|4wBFSzFve0yO.CL3M5xC;giSlN&D@j<|V!]5BK&uc3[Om');

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
