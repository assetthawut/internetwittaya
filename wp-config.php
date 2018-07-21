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
define('DB_NAME', 'ladybugschool');

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
define('AUTH_KEY',         'YvwWu=%_]EY)2Y40QO,2Y-kwL6f`qG7&kS@}2%N@C3$G5+TXF3cdz(AYe@K61_3W');
define('SECURE_AUTH_KEY',  '>z0ymPH[t:iBGn5{?]JZ@pz30`J<P71;gu)NMh|!bj390x},FTmzTa O1(YAzRrO');
define('LOGGED_IN_KEY',    'bE`AU3m|@2Xg?/^e^ov WrU<#,(sDq%`T9D}$%12@z=/An6!I7V5W<:unLdeZnw)');
define('NONCE_KEY',        ',&H5{CJgKuN#1aSv^VloU8_Cys3Np+ J+ax#^]P4l|yvJ#Not`g{5|sE/4W79J5y');
define('AUTH_SALT',        '/84o)Xq]gICKqz-S(CFS76luzxGU,^@VFU4L_sA7/xc|(vO:LT*)Bp-ArP7e!Ka$');
define('SECURE_AUTH_SALT', '<-m(z<&yMxavmvt2p2mXWUC~br-`L|<077epeA2 ,p#Egf!@|i6Y_b:p-z`xMPKC');
define('LOGGED_IN_SALT',   'I}hKj?$;V##Pa_YrUd&eWv -bA{DURJZI6nS[MJmr4b4.Dy&2F128n*eYRO:$@K|');
define('NONCE_SALT',       'p~xrMu/LCrAs+SJp-^E$X`;6**xMD}@~I2ZCpM#zn@.1-:dif~-N@BG)lyzsnLwL');

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
