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
define( 'AUTH_KEY',          'XHfPlB@?bxZ<%1:(yr0=c/eH$CCPQ3kO-9LmI~eKjt(,~qfkU,X::9|nqT,[N)D<' );
define( 'SECURE_AUTH_KEY',   'A47Yz`CO^6g]pmVM0~j}Nu/=dBV!YF<C!Oi>$q6<4WDw5^qpcW.|Aj_+|i*YEQ5T' );
define( 'LOGGED_IN_KEY',     'do[i.:d? TW[/}Ql&}2UN0RCEQ$2:Q`biPmljmwH.w<[}/xvJ!hB^Eg^TM@<]Ohr' );
define( 'NONCE_KEY',         'nXY!2MA.)`8N5JTG:{H>`!oZLHd?gAd8JaFXU`L=My UqHjlXhcXE2hTN2=.]UbG' );
define( 'AUTH_SALT',         '~4`$=|[xYQGRV$,eYY)/:O(|jqEchAan5:h1p6X9vgPSb3}eX*k|jIJk>o%<<_oB' );
define( 'SECURE_AUTH_SALT',  'qK3y-dqM<<jmK$W]@RY)%vkjb#0/VndeaZ9tTM^uhJFjUaJXDxJD7sq.ysq|q-M=' );
define( 'LOGGED_IN_SALT',    '5xx `F8]67K:#MdrHalSW [T B(O%4mYnUPSBZM,ZVb1IyB18koGp%gQ9}%g;w@j' );
define( 'NONCE_SALT',        'MBT}.|,2Fs}oOsS%}7~,Ok=Hqr_Ucd<0hdT7Xd4%K+kkC-7r,M2,yx<IFywJnhzB' );
define( 'WP_CACHE_KEY_SALT', '8,,Azdk-8#73^7QOa&aNShj;rQu-gV dU(%x@y|fSgg~z=&0x2@E2Y)rO,n-Cue-' );


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
