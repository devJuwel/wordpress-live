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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'github-live' );

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
define( 'AUTH_KEY',         'sv>ZouYt7wwGlLLWrfjDtMA>bELTgj=B!UJ:9mBF kf!|q:$naTr{88TdbI|[[Q+' );
define( 'SECURE_AUTH_KEY',  '<%kLK8|cQ]cR915$fn=Y:<!$O-A5iQz[kIe]mZgsZ$]e`PXJy R)20YJPp.K&pp^' );
define( 'LOGGED_IN_KEY',    'xKG{W]1HxX7q<822e)3D|y$TZ)37%.lzgdwq(9]dz(rTb1IOEhJdcF6dcB~(_]H9' );
define( 'NONCE_KEY',        '_0]l.fY1wBF6P]f[*`4lI<1M-@*w_IT7e^Xr,jEd!7vf:,%rx2w`VFt-8RW@wnEk' );
define( 'AUTH_SALT',        'E]./dhKp~-Qk5(@Xoqd7OqF)QnKK|z&PDkDAJvuXh2E*1GOMjxY5tSKY`yX<q<Cz' );
define( 'SECURE_AUTH_SALT', '{GpxubY>tmd5f$v43Ib7hky3F|_rg[KB[l0u$O;V4WVukVkA4PB[uB$Tb*|?GbLt' );
define( 'LOGGED_IN_SALT',   'SS~nmEl5>t&>& |WGUb+mp8iCdOMrfZdd6l^jw3_,:,|NNjBdq?gH7s#|n6:Te;v' );
define( 'NONCE_SALT',       'zVMtr&4D6e~@cK&rXRDB#Q|xa>qQig30WHD_``&t`F=_anr0co=CS6-a#Pcx?D_t' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
