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
define('AUTH_KEY',         '5XGR9_L2wI*s.Y`991c/)1fsuG*%&z3v?%!6H?j8jHjncJ} G$,4sxcRN/-YpuW|');
define('SECURE_AUTH_KEY',  '89r<!ihbwvX95Y*R>6LDmIkd#M5&Xj,XwuS7Nx=3?^&,?2g^P18K8=Ieq-9o8OH@');
define('LOGGED_IN_KEY',    '-wh{iIU+TT}p);f$G/c>o~oUi{HtCVM$FSG&En5R7[fj/kIjwdpECMdW1rKdUB(L');
define('NONCE_KEY',        '+vsyF+MJ4f=?E%odu#{qCy{y;FZy{3&]GdV<Ddmn3} O5:2*^<X~SXeQfbK!6w/r');
define('AUTH_SALT',        'pI*5Z]IEj,3%lNYmVNk3<1*oRY||J}k,3U64 H5)~{mZarw{.`&#4yV@8Y5zSXe<');
define('SECURE_AUTH_SALT', '`|~SA+b*%rB oK`IG@(m%kJ5#-n7u; ~A#Ya 23:KM;]^}TWtZs_u7->|5b!A3?}');
define('LOGGED_IN_SALT',   '8YjpUC@j[#X=#nX{Gayp?!.[%rt^ <W)wl^$;32/IOJa_g*V<o_=R1U<!rKorc@[');
define('NONCE_SALT',       ':!5dat,xcypD8 2:uHaF6@EG~{oWD4D$^Qzg7:VSqv Jlq|Q&g:@1r30U6`~8d1p');

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
