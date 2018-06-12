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
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define('DB_HOST', 'mariadb');

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
define('AUTH_KEY',         'v_3TA*<$VMI=vm)a|z+>M]xr{Q%;6V>S#$;u4e#<?)(:p.(}P^Mn!|8>,tQkFZt%');
define('SECURE_AUTH_KEY',  '%QE6h+jq_wSLOc!F]Hc!Z~_qGshs:ZFl#v)8&Kw&`cgpRD4v^iD`#{iW}a`0}v2u');
define('LOGGED_IN_KEY',    'nz(<2F+<pmkvcf:1z?s#((CdVQ]r,!61:Z=Oq]B_<tc r`@,f}x%F !;M&jMmL/g');
define('NONCE_KEY',        'cQtye}k[dEWed#`a8bmBWX.k5~m>HYsW+q=t7y%7O%zg~)?UtCH(C8Wib??}!7[3');
define('AUTH_SALT',        'Xum%vI[ >6=?P/ebB031(5mi@@{g&?%N<bT!j optdtgcRGb5IV+~+)InPt>YnS@');
define('SECURE_AUTH_SALT', 'W?sB=-E~&W:57>[aH4Hx)hCv65&LLg}_;|=0TE-zS`d[exPn^0gR5m9/] w?LZk=');
define('LOGGED_IN_SALT',   'DI$dSH%6CGACb2Wf;Ya@fs#C OWYE.QdHanZy`F`pe!g)Tupns83Cv*$&djW{sup');
define('NONCE_SALT',       'g$aubeqE$m}%q=M{pHZXEpyl,AC>7,,/_B@]Z:FR=I%V|Cr,S2kloOMjo>mvs1cA');

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
