<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache


/**

 * The base configuration for WordPress

 *

 * The wp-config.php creation script uses this file during the installation.

 * You don't have to use the web site, you can copy this file to "wp-config.php"

 * and fill in the values.

 *

 * This file contains the following configurations:

 *

 * * Database settings

 * * Secret keys

 * * Database table prefix

 * * ABSPATH

 *

 * @link https://wordpress.org/documentation/article/editing-wp-config-php/

 *

 * @package WordPress

 */


// ** Database settings - You can get this info from your web host ** //

/** The name of the database for WordPress */

define( 'DB_NAME', 'bitnami_wordpress' );


/** Database username */

define( 'DB_USER', 'bn_wordpress' );


/** Database password */

define( 'DB_PASSWORD', '' );


/** Database hostname */

define( 'DB_HOST', 'mariadb:3306' );


/** Database charset to use in creating database tables. */

define( 'DB_CHARSET', 'utf8' );


/** The database collate type. Don't change this if in doubt. */

define( 'DB_COLLATE', '' );


/**#@+

 * Authentication unique keys and salts.

 *

 * Change these to different unique phrases! You can generate these using

 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.

 *

 * You can change these at any point in time to invalidate all existing cookies.

 * This will force all users to have to log in again.

 *

 * @since 2.6.0

 */

define( 'AUTH_KEY',         'O?dlCr+q8:Hk/bsG<Syq6wVY)=(] ]zUHg*:qWy5?M`r<m)),()}nu_vf-gz~5y.' );

define( 'SECURE_AUTH_KEY',  '%pL0h!5{a5~%9Fkq*#a>06E*@aMFhXxyXHhdWD`h%rIWtqZl;IhZ;Flt5|VXu(c{' );

define( 'LOGGED_IN_KEY',    'J&Vyurt7T.{=|uW+[!.W$p6_SsNL/6wc:hBC?#w)3q~GHsP$TVr`$ohn@ <I|UCd' );

define( 'NONCE_KEY',        '54>==+&swJ*~G S)XCgegc%Bl<luTn2ETv9OP![=@7u!]/uu+sR*p.O2?ZmLYNs.' );

define( 'AUTH_SALT',        'qAhZVY*3TgCou7@4[Hz:r9RZ bH bY|e;36%TRp0yk/=Pt1E:iPdcu{RQXW;o@l0' );

define( 'SECURE_AUTH_SALT', '8pDKcuJ&t;2+}TAWDojr!Q;jm1=vyc^yezQuH-}R-?XJ}v;|r:#m&wLeV@1o-iPR' );

define( 'LOGGED_IN_SALT',   'fTA;B,l>0JdO[y]WWvnr79 ?T4ldUE#JZw<6~]Vv03|lFDba>)z%{nZ=;QS0 ^Tp' );

define( 'NONCE_SALT',       'g2n`hbzuq5:/Aa.>zT3/$:]lsCLGL=$ZXJ5_zGynxzGgw&@^GKaIlaE*Xb^]I-|*' );


/**#@-*/


/**

 * WordPress database table prefix.

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

 * visit the documentation.

 *

 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/

 */

define( 'WP_DEBUG', false );


/* Add any custom values between this line and the "stop editing" line. */




define( 'FS_METHOD', 'direct' );
/**
 * The WP_SITEURL and WP_HOME options are configured to access from any hostname or IP address.
 * If you want to access only from an specific domain, you can modify them. For example:
 *  define('WP_HOME','http://example.com');
 *  define('WP_SITEURL','http://example.com');
 *
 */
if ( defined( 'WP_CLI' ) ) {
	$_SERVER['HTTP_HOST'] = '127.0.0.1';
}

define( 'WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] . '' );

define( 'WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/' );

define( 'WP_AUTO_UPDATE_CORE', false );
/* That's all, stop editing! Happy publishing. */


/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', __DIR__ . '/' );

}


/** Sets up WordPress vars and included files. */

require_once ABSPATH . 'wp-settings.php';

/**
 * Disable pingback.ping xmlrpc method to prevent WordPress from participating in DDoS attacks
 * More info at: https://docs.bitnami.com/general/apps/wordpress/troubleshooting/xmlrpc-and-pingback/
 */
if ( !defined( 'WP_CLI' ) ) {
	// remove x-pingback HTTP header
	add_filter("wp_headers", function($headers) {
		unset($headers["X-Pingback"]);
		return $headers;
	});
	// disable pingbacks
	add_filter( "xmlrpc_methods", function( $methods ) {
		unset( $methods["pingback.ping"] );
		return $methods;
	});
}

define('WP_REDIS_HOST', 'redis');
define('WP_REDIS_PORT', '6379');

/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache