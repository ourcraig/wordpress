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
define('DB_NAME', 'wordpresstest');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost:887');

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
define('AUTH_KEY',         '^6v4wHA/6+zr8UyFYJ/H5lIb<%fus>bC9/xIEAh=b&ni)Ib)su^JVdCNS0%OCJN*');
define('SECURE_AUTH_KEY',  'Q9a1#/xh<K%`7LXbO7p$piwI.ERFr_U_BdU<M$DO5&*kgl;Tc8nS;%;3+B;2A#Jh');
define('LOGGED_IN_KEY',    'g:fWQH`<8#Z&u}9^w}pQPk!Og,nK/KfrR~(HuuVbjq$S0Oe!i(Xi3t=^fg|1c!lT');
define('NONCE_KEY',        'QAegpT1Nc>%OC<]ImnpZ:%wXsp} 4mvDA9W~[k0avGB#F2j%!DI_2>`o$q{8dWcO');
define('AUTH_SALT',        '_HIg`[%Z-c&[2VB_^h@pRv&[xBmZ!RTIXN5%):{xCE^&O1kUe&v[RDA@kiFtHS,F');
define('SECURE_AUTH_SALT', 'im+9um_Tm8c!ERmsp?_>4GY*cjfEY73){B4QYNnJLAhh:px KY}qQ9$Hir.*Oj4(');
define('LOGGED_IN_SALT',   'B%C{doAVk()_6pt`MC{?mPov_B@W>6F~EOL{-R^! [s-|]<0QFy,;WkV_:Bkm;P#');
define('NONCE_SALT',       'V?TTuR}Hm9!X!dW%%*_Es~k:|c?N,UY*y:;)UZP_$!/Otf!u3<f5}#y[zP[U[Jg_');

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
