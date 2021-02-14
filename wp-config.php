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
define('DB_NAME', 'portfolio');

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
define('AUTH_KEY',         '+$k*9*Iuvo;xWCV|rPiqgB{LQ:uJfQn{% L$3[Yv~s=?k`u=]N_a$PbOv~>9I{H5');
define('SECURE_AUTH_KEY',  'yM]Z?dxp!HRkR:si2aVyXphxm-0#h&YkMoFcx1gM%>{0PZ5jJtXFM.5I%H]d5T=#');
define('LOGGED_IN_KEY',    'qZ!0|?LeGm=Vh?_/lm+5C$+Cm(Oki= lCd2T@H_6I2/$qZ7.]hMs)8]K2tV[}hKx');
define('NONCE_KEY',        '}KDi5I}&qB%H*yK^= $D@}~-Ccc,)nF0x|@c1{S<3VHAm:?Z/&K|Xv6dhm-XV^*u');
define('AUTH_SALT',        'z_3%7PZgo}b$x)OVhe46J5@%W=.@~}g/6yREjP l}Y},41!LJdV0<!Xj;|l2GuL[');
define('SECURE_AUTH_SALT', 'uD.le/fx6b6*Z{]rAW*LARfn7Xae?_:oHKwsaonkg;-`1_jN)zWp$lxZR0r3X@]<');
define('LOGGED_IN_SALT',   'vr>Rc~Ee?{H{UA~%YJcDZZWyg: ^|A40!SBV/)D$!w> 7fdT_BVu~`{=5>t*?j/U');
define('NONCE_SALT',       'NG+:r?%8{] p_dM?$s=zjl8#)kxJFHgy4u~|pZ*o6Z2rz4;VIO#)g.[TBkNq*cEy');

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
