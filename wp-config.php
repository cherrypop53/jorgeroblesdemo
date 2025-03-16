<?php
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_jorgedevtest_db' );

/** Database username */
define( 'DB_USER', 'wp_jorgedevtest_user' );

/** Database password */
define( 'DB_PASSWORD', 'wp_jorgedevtest_pw' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'X|?eoB`#j+_0[:{vvmcZYCMS}X#x)cP:F~qN/UVX:B31dsX!Kwd`hI}[mfC@iW%N' );
define( 'SECURE_AUTH_KEY',   '/vu0=#FhwK6sZ&Z,Oy%p+Fuyn(]k@0Z]C[l9)q*!37IyD-Q!pKG_S(_YTTQR`z|>' );
define( 'LOGGED_IN_KEY',     'iwOR>|}hA?Fy7<_zM:H~IJU3+/>[c+5[{&KL6c+q5zo5+JyP?5^/a&UDOAul;jHx' );
define( 'NONCE_KEY',         'X A83TU59c)S7{`~Yv5h{h^FFcj=?Q2l.YG+3|%aOU5mhDxa$l9PDIXdwTVx1RIf' );
define( 'AUTH_SALT',         '#g/OcXfx@V{p>I5G[+&Q~~`8`jhGmdKJH<lJNw45k<,%RcoC6zHD7|k67s#*dy(?' );
define( 'SECURE_AUTH_SALT',  'r]w/(&@-2(KI!,T~&+c(U/I:!jc0Q9XKD^F.v?mq*acN0H;GoK?x;A2@jB K84g5' );
define( 'LOGGED_IN_SALT',    '!LGxyMErWH[Yfs^~[#Xd0raqq7r(XxgN#=a7&N@%$%IG&$!^DlS1)BL#&B#.Z}sU' );
define( 'NONCE_SALT',        '(F}? v]9*tIOf_~0,c:_X~rG6khWmpWU?U^.ad-jGu?;*x[w^_$b}JYsD`Gx[oIc' );
define( 'WP_CACHE_KEY_SALT', 'e KT>>=r;fG0O`[?zXn9P$hPR:4`e~$lK.|xH!D_ET8cCJ0HL/8Dj!;.BCgW$l#q' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */

define( 'WP_DEBUG', false );
define( 'WP_DEBUG_DISPLAY', false );
@ini_set( 'display_errors', 0 );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
