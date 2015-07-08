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
define('DB_NAME', 'duranlocal_database');

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
define('AUTH_KEY',         'Xc~irZo7vn6Bj]Cm^_|l_K+T|3IUJzl#YQ+XVRcIrdYP eDe$LgRPho+DVPtGHps');
define('SECURE_AUTH_KEY',  '*xI<Wlhmo[dji%|W~J*@e+$c}3~9X*Lah![%_67OmfDqQ5>jztzK47-om#Q(sx]D');
define('LOGGED_IN_KEY',    'po$)E%+RG15<*(-~~7gmA#%w<hg+4e_PETE{V)sdz@J.zUL?&=`b{rd.)~+5&.D9');
define('NONCE_KEY',        ',vyr77+TW|b0ic`MbrBE6MMDA6I!+?p$|*}XRH<os2y{%L;3Yuz`-H-u@~#>34?#');
define('AUTH_SALT',        'C%P.>|Or)S?wLHZ[Zj.9RR$nb]g|c>>d5/z--gQeGjRc3QdNQS5pTI4+o$2kwYen');
define('SECURE_AUTH_SALT', '?>pF+e62dlL#+|CtCDPZ!kA;84P-lK>14`)s,` 2@Unaa1|5MU,GJ3<P9`8w:ivw');
define('LOGGED_IN_SALT',   'A&U:vyd}x,f/18.+#>9j=)wH4nTKfL??%oC6uM.(-pMFp^Z4(&|:HZ-pN+Y/Co?$');
define('NONCE_SALT',       'MM`}@h+8#+_uKWuXh{qWFR@!_H G}7,2@wZpjG,HhaBq/;zPUlsF]IAHKjV`k]$:');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
