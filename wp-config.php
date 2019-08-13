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
define('DB_NAME', 'trimurty_patiobar');

/** MySQL database username */
define('DB_USER', 'trimurty_dev');

/** MySQL database password */
define('DB_PASSWORD', '6TP%8~m(QDUE');

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
define('AUTH_KEY',         '2jDJJYV=Z68M1y`s>mc8rGbjT6+^Ofl.PH_=#JD<]J&m[jR^X;R~s<ii3%a)n!M)');
define('SECURE_AUTH_KEY',  '_xnVpH@Oi#EF01eco.o9=9%ERmo?V+CZ-#g37U[ NZ,&%^%|X&k;y/6av5fe:1c=');
define('LOGGED_IN_KEY',    'pNZ}zP6,Tn|8?cpb@-cm 6vfR{q[HJBGphi;r-ylOc&I]=W~Ip,Q%NC:wN(8gC2 ');
define('NONCE_KEY',        'e*G)4{J4#{qGTiG#R[!lw Si7f2!K74h``h.moi9/6#iat|KO^EeAIB~AboA)9bD');
define('AUTH_SALT',        'o1/0g3`KRebIYg:8plz1!MSjk<<pqJ=dsKuj7CiISrq4>j_q&i+~se{T[i&DW9gA');
define('SECURE_AUTH_SALT', 'Er,.jw Gdov(LP|>{8]|S*.XF-[TX~.TM8G?eV}(n)gF+WR4=$ih&@,JUY=fuk{?');
define('LOGGED_IN_SALT',   '4@4{&Gf;3<]o$VYkQX IY6Z^;7@.SlUt|LCs@~hF]g|(PpM1KiFM@N7vgD@JkTl[');
define('NONCE_SALT',       '~E#]NUjR;w&eX1xodV%qR(4ZuaO#+A=x2Iudw.zL4uEt;3lc$M[HkR1j$2,!A9RY');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wppb_';

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
