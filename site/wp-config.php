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
define('DB_NAME', 'marketpl_wp');

/** MySQL database username */
define('DB_USER', 'marketpl_wp');

/** MySQL database password */
define('DB_PASSWORD', 'mark121Plc!');

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
define('AUTH_KEY',         's!~M`12ou(Ji^5pIBVnm;{v$d7@G|<6a6f:bniS@2|=|So=%8B=z3=p#anE,}sg+');
define('SECURE_AUTH_KEY',  'L&@e]i#^}|;8+k=q(W!PEY>n/f</(>iH5f:FMiwR*ypo[E4MoWF0eG_GOGUMkLF]');
define('LOGGED_IN_KEY',    'm7aedu-5oAFPA2$N}AO#>Ytg7sq*+bZZa.q,_nF*B2tZLL f=`A7eJnD|I}<d8k&');
define('NONCE_KEY',        '#ibw-O4HEv?1xq1u9UL[-lwlCd2K8$ham06bj5vK-3X7_BOQPQ-(+Ve/R+E$[KL?');
define('AUTH_SALT',        '@U<*-|EJgdc0cub=xf*nM9$M+dqEjYExEVF>s4w5Z}!-Q@i=[fhV#ghSh`2szmRQ');
define('SECURE_AUTH_SALT', ' Fw5>`Dn]UH|G@JEqhpX3U)RQuQbh=Gi/XmMC9qmj9ZaZ|Nzp=x!1e7b,gPxsPnF');
define('LOGGED_IN_SALT',   '=5%lF$DhY9phRdvaK@~}l4@)VbI~&&tHkXIB!$EbkH5UV*jU:Eg}>[NE~#0=@[L6');
define('NONCE_SALT',       'Oq25xZWxXAQg|w=3?{2Lw<JZ4rP6cwJ{-nB^6V-|d|u|jKun{#%Fj`)Z^LyQIW;f');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'si121_';

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
