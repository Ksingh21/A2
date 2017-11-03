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
define('DB_NAME', 'assign2');

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
define('AUTH_KEY',         ';Xh.KE+wSQ,l}d4PhTzu-jAVH-zn{]ybEtx@X%6HeuU7iZPirP|,3[gs@semUM=>');
define('SECURE_AUTH_KEY',  'q}ddk5QW~k2axM68xQP<pg#hfg9DIsFFEM+L-Ew|De||iyt8&4xE>{qY@<}5x;it');
define('LOGGED_IN_KEY',    'eQx9Tx-X:@2y0.CE*azK* 9jhcp#nVb_p@kB6:5+b&:[RoeXlvz}ZlmPrJaxqxZb');
define('NONCE_KEY',        '#BGpa:/ID3Op6FI^t.Q9q}c={jm$-iy!s_a1cKAl_^SiGD{`hpI78NMNB=:DVVnr');
define('AUTH_SALT',        'N7qM7hM9jT]w)QFT>i!S<v* DaB-Q;m;>De6#Q@T#EeUPNB)FGcG[YxklW^wMlNZ');
define('SECURE_AUTH_SALT', 'bo9$|]fL!Ft<*_`pUj9d44%jb!hdplfYWDrM}nWeCK:,u~sLF@AcvJU-7.#[nnje');
define('LOGGED_IN_SALT',   '.5TDO!=<Na7SJ/CjZ&L;s@$xm%3:V9-dUK%K|D9AOQ]*8ffol.yn=U7qm//3nA#y');
define('NONCE_SALT',       'U:ij%Ns4Sg{Aol,w,2V[EeD|R)Oceo1>U,^nO^W}M%HUT$BlYqY/(^[^|UIa3vC5');

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
