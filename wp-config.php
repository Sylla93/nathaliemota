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
define( 'DB_NAME', 'nathaliemota' );

/** Database username */
define( 'DB_USER', 'Sylla' );

/** Database password */
define( 'DB_PASSWORD', 'Ayana2020@@' );

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
define( 'AUTH_KEY',         'YJee{FP>U.D?$mJ^AiX(^fxy/Ojn0D*C2;l3(ghhb5PJa[N#2DsUaL6cO_4Gr_z:' );
define( 'SECURE_AUTH_KEY',  'F5G/ci*g<Z,eq/v&L41l#u,c7_)_hu2$5~7Y*Zc)l&4Vv!.e|v$rSn.,b27iM0/x' );
define( 'LOGGED_IN_KEY',    '/h[fPqv$^UL? UiQQ-HWakkS@)/;qMGDTwv8NawG8.ydY9/U-fHk=L=cuuxt6Jv%' );
define( 'NONCE_KEY',        'r{7`FkKv]7w-+E@5muf@%LOpkZb,-1cI>qKgO<-)7iqVtJ.4Iizj`Vm9y4;D~f>z' );
define( 'AUTH_SALT',        'AM[@:XlM^}K2Ay{aa*aQCGB4)urKWk_pA-htwXT|g?aX1cRY,ei:Xa6-km!O={Rq' );
define( 'SECURE_AUTH_SALT', '%tnOCA$7[twk<KXWO&Rc|N)u+*in5GSE!Lt4>+kYjr$zXVX]?/GxLfDMZsY%s/HJ' );
define( 'LOGGED_IN_SALT',   'yXq6 Uc/n4%7oK*S5Z|Xvb<m%F_4-S!V`%:{,5*|x6M5C[^Q4vD7)=cj|y?9P]6b' );
define( 'NONCE_SALT',       '=pycHAe$`fd93x]fy8WQG]i>$]ZV6epXZ)M7/MoOK9Pwk1:DjH[t!x~!oUlbMc_!' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
