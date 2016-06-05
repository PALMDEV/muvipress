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
define('DB_NAME', 'muvi');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'welc0me');

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
define('AUTH_KEY',         'gsfnhald1Sg5ee-wCz>zlq C`WQ(q-71^4rsdi(-f@W.~sCG^Ikc%HV&<d7FnDPm');
define('SECURE_AUTH_KEY',  'g|C~BIr%4 [(vQ+B,&l,X`Ws1kO~M#dp^l!bss`{vV6CYR.a&:W( OvZ;_y:,;hW');
define('LOGGED_IN_KEY',    '?mY4Eb-fT>f4}7bpn;WzfO/W2OC_N.j by{dtjKSKEoJuUr[mJ}4Q7ejxS^|Xx|1');
define('NONCE_KEY',        'X@}IGh$`H{kIy3KS&`1}Vz+CXeH0;APqDJGVaifr%V}w9mqk0F4~N3E++B|5K ^$');
define('AUTH_SALT',        '6;CX>dHEnOS.Q&GNao%cvy~]6NRo04Ua*5b3V4*8Zy=icYq#mbrx]/3;vcd!XZ[O');
define('SECURE_AUTH_SALT', 'CEBL9s}3F/j/s~liJ?CT)YU0?NQ~(ph2?sm]sC^yk6P.lrBz.oYCs(U#N~ObEEj/');
define('LOGGED_IN_SALT',   '>h:ln g}e`4!Edq7DbK(LXIV}EJ(@9kcHrUkgh2!Opl}^=X~zCFwBp0Uy_3bK!2f');
define('NONCE_SALT',       '|;:boO]!5~(-`8NZ1|5f<c0FoPQld|f~^CT+F#{|u/~n*z4qRxJ5k<$mPG,`1mrN');

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

