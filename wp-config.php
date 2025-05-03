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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          '8_.i2jHG0~Jfx0H@N)^9`%U6luj*Z+^I+zP^CtI*shZua%Lts99zQmOL<&koH]$,' );
define( 'SECURE_AUTH_KEY',   '@{2GovNlK4fJR)-=44FE@/+1X(/i!fgxHW2{=<JkSjyrecb@c:~J%H{N4[G;#M9@' );
define( 'LOGGED_IN_KEY',     'z/8>Jze.q$o7)g>PMzEk28eSS>+^1q_<bO=.9r3+hCHq^8T~{a/qYhYP.qjj!(`N' );
define( 'NONCE_KEY',         '!VEX*SOk!H_4v+mx@(m<}/>I<*a^p_~Rc3Qv*9{CUe(P+k5v$l!qs_hdN<&Y84;?' );
define( 'AUTH_SALT',         '9qGB.S2y.*T4 fJq}M]nsY]ETcARK#,QHB7mw#f.5[$z&xy<7KLL&6vYG3L$a9]v' );
define( 'SECURE_AUTH_SALT',  'D yxLaQ+M|)G~h@yt4.@md;H O+=D~Kwm4yFY9e]rSG/^CFqG.]V33(zFB*=BYrV' );
define( 'LOGGED_IN_SALT',    '{Ce|2WDv1i@098!slcaF|W;fngUs|m*lf2Q&C~.x;dl270%*XdhojjU5~3+N7|Wi' );
define( 'NONCE_SALT',        'r9M2qbDFgW@YC04<-_4tz6)RE)+t$.-tbf^&W!I[?(idvX^%bh.0*g`JcHAvn0ze' );
define( 'WP_CACHE_KEY_SALT', '^q?FWLm~!w*H!?o`8o4Mr6r)[E~ZnOifRl[VQCz^ac,0@)sdW}_X|;.t(H^_Qlme' );


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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
