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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Tbilisi-urban-assemblage' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'LQq5>;0;G~uzo?n{E)8Go6`!vstpx{ND%rS]-#_* pxF><K]b<#8Xfq.P4cx9a1%' );
define( 'SECURE_AUTH_KEY',  'y!7}5dFf)b!HW|;c7(WF,z[wu>vP[j6M.smz+k}6:9d/SR{1o2XrVGByS:,a&$&r' );
define( 'LOGGED_IN_KEY',    '3?RFYME+183X~*[)I1$s5,mIk|duC+f2f-:2Rujxy&ZPI3FtY$OsUvRR{WSd;fKi' );
define( 'NONCE_KEY',        '<2e+}9_/,K_cwdUJrjPOn5zCCjiAj_~i{PcQdy~Ici>fk ,/~1)1a9b_.?2-&Dq6' );
define( 'AUTH_SALT',        '4m1IQo_!=33: %2D!J9v;dI&K;w!*pt]MvO|xnw;*DR/vq8(.`<W%g)QMCq,kLsp' );
define( 'SECURE_AUTH_SALT', '.yNGu7J2uA* XB:p% s>HGR=*6$$z0]0cBBSNZFA&Yuetz}5r2 /C[cQvW+Liy[G' );
define( 'LOGGED_IN_SALT',   'wx:5eQIiv=1I?jTe^7YbeksVAi,Fa1 zimb+f39`K$HYeTFC=8]:-caSW/s4.Ei~' );
define( 'NONCE_SALT',       ')6 h,;^#N%;3T~Ue=M`a%bTO_WrKBT+bCayPjcVN=Xe@+rSQ?wtr^9=acH-Hs6$K' );

/**#@-*/

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';