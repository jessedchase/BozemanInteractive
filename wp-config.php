<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

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
define('DB_NAME', 'bozemani_sgbozint2017');


/** MySQL database username */
define('DB_USER', 'bozemani_newYeti');


/** MySQL database password */
define('DB_PASSWORD', '905\'K12m0M2T43e');


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
define('AUTH_KEY',         'I#*8PgDo}sf+71E.ER*{&,Qy~j$cWWNQpcRj !mL66gbF3,7LA8y978(Hweb`woH');

define('SECURE_AUTH_KEY',  'YpF;qBnJ%=0l` }@J:q#D5E@KJ74G2+O+0d}@i7p>?_uvt$EQI1mlv<T>PMu%{2I');

define('LOGGED_IN_KEY',    'iw~Q2yWm{k6rmoCPK!k4EF9*!(B~x^Vk)lo0$CE-LjT$+&+D7pq$fR%ZU[2NQd>f');

define('NONCE_KEY',        'Z]S)A5qQ5Z oR$bVr=`CcKANmALg)B**1@~6n>in_9UW:*s0}lF /%VE%s/kw5vf');

define('AUTH_SALT',        ',Jm)iGQ5Zq%>Wbn~i7N<}_:aF9R-~nlN(H<4{4HQ!u>|{|fB~TCjiBQT^pJO!kth');

define('SECURE_AUTH_SALT', ')[V6a8Te>Ts+~t!W~e{i.6H[w37TFJLbhZh:~:*(OT9Zvu2zgRVV0T7@L|^&o;`[');

define('LOGGED_IN_SALT',   'sf7w_f-aqtAnD [5Gb)AQ,TwVtQA-=q,8<-k^|q NeH2M$D-7fT5^RnWv>x[tA9k');

define('NONCE_SALT',       'iju~{cg*qb5/w0]+$ W8kl2e%<&2u+74};z/9Qs~A+7KO@Vx4{~Nlrkp!)VhH*s^');


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'bi_';


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

/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

