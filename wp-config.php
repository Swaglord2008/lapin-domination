<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'lapin-domination');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '}U{M{;XVJrlscd!>gkKd+Xl*SVsAnuZbjW!w]UOV[HLq~a0+r5-,b<)[wZW`9<8)');
define('SECURE_AUTH_KEY',  'DSZgEK<3|.wM-LD?A3M6_;oz()Pl[vLv{3:$O_y_-9uo@5L-Ws z~V!FrUNQTr6j');
define('LOGGED_IN_KEY',    'kS+J1PS{Rb07q**s!{6qYa8C&/.%VTk)X6=>Tv3*E!R|,n3HWfx !}&LueFXYFJt');
define('NONCE_KEY',        '@Eq4Azm>+k#?H}<+_W(-xnz-pX]{FZC#@KnhGuwr#/:1gJB ^oTn2|A|>fm)ySLJ');
define('AUTH_SALT',        'I66o)^IO-+=0q0N{.Tr|/-Q^W_5>7FYC-L>@X$Rb{=Js=I.BS&;`X:Q(=i(Ib~{Y');
define('SECURE_AUTH_SALT', 'Vrx^hD2$S>~Yd](+jfPzCIg-kq%$=UVX)}^V]|),C)+J7,cUnig:!O6ghs|1-!Oy');
define('LOGGED_IN_SALT',   '}gLj#Y|/h*9+$M.s#vvMm:yjoyDfdH,e:~@8_sF]u?ct#?.0BN1(s;Dcc:(a;0Vf');
define('NONCE_SALT',       '8:;|- 7RnEN^nL9I$]rp8.eQ*:1-P#1Y~M ekE^KSG>kV:MAE7[Q1Mqn8]h C#kV');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'gmg_wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
