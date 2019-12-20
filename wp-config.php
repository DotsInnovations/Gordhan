<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'gordhanthal');

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
define('AUTH_KEY',         'u,}CEHoZ3-1Fv^KKZhUQ#Am+WLCfs2Ln5Ss0IOwa9s?7aQhQE||eJCg,(Ed58r#u');
define('SECURE_AUTH_KEY',  'xJ2s`Pz<Dv1Kit-tx,>FXN6zwL<rk3+B?lsnk+04:@u(tnl`-Lh]j{TM@UXg+?DP');
define('LOGGED_IN_KEY',    'FL<6V{_--7fr6Cj]:Z`kTw%x;QASh{zUUiK$;. P~leg],e4N5dTutuzm_* fx0k');
define('NONCE_KEY',        '[XW!|Tm3Sa:9:w-g762#;in9dk!rcEnqr?aBM>lqrK*={kHORd`Q}V~he<6as@:S');
define('AUTH_SALT',        '-0S?fK+t#G6mtvWwo?:7G:nu^D+1z.`slgq`I<n4Cc&Qln>+(Lr<c}kz_vCZjO7k');
define('SECURE_AUTH_SALT', 'j+L3&EgAue|8t3.rAL!t1:Na 9|q_d75p97&mcdCbH`=]R%?UeM.2spBsf2f5_,^');
define('LOGGED_IN_SALT',   '*Al.Fx96i@;Z#(0q>Hoa7Hk7SO#z)_}7sZP[|]NNx6U{vudxdd9}*K14xvh$f#4n');
define('NONCE_SALT',       '{.4!v6w[t3@{AN0,%9+G<%*86YU6Qa:(AX5P$vLm*9(LjL}{@p0Gbu{$]aDTJh: ');

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
