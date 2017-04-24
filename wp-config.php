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
define('DB_NAME', 'chftoo_db');

/** MySQL database username */
define('DB_USER', 'chftoo_admin');

/** MySQL database password */
define('DB_PASSWORD', 'Tr1nity1');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

// Increase memory with caution
 define('WP_MEMORY_LIMIT', '128M');
 
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
 define('AUTH_KEY',         'Pyv(92n-jx2~l1Rw5!_&/$Xwe-h?$R+BglB6X:|nY$AY+.[TugMk#E62]Gth`9x:');
 define('SECURE_AUTH_KEY',  '~keS>oVG- ctB]B#h]YNm2=;P&kZ{nTZ@1@ZidS:)-mTK3P{1k~;z}hFN#O*>Von');
 define('LOGGED_IN_KEY',    'bu}x3CZJnu$c?}{h)#{@Z[A1_FfOR 0,ao9E@h{D][dIaXJ*0E/jZ|+VPs+!>O}<');
 define('NONCE_KEY',        'W5/>bL>GOFr=IwD7-Nl4t-qsFb-T%-D5_#vis+X]@S~0S9-;G [3<>|]1aM:/<0>');
 define('AUTH_SALT',        '<8NOx@i/V1CSF<Ad^he:rze+JInf*S46#YAsV=i)?XdF3P!n_5I>0;)=+YQDVWO ');
 define('SECURE_AUTH_SALT', '=1GMU`Y-/D&1VN4qXw|VXL%Mt=_L&rEFSe@J#@9{w^wtqUyv_vR]#.`]^}osjBof');
 define('LOGGED_IN_SALT',   'iy)LtmEKN%AmY<?/V>qov[4!UcM>-QR5So.@79e=$S1;x2x61yY,K6kZ8vY$AcVa');
 define('NONCE_SALT',       'B@ootV/ *!rD4P0C!!^qD+|~k~yJ/rE=@=P*!uxp/]/wN21B-K)E8G<UX_.JXgC}');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'chf2_';

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
