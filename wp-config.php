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
define('DB_NAME', 'teknik4');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Bajskorv1');

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
define('AUTH_KEY',         '=UWM&ifWuVq!Ofq6x>;,nI;Hi%GP9R~9Wnf}:.@[9<gE6k|]f<v?7fM*)B+g`i+:');
define('SECURE_AUTH_KEY',  '7dSnp!x;+FN;A3R;il:oM;h1nIlV8hnbMjL30W6<h(Ejs,p/f]Njp8fxd!oM78}u');
define('LOGGED_IN_KEY',    'nv;JqS]%@+0ue%}#dcgH_zX2,1:tskw*&&R$iR><Y.5NlK G{pd7!vHt=]AHQ*X_');
define('NONCE_KEY',        'qZifZq|PM%?y$}WC8qZ$6:SD!=i.|NZ 5sD3]Ex^=}e^^i$)44O8aq/aM1<RKBv*');
define('AUTH_SALT',        ']TXY4QHZDCp;QoMZgy)nr_<yP]d6e>^*B)@uDp(sOsv:uf:IzBtsEhQ=XKaj Kwc');
define('SECURE_AUTH_SALT', '6%r|kb*@c0u(d_%+b2Y+1?{<LpTF=1p=q1Z1nVjsAqVWz~-4oQI4B&Kw2*gA_Wbp');
define('LOGGED_IN_SALT',   '&YA*8W-EZ?xk9ms5 YuItL%=31l-h,{Dx1OB;A%~M9C HCP$X)B--r0@gb/s-QA.');
define('NONCE_SALT',       'Gz?nG34]q~akyek?Ask&C`%RFado2@Q0ZC.4x`-=vD??jq|FX1aZ|bP-5qWX2?@t');

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
