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
define('DB_NAME', 'inDBioi64');

/** MySQL database username */
define('DB_USER', 'inDBioi64');

/** MySQL database password */
define('DB_PASSWORD', 'uzZROI7Rwo');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'Ck0@D]adG-xe;+~K12iPS9pmT.#pD]<XAHxebI*i2*M6AqXUArub{nU,ruF}zJQ');
define('SECURE_AUTH_KEY',  '}NzvY}z@N4wG:0!NK1hRV|sl5_|wGD[ZdK-hd;-~K1;~LS9pmS.ptH;<XDH2iE;bI');
define('LOGGED_IN_KEY',    '*73$QI3jQU,rnU,zF}0@NN4kkU!ro8|>vFC:ZKJ-gd:-@O41~OS8plS_psD[#xDK:');
define('NONCE_KEY',        'p#SS9tWS#pxe;]xHL2iPL+mm6..qAE]bHr7>{yIB>cbM$jg0@^Q78,UYFvcY[zzk4');
define('AUTH_SALT',        '4v84kRVCwoZ[w-K1:dKO8llO~_p9[l5~#SD9#WaDteW]x+L;{bLP6miP*mqA<.uAI');
define('SECURE_AUTH_SALT', 'e#S52iPT.pmT.<tEA<XEI+eb{y$i6yf^^QB3,QYBrnU,>vF}>YFJzkgNz!k8|!R8');
define('LOGGED_IN_SALT',   '0JrYU,rvc}>vFJ0gNJzgk4|!k88[ZGCsZd:-wd::ZGH:ehO~A]aHL+ieL+*m6<*P6');
define('NONCE_SALT',       'Yoc}wzk0:-KR4oVR!osC[|sCG1hOK-hl5_~l59]WS9pWa;+TDtxe;{xI;2iPP6mmX');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
