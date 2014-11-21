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
define('DB_NAME', 'denimhouse');

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
define('AUTH_KEY',         '@0UN+mAVGD@D2g5+iS(fap@W^-6]UkZgvqO> *+TmO@8bjd0z{t!5KzPb RBv[!k');
define('SECURE_AUTH_KEY',  'TqT+wv~q5(UEx`yY`#ny9hV|eGhqZ`Z~7AQVL_)P^r$a]`!-ZqV@P5uL;O]) f[%');
define('LOGGED_IN_KEY',    'CoPaI;LMT028L-*#KO&+}|L<t3O`FN%bg1^;%kkHoYo1hl|U+/Ml|W)MqfS{wC|e');
define('NONCE_KEY',        '7qD*bovCWb6&t&ISx)W;*bK%:7o#bP`tkBhDi^V~F>`n1BI_PM_ ?Oz{9/^R>do!');
define('AUTH_SALT',        '9y33>enoM:)hQI<+K%ig[Xl9=T!fWjZxAhMtXVMDq:!_$gA+x+:v2A]Cq0[Wq>x>');
define('SECURE_AUTH_SALT', 'Get1:+QaU1F(c@rsT=P[_W|kKhP/v?`FlN5?d@q|<S>x6M0:8{yD(+oWC&cn5~n$');
define('LOGGED_IN_SALT',   'z8QO/qdVj#u$vL*Q_Ov (Ia|;JXX?{^x%1d^>xo_g8 AsKcv+FqeK1F!,HI^nKp?');
define('NONCE_SALT',       '6*?Kt5/W-x;Mq.Or-:r~ET.r.dDfYy/! 1Kds)qTI/CdTf8iFdWXy($h6(lKfFgC');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dh_';

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

