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
define('DB_NAME', 'sampleTest');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'pZ8l38AF`z#Oq[65_&bg7^i3$}%U&J-40H;aL7A3}seh0,Z,~qe`X[CqLyINzt4V');
define('SECURE_AUTH_KEY',  '6g;HwlsBfa3VS!KRZcF.PBuaq$H1aq:`Z^~nbv3:x>n2&9OHgihw,#misa[NxnA ');
define('LOGGED_IN_KEY',    'TN>U+9=^gmt.cPR/xC-*r0o7iynTTz[[]-}{H0%;uzL0uRhCPNel}{Ypq;nZ](cj');
define('NONCE_KEY',        '%nP1a[~.~`5@|J%1VT)^1Fl+aMFz!mbIC=ZDgR2%e=gFzV%XrE>#MTkEM7p_BCfL');
define('AUTH_SALT',        'qB_& I0j:C7C>l(-SbYX7^b9A4);z=h[GB+D1O/[j_}?,[0_1gpU&j,G+s+MH&#M');
define('SECURE_AUTH_SALT', 'n7>NIgF:dG=e3&G/;LPM`@z:Zh5`#%JBQ(?pp[)|&cZ<#Gf9$[+tnVULd@Lh}? z');
define('LOGGED_IN_SALT',   '=p4COa]]jmr^0tsAOA*w}iijta4/%iwNX;W &uyjhU!2~h-0Y:B$%&L|NgMG<pXi');
define('NONCE_SALT',       '^VPFaKtj]%&z;!7uS.>k5g^cfIRZtr!p y]_PGq>MD9pkKKb ql]VDnY`5FN)s$!');

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
