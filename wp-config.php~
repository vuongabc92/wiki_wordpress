<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wiki.wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123456');

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
define('AUTH_KEY',         '93GR2V^|w4U:M7n;{o5qK$6r21FWF4w|pEfJa}^_*Wx;XIA!3Kx20Dh{Q>}(-fke');
define('SECURE_AUTH_KEY',  '=`;$({!:M+K%{{D-oDj)m|&|pfV,%y+#%!Nqp;!Z$koG6z?;hI+m(#-d-F?0gKU6');
define('LOGGED_IN_KEY',    'E50k|u3Wg>&xR/ZYw+A4O_ZD*IE#2k8&T0D9Q+3LH=*x,;^d;E.u3g4-iYs&h,B#');
define('NONCE_KEY',        '77DD;tJ7r|^4fbhk 2?iSZM4u:lz7tP7&HzO1G!V4:e!H0/TR$gLoG8N(U?}6Wib');
define('AUTH_SALT',        'B>{Z+-1:GzfGAe1|,V3G%%Yj3+l1mQGQyEI:CAh>krF:yYivx;?]Qv>[?M$,PYwe');
define('SECURE_AUTH_SALT', '/-n-<&GlzU+x8%UiLpwXVwn|ls0Za6j]I-j>bsCMa0UX;8qLQfy[wo+OKYr`X^2X');
define('LOGGED_IN_SALT',   'IB+-9WGda_?0LGPRv2rCL%4m^OG9!AOd._FHYhaDp4P{K]CT9ZAA4+$v[4SAlp%7');
define('NONCE_SALT',       'RZo&NJh.fn4)/QaT~V2*Nm}A!.-<k580%5Q-1!_Web+r9@sRc~6u7V4Bl;vP)qhT');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wiki_';

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

