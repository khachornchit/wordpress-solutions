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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '1234');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

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
define('AUTH_KEY',         '#<w;3aC3`VQ*dt*:VqY^a$[|#E&kmVDDrL$B&R^Czsi^d.5GhDui%zXl1zNi> J6');
define('SECURE_AUTH_KEY',  'R9R7U*{#e:qVv#Sp |$csWA:Ief6^!Ho:q3;SIo#yDD5bU@QrTEMq:95_Q3za.A#');
define('LOGGED_IN_KEY',    '[2[O9)czaAN@?m|f>[b6MOc53WvcF!ur>[[-*rE|USUHNG:LaMXfpK>(%!_sJF?3');
define('NONCE_KEY',        'A{EU=SXJ<)$T#<D4X[Y/V-+]G{2N?FP}!oIgS-SK<hRP^|i40Jg[/ZxYKY.bC^N`');
define('AUTH_SALT',        'TmS(5hV&K]yu{!}4&az:b8g3%<LkDa_@g:60iWS78(j{u>DNnsb-o OEgE0@dSHo');
define('SECURE_AUTH_SALT', '3;jy14d8?n+uR6Eh:sVs_BBQ8PilCiJ5bu;Ss&}^bu5s}>Y/I!j TReKDiXvB=O6');
define('LOGGED_IN_SALT',   'WuUBc{uINIh2I{*vgfO~sa#nDM,>}e2g]/c#~Rd:%|uXlbmC4lW<jIqHf]MyC(Y:');
define('NONCE_SALT',       'i$Hvw4|g0i:H^z,A,OqN^^pici|`<eT]yTNT0shTsSPf|txukEQ*K)IXK61ZnZ]t');

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
