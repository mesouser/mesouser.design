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
define('DB_NAME', 'mesouser_design');

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
define('AUTH_KEY',         'a LHyb~BrMAz8a<eUrvL#U~6=^pJeq<z}/]^t$BbWde-{xE|wHtzS+P_0/#=05%[');
define('SECURE_AUTH_KEY',  '}G%=krQP.^^7nrRwS_XG|#&ViXO@I.jBy);K|ajA_L}F[jbQ!8&<T$<9%=FT7<i<');
define('LOGGED_IN_KEY',    'arG3wdgb_{Q}^Tf2TlggwS=-]`PhG1kLRg|h},Lqd 6*d?|Z!T]Rv,Q0PEy{@I>%');
define('NONCE_KEY',        '.*6D9Z58<gk63d9]TfFRVWS3,O(ne=hAx;J::003gHylY+ !hDBk_G^>W0slN3/{');
define('AUTH_SALT',        '/6b@[CbLP}n?@+THxI[iX.6tN)*H(2h.</z^CqG!FqjJn@>u2P#i,8&OBS<.xu31');
define('SECURE_AUTH_SALT', '^;Jxw>i9,jVq)7-U(bw}>^*:$<mUiIc)Y3rXNnfsV,/!Ti/o9yf+r}PnIA6[Ky]8');
define('LOGGED_IN_SALT',   '!frG~BHCt(e_<J?Q!D+|8jCJ#l1S)Z%ynMZw!eO+lpG^Ad!}z,qEU6^AsEYX)Jz<');
define('NONCE_SALT',       'RMU8DXYcS$(@8pE@kl)IlSWhocyl$XLF>2iYbJzyWpj_jo!5k|GsSwJEJ532uza}');

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
