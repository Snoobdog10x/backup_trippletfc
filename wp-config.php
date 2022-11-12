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
define( 'DB_NAME', 'trippletfc' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'thanhanh' );

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
define( 'AUTH_KEY',         '(&F3xJ *e_L[=<|jEx#NaF?tfdae$Ntv:CI}Z(L(=cD;O+tKa+^o%dYi*t.I w!!' );
define( 'SECURE_AUTH_KEY',  '@7hqPkR?iFNOCYP%<6zn.3G+c+Xl4c0&i$$:Hqvj`$ds1SWr^2ILoSv!c^61)AMI' );
define( 'LOGGED_IN_KEY',    '/Y9)Zn!S/sm_:P_EbFf6%Od|OVHM3K?PRWqZ@cl+QN&-1qcsfh-W<{w_B]0}N%5L' );
define( 'NONCE_KEY',        'O<LmAxx vbwWC~TG$M4e,rOb]Vs,R *JFnI]dXtYSv, 5tqE^>ctV7wq9-9K2y6W' );
define( 'AUTH_SALT',        '4U/6`Cf6qzNI?BRjvfUJeGdb?2~U y8COqbvr;Hf)}K.9zd) {%<a{_F/hIQ ;~C' );
define( 'SECURE_AUTH_SALT', 'e*#L,6.db6`z2BBi[YS]>bbvz;;*)XOHv1J))&O5.k,y3%7iqLw)SJa}]PQ5Hb(U' );
define( 'LOGGED_IN_SALT',   'Vb|BXewUjPzGv&uO*&>41l4N.T4:/,Xqnb!7rY3m`ND*;-wVVb_Z!.cDk/W_tmMW' );
define( 'NONCE_SALT',       'jq(&6Sa`+Alz.BhGnoDUdbI$A.OkMp4DH(1F(VS+%+nVk&5KoFbQ*-]JtC8V6`m(' );

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
@ini_set( 'upload_max_size' , '256M' );
@ini_set( 'post_max_size', '256M');
@ini_set( 'max_execution_time', '300' );
