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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'spring_wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '@,D&u)69C5&:(;snt Z?QVGrTvslIQhOtcElc3)p qK+Dkyd9`1uHX6h*H ?t+ L');
define('SECURE_AUTH_KEY',  '(TOsQ7Sr^Yee{!nc@4s{C-12Y+n`Zo0@Pl&CTjU|()05?-rTx]c|APlI5+<64Ny1');
define('LOGGED_IN_KEY',    ';K`5x(lmD_~e[5oz|{B+R-sJGLmQ}nUorP9GB]li&C>HIi_-=5Aj>=?1G+,MuD,p');
define('NONCE_KEY',        '2Qs{@VdffH0mrSLTT`SI:bx;5-o-|MHB~/n>fc<2,6_em5`3b|^<;U!AW]5v-xNi');
define('AUTH_SALT',        'I?irJ^|J}|BiYMYHrv=S?epVL9=>WVRxy9+[/z~=Bwkswf!w2<Bitu/Rd8L*)qXa');
define('SECURE_AUTH_SALT', 'h QO&b.5+zL-{3g|`ce VdxL:5L`2=@:5U^-S_;+SRQ+X+:6^FUx=S3qm{Xj^oFP');
define('LOGGED_IN_SALT',   'Art~6<`c&SY?|0zmfIO35uR37VuF6l5f/ZT]*[yrIR2aiE-+m66dxNz&FNm%mARh');
define('NONCE_SALT',       'SS7YTutAHj}k!@g$F7|5H9o:j>)rLC+(0o%=.GYS6L#(.7wV/i5w^:l-@}j!bkfl');


/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
