<?php
define('WP_CACHE', false);

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
define('DB_NAME', 'db_becas');

/** MySQL database username */
define('DB_USER', 'user_db_becas');

/** MySQL database password */
define('DB_PASSWORD', '135N1ngunaES531.-');

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
define('AUTH_KEY',         'I%44eB)6v0IW3*x/D+9cy-?ZzV&6}Q5H, 4fqRPMCIW#Lp6qhQFMM8 iGcjZ8wUK');
define('SECURE_AUTH_KEY',  '0!of6~ o1TF)v~?p|mYoVtd]T;.qiP)dUN]L7ZAa*tKvp@*~xB:05`TE[k=@L-B4');
define('LOGGED_IN_KEY',    '?@bxU`Q;g!_uA$iDK.fQgqE64km_~pPQ!RQ+NIA0f{P%C6TY,}?.]VjTl~(s,7!u');
define('NONCE_KEY',        '_,p_?DXSVtzX=O;-GiH^C@LT-4I.#jwBEb?RK1GCPD.vqHoHT_X8^`:7}yTD6&lX');
define('AUTH_SALT',        'P$$B0qm-#kJ/H*ovO&;h)T]kqr]*Tt=joiQ9#SyL/f JFX~.}Gb44[vtLgz3=1Z9');
define('SECURE_AUTH_SALT', 'n%tp.F7D_mCa/Mm+[It8]eg;(e|{f) ,C(}C<vo>e?qFj#K^ULUu`3rCo9q7omNN');
define('LOGGED_IN_SALT',   '%WRddlR=P0HlLcQn7)[[!9txC.]Zm>xZv).R,X++PaC@^cg w<BRlRFC9.QE99H?');
define('NONCE_SALT',       'W!-(kqTM}vP*3A5,?--Rc:v@p|bra{w(fsyv|o#0=KF2Q$J*!N~?XU2Z|}zH6d<c');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp48_';

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
