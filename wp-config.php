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
define( 'DB_NAME', 'mywp' );

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
define( 'AUTH_KEY',         '!4{?jf|r[Yd|KYBu3=Q`c3`nw&*[$3Qjw&<{6NP e^uA%R ZCihj=F5/(a-Ee$sG' );
define( 'SECURE_AUTH_KEY',  'Nq+tw261Vz,F>IfwSgHu=zQ$=^)iAGu#(^B?&i;v:C6OW:f0>n=vnPC-4DPyb!GO' );
define( 'LOGGED_IN_KEY',    '#Os.*/^^QP[/CRKEO&Z:^!wVVIt}~,bIFI:(h3UXU3A^Hym)-Z7gFj)u7v0._[.g' );
define( 'NONCE_KEY',        '6|r&x-D/A~,AEe#>o<p1_mh5Y4ea1F$U%f.m_,a-=HTGwrtTvChkkFe.jxf#todT' );
define( 'AUTH_SALT',        'J[{l 6H4X5#3eP~( vaRF.eSvD}Ti{3b_M@l-hNnk!l[:>NP0>+,jD*i,aki&Tiv' );
define( 'SECURE_AUTH_SALT', '>h8^j@P*(<4)lDTI;F@TJ~=?.Uww>JM-Z ]1&tB,Zv[tcGB1AKf)vAhiBb][pT!?' );
define( 'LOGGED_IN_SALT',   'K^c{>>t?T:rAG tGA[?~iMlkdK9wwyE<6@.SPHMrbiyoYpY).)97~YcW _vQ,w8$' );
define( 'NONCE_SALT',       'Fxd%xaP+7TgM8!3][D5%jgj=W+h.N+tIr@4-6r?<G Tabl?979Yg<f]PM5_jnWy|' );

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
