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
define('DB_NAME', 'decosweet_deco');

/** MySQL database username */
define('DB_USER', 'decosweet_deco');

/** MySQL database password */
define('DB_PASSWORD', 'ak6owLtJn');

/** MySQL hostname */
define('DB_HOST', 'db19.freehost.com.ua');

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
define('AUTH_KEY',         '6|kGo6e(vBgJ_1lKtpLP^l4)`vE6gO(SNe`U`gOnx-v7qT/?/{I3=Emj>wRh,?nH');
define('SECURE_AUTH_KEY',  'XJ0Ra+ED&Ie_KAdOnsfoYXfrjXLB7Hog}I.ZAx8s|[u~O*t~eTu},M($U2Wpo>Sh');
define('LOGGED_IN_KEY',    'vR0%D.9HgkmyPZGn1hbH4MLMm7QUistCe`yVsMSg&z*v*6d59;|.%:[x~RQl9mB$');
define('NONCE_KEY',        '}]h`[);i=8pf]=~a/Cd+_T5bPSh]%+3lr 2sbcY/#0i|*d$]21A>(5Yo2JH=OA:S');
define('AUTH_SALT',        '4& y|M_p6hpCZ0_X,?%F>~fy;@=Z$h}k85G[1nL}|Vy@y6=f(&wV%pi[Vx@U0)7J');
define('SECURE_AUTH_SALT', 'vMH1}wC8sy7Xx*l2d(4a$G*oB<K=blz[&JcIuz2|.3itm5Uqi*Vt;_22K5>9,uk]');
define('LOGGED_IN_SALT',   'mPerDe]l(AmT(=(_46#&Ry3HSHPj#,*tY`_c~/d%C/Dh|dN{:f :?*-k@?GY3H!l');
define('NONCE_SALT',       'qfvDI*.$TW.Di:.B{Xn:47H`w4.mtm=1<)Aiggl.8b(N.~U0H{Ztff$QZ=8xHpQL');

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
