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
define('DB_PASSWORD', 'password');

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
define('AUTH_KEY',         '^,~~%AIIx9,[*918X(;-d7Z3?:8TTJ1+2w&3L0V9}]8{?^b-enO/6=-0dQ{]~MHh');
define('SECURE_AUTH_KEY',  '`Ir}D0:,#mh^G2HV>V8/!/a3B,g=R<05s/ufr;y|:<z[HVAAR%7^?!gF]yNEx./w');
define('LOGGED_IN_KEY',    'E-v/$F5U0c^+Y2Pd&(fPt{JmEE+PgmM+S!+xe*I91o+djkc#V+26}rS5[3*DBj3W');
define('NONCE_KEY',        '0OTK|G|_^oye2Vz+1mM MZq/JuI{!:{1[=KQp*RkpRF$|qF<eK.8OO`k=6,zz,N;');
define('AUTH_SALT',        'DG*MbY9s:rV-=C=t&$Cm+|;.[;+Zvuy;k{4;y5]J$Z1>(z:URGqI|T+op*xZ[Anb');
define('SECURE_AUTH_SALT', 'g#p<N#B<GL~HA&s[+Irsu=G)K?|}8?b-WSjkU7A$H^{`259UCSEjU:]cX/{OFDsW');
define('LOGGED_IN_SALT',   '$@LC g6yU+UuO&Ac(FI5}eP:CS+LBmy@lzU-V3?32{8p</X6mx:rv}mz#gte6~94');
define('NONCE_SALT',       'QB>nAq8PgjbM)y3F0Ik9ov m*%dnG*;Z:7BI8}^A^;|6{>Ka0)bxx[W6S~_<74->');

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
