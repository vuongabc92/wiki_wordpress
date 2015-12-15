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
define('DB_NAME', 'wordpress_44');

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
define('AUTH_KEY',         'k#O.1,7{}U= ;Hr0@ej-s2wuWBhV#luLZBN[CpO||CTXzS42#z?JPO`6o$7VT< f');
define('SECURE_AUTH_KEY',  'OT+A-y@]>,S16x!xO-tWKB7_+Nh,giRK!te-ZvZ>[{<;G2:M}w}|8+HvwGN@06]C');
define('LOGGED_IN_KEY',    'g>#U/Sq YJr|G-Oz:fhyP*A6wkyAVQV>-K)|v+E9R%=gtJ?c-&wR_*4tG^Y)7srC');
define('NONCE_KEY',        'Ev%2wcDS:$L)=Qr6-xvA #]lx9{]+!1KwZ]P @|I7OTCngT@+*Gn()A*P-1Fz9{v');
define('AUTH_SALT',        '%hl)b3j,8T<:]a&73kiWyk3kncx&u@;5oJ|;[u^r<xl2 }kpol0l?K3y~0EmyjxT');
define('SECURE_AUTH_SALT', '-z>q;D]3-+}oI*nM5;sqW_;24<+.B0Lb8t|Ri=uKsMeZx8N^^FnA:1Lt1!2t$8j8');
define('LOGGED_IN_SALT',   'Z4I)`6&,DzO8)s;#~K<fUUOCQC>.MOa6~f8h0Vk8H|pmB.u6Qj|Vo-vb4R&@)n k');
define('NONCE_SALT',       '(M;#}kpu&U}a*AHggFX=dUVNg[ZLv,jb%PRsV|` ut*Ls*JjRbnk):&<ha7[)r;w');

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
