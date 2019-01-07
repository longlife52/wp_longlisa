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
define('DB_NAME', 'longlisasite');

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
define('AUTH_KEY',         ']1 y(WKGtm/bz^&a~z:4s3f=AxOD!Fv`}1RWFU%k&?6MWmu{pEEw)x.33^j7J44N');
define('SECURE_AUTH_KEY',  'JBK_A@Q5A:7LhM+Oe/1mLaOFAy]pfD(iifDnt^5605{6Wr`GyVCVMBN#k^{[.?_W');
define('LOGGED_IN_KEY',    '!Qeuc6V3L0UWiG9J!c)mF3oiXKMrOtXCyr]KMtH2V`<;Ca{:~uA<A6RHL.UU*+7@');
define('NONCE_KEY',        'Qcb)gwXL;f1s?3=.}w+*N*^!L8F~<S!ZMm=#m%FDe!8)/tV9i>KIc6ZvKD&h<!JY');
define('AUTH_SALT',        'RLCt38RMEl$}5]#VCCi6fG+aQI<6k&q5Q[yq$XkC4euCg#E{{;bU^ @#{~BV3z}/');
define('SECURE_AUTH_SALT', 'p@h;vD],NO9nipR&Iozy$nOf)bDNUdyyy.E*9Z% KjXh$|i/qZ#72RuZV__&n>*u');
define('LOGGED_IN_SALT',   '+[6n7ZE-Nm|:=@3DNK5^5C2Z/M1>$RJt^y%=)=.bLc;td!AlA>h2Sy^!}mfz]eqO');
define('NONCE_SALT',       '3 eas(?l{tbDnbe]tvu{(1PMp {=c^ZTxzwNap4b=k_3ngEfm+=T3>U/SZWTmv<2');

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
define('WP_POST_REVISIONS', 5);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
