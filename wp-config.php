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
define('DB_NAME', 'words');

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
define('AUTH_KEY',         '@4/h~f D@N&g J^)O~y,%hX+gTu3_$=si9&L>mFuzSa`hg/0YK57FwSjx-bX=WiW');
define('SECURE_AUTH_KEY',  '-j-dv}kne^>:B];>1_OhBe8+; Kas35@3W[+bcP=8,N]!v=8~?U~.!^kz6KfP1%M');
define('LOGGED_IN_KEY',    'r<j4rP<_tea#+td{7,(lp5ppMqQbc-.b6Gp1W?(c,qZ;MOEf,te/$w(07P2A.V{X');
define('NONCE_KEY',        '@dp,iIjV-CkXcTAPCSJHW{#VFFne/yfnKIK9!bc~|]UEpTj6forr-jeDSp4|#&&a');
define('AUTH_SALT',        'G8HtLLnuK>x#8B.*|}H&)Wo(QZiYXPZ2,SS.k5kV6oAt~;8Zm6rICTL/SUZU8);w');
define('SECURE_AUTH_SALT', 'rqq11AyPxE%<a1j_Au_eE]&Tl;(8a9@]0O%,RrA1NS;1Jb5Moco`}lcSWCj[`H{>');
define('LOGGED_IN_SALT',   'e$K43H36TV;)Vi(JvT!iqGSE;V5[[V_qMxV,MO@j,EdL;Vb[ZuCSnrNK|HnRwG/J');
define('NONCE_SALT',       'CvlOSb~ Q=Kc?RD73QAW3l(F5/7!cN,brpNlm)S#SIOWcC.QKE3!Yg;uI/oP6t/g');

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
define('WP_ALLOW_MULTISITE',true);
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'webs');
define('PATH_CURRENT_SITE', '/wordpress/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
