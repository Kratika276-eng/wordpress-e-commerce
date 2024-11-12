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
define( 'AUTH_KEY',          'AE$DcCV5ju;5piXA`Ej/HoY*lw>DDLrow.9^AiW5;$7o5i1iqPAp[616!BT2j%eB' );
define( 'SECURE_AUTH_KEY',   'ACj[IX-{s  Uvkr0H%aj9KACE*>fiRj2&ZXB|-/~&M-+5w(%=LI#=?o7EH@J6MA<' );
define( 'LOGGED_IN_KEY',     'V=P+qJ?1U/Y^c$w}q0T;M-bv$Twy.)87x96dSQQy&>HC_RtI0YwNu)WtA_dZmu?=' );
define( 'NONCE_KEY',         'p/-zTSq%PA%=>$U8`=CNTwj&yZieE`Jj@nkt;~1@$tp4zl<ZB7b(x9,~Fjo3gNN|' );
define( 'AUTH_SALT',         'y#KTQ`JyOGzq12Z5MjB8,H<-_pAWIC7rd&9J)&?XKD-od(;Bc7?|qe}n=?$X0*q_' );
define( 'SECURE_AUTH_SALT',  'fF^t/?J[q}Ii~BbE$RiM!rp58G.6Ym K^E`#x:mxY>1@A7HohPTob=`oZkRMYnA]' );
define( 'LOGGED_IN_SALT',    'N9!T!&Vape!n`OR]6m9*EWS@Xv(B$Y0LFq3;#FQ<$j ha&;Q&InL:3vMt4iSXmxb' );
define( 'NONCE_SALT',        'RhC,u&W&J]e^HZir.G4CkjES=fc!^|SOo<)rwc4k=>`D+?06WV.wmd`B_kVWG+$,' );
define( 'WP_CACHE_KEY_SALT', '%BGtg%Zt1bhEvSP+3r~)BZyjLge`+wfJP{*+N80rkd!ya|1YrUOoB% Y`mLcDc0F' );


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
