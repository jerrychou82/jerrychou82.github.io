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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '{@68tU]rHIuyY+RrY$Gm)14NHiCw_2F?ug6:::KyE4w0sGG|1|5z#$Vbsd7|<~-+');
define('SECURE_AUTH_KEY',  'A#ZCA[ |hZ!{5?6Pu_,PhV;:IhhU8KZaFHloth4@x(s N+Z}wStPG,)~*_0-GJOY');
define('LOGGED_IN_KEY',    'Rm<{]!IEk/nbGWPlXX%VCn.c?-0Nz[7]NO-(@2jYX%$CzKAI^B+z|1CsnSm|Ey0Y');
define('NONCE_KEY',        'rVX0oc{nQa7{?&RKtU~^&5+1p6tF[tCZ2U+ds?>.t<>?HY2-CXTp?nyF:Kum[@A{');
define('AUTH_SALT',        '9|$NQCTtFv_`4%2VQ*w:,E5^rk]MPfdF!iZMX^sYi|T/7*gxW^)8+>wA#bExrnef');
define('SECURE_AUTH_SALT', 'in.}3D5bwc,wX%-pMt:*c32$C@U]*$5A#D|zX{urO6s+-.>Rq&uIl|j&}rthm0I6');
define('LOGGED_IN_SALT',   'a+p<g;_NBp[lL8|+5Nh@||cLFi^-;|QV*fg1Hh[PhIqv$M!)}.0(_w%3CCo--S3(');
define('NONCE_SALT',       'Q?H2hv,yI+w>(7uke_6B=qoh1s{xYu_{TqBRi3gI/9#bjXg:],-)wwAdrvY4H@^#');

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
