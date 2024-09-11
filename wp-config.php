<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_periode5_malik' );

/** Database username */
define( 'DB_USER', 'MalikOmri' );

/** Database password */
define( 'DB_PASSWORD', '08082006Malik' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '/tvQY/$^4iZA@@9o>#h6k,j0a!4%ip3vY/,O~zzeiTX/&u:_]DgS.DAz^;yXl_3<' );
define( 'SECURE_AUTH_KEY',  'iL>|0*N+9WOg//[TFu+n;r/o]%KfC)+=)4cZ tXh=>bm,4vd)WttF*hE,CM8meWs' );
define( 'LOGGED_IN_KEY',    'V-hZ/i`<!Km2B;w>fc8 /3^#sv?NFw|OwU/,cny/!v`y*[ILn+5.;{LfQ{3Ng)G*' );
define( 'NONCE_KEY',        '`dKGZ`)%^yZI<=xJ2G]fJ.!O]9<Ob(r&29DEU`yO=h,mW KYKnu!F<.K$m13Y8>}' );
define( 'AUTH_SALT',        'gV9|>G7)^HQ/[}nMjA-=X,XWvE1|% NYcEb6dS@@3`=5)fU= <mKsmqj-3!)+ ;H' );
define( 'SECURE_AUTH_SALT', 'fx[fDqAheB)n|o)ife;=][R@@7dj#oMqSWu[)!9$Lw~ogNo=Sg9wOi0gG2!*:D~E' );
define( 'LOGGED_IN_SALT',   'g=VXQZv@&vD]+1/^l!Lr51p :.kR vK^q/.?|s$+8{J ,+?2l&bF`d]6S+6-*h=a' );
define( 'NONCE_SALT',       'ic6cq|p*_F_OC`0Rq41(IZ6+Ku^<]/Tjj)E4N]S+(la`UCyj;NS|)K;iWEOd&8SR' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
