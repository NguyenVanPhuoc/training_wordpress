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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'training_wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'pW3^g/YTD gv!7ty[b.#UZ0{H5([(-Lc?s2]_?Ta/VODk*Dea$#4L#F:C6KL(FDP' );
define( 'SECURE_AUTH_KEY',  ';U?*4(@ID5qP[wb%V:XN%vq:=O`frVo3P/%qxj BCRb+YB8N#t<relE+A%,+vM_-' );
define( 'LOGGED_IN_KEY',    'Kj).wez$]X^.(_aU%gweVUg*v[*bilzvB07tb)nE{mE-HR/G#w)Xbaf.DEBJI<EE' );
define( 'NONCE_KEY',        '.u2sKdXx ,_J9BOLzh^pUJ7~K]xi;RW:_gbM><nRdl%!b^I? |0,NUM4jxND+BA,' );
define( 'AUTH_SALT',        'mG2tGVUHR~G:9 o:0o3Ul-T3~FmY|ZTti h~sddpkAx!|9*lev&rR-jp}GWD54J_' );
define( 'SECURE_AUTH_SALT', 'iC+WvumLD(TlY}xxJ/7j4,pnbv>:hv$M{LTkp}?.R;|;HQn4@NU./J9:lOMpabN(' );
define( 'LOGGED_IN_SALT',   'Q?>(.$>``MPmA0&XE.H|eeKwAH3-;d, ;VR?%%CyWSL$FmjexjB;S:dq<ZbVkp{t' );
define( 'NONCE_SALT',       'Pm)IMR]%QJ6vp)7h}wdJX{UqkyHTTpBp2jBl]`56a.p%2pidpJL#6H>&0)7o,w_W' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'vp_';

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
