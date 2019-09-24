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
define( 'DB_NAME', 'phpunit' );

/** MySQL database username */
define( 'DB_USER', 'homestead' );

/** MySQL database password */
define( 'DB_PASSWORD', 'secret' );

/** MySQL hostname */
define( 'DB_HOST', '192.168.10.10' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'xX^J=?Sw0I;:np!$+Y|Zf1)!}K 4=YrJml*5=klsV+2~m{r7nND;qYi@w!iXg2rN' );
define( 'SECURE_AUTH_KEY',  '-G8X^IYVZ)(w95l/A9a~N/XLDh|p|x3e{v.T }gWr)h3<]-n?!T>urcV+3:=YCY$' );
define( 'LOGGED_IN_KEY',    'o23Sl~OX$,8?:-Ml1f<DpC1U$@b3UxVP.xiSJ1#*+c7MKX,GvgD7NxjGZobKpHv*' );
define( 'NONCE_KEY',        'joC@zcdj<a;xW!(}X8bHy!{@{4cG}=i99r,w8Nh`*`m2geab8DdKN+|V-YG$dGpE' );
define( 'AUTH_SALT',        '#x?pN9~Q^o-0-FkM3LvqG[%8^5|okTaezF JvA!>n^%w%6zVyS)lEpS]l^xlBfPQ' );
define( 'SECURE_AUTH_SALT', 'd$q1%EG/$.%hWu^+!W+L{B)0j]cX@?zqH*dz8uOo^5}{|E<F;RsiXX.![G<n)-lO' );
define( 'LOGGED_IN_SALT',   '-mO32pwrLy)Ben}X(/&IO|<ygy=5BbGX}}pPFz+`iR=K:Y*nwsk=_V&wfl%w!qf~' );
define( 'NONCE_SALT',       'weOY*Q//~/_1FM3yP E_B~u=*#TXg7SkyB+/`uA$JK:Jwbfm^Nb?d;UiX0i,;[4E' );

/**#@-*/

define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'localhost');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);


/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
