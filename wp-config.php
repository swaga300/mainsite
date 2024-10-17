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
define( 'DB_NAME', 'bdsite3' );

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
define( 'AUTH_KEY',         '~pfK[1zB{B)sO23x4Bfu{BW[2AU(1xDSlExq;]k Tgf8{i88zu p#Q %]]FIcI,O' );
define( 'SECURE_AUTH_KEY',  'M{! *4$k_&7, _yy)cg`,#dV&DgRTDS-53389?P$D`X+!w$yZ|ff1<MhYYRQ_VOT' );
define( 'LOGGED_IN_KEY',    '`#-`U8>.l]q/f~:Ic)dEyed<Av]m]gPZ![;:c@1DEjcVI{U5urb|xYIv#W>;w}a=' );
define( 'NONCE_KEY',        'Y-:FuGyu?*>Kip($T5& =zveG[-.3ECtdmK32G3M/cs[al#5)pnhT{odI!gp`E#$' );
define( 'AUTH_SALT',        ':f)]1/zla[J6+OrH#keA]?G6HF%[[d_hOUTF;fzdp@-59`w,lo#*r&^m%{rc*~jh' );
define( 'SECURE_AUTH_SALT', '#K-Cc|O3IYO3dCI~_tK!0[}ass0`f>i}_&0P-(L*j=UJpwewn!9j0@hNNj 9zBR7' );
define( 'LOGGED_IN_SALT',   'hMWMp0XjYWZnqx O+7c8$B5),Rqy_aQcDAukn@hY_~!?z#L:zea+7IB~Uk{^Wd6]' );
define( 'NONCE_SALT',       'ieO6>^|Y2@H;/0F*0>*fax-vgzg%/2/B(t{!.C>Xm_m>I_Bb[><[9Mcd2KFq(di{' );

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
