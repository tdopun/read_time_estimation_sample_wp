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
define('DB_NAME', 'sample_site');

/** MySQL database username */
define('DB_USER', 'test_admin');

/** MySQL database password */
define('DB_PASSWORD', 'test');

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
define('AUTH_KEY',         'tYGf%kUlqlf~A4>ht(>*v(8:K0l(0 ;+MXb~l&jA)_mxgdx>tAL?g!B`-)v;gps)');
define('SECURE_AUTH_KEY',  'sM72{XWW1xI_]-Rj:v1/2(J&DMJviz32kZe=&}iiy#,? c;gUcB5K9nq2Fh$4+nf');
define('LOGGED_IN_KEY',    'GJVzS3(y50ID}.-5et-cG!hz,#!S|-|7U(?Y&bfY]0o+ug5ym_I-C)wlEKYjz<$,');
define('NONCE_KEY',        '_5>B7vQwA~kwv 6vJAOg)|G](>O^Aq7#ZFw&e&NB^9e#:vdTX`5Lw6Fd@]%yS^+m');
define('AUTH_SALT',        'E-]DzNq)&vuL`0.$cIO9w|_A1e(@lY <tb?|j gucGVb{_a|z19`l%8;Tr9VJy}N');
define('SECURE_AUTH_SALT', 'f^~DszH5mDSt,PS:d~Wf=exul$yv&Zk3U)t;mkiJX8_E0Oj##jJe,qIzvX+U^`aX');
define('LOGGED_IN_SALT',   '-r@iB4R>yA&$|&`&)T@3I.b(._K:wkY@2jmp^6jfs5%aoV*udM!6TPH]5^s}.7@p');
define('NONCE_SALT',       '9O<E.t#vYi$A1HuUkoSQ}6ydYq[U+.*-HyUA=iL)oIwUup8m_t2p78Ot.%9BHNo@');

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
