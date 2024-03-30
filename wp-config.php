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
define( 'AUTH_KEY',          '^}]4{5rGMcP)ps*!(UvuS)_lDCs8oi-n- uaJu6;(!3+IdG8.V<fWz#Hvf[ZG5W]' );
define( 'SECURE_AUTH_KEY',   '3H#ZC4jbQaKh$~D1$e:G/|sV45FVBH$@$C-0A^H_]wi@HU:.+iEE{k_f=(jJb9h~' );
define( 'LOGGED_IN_KEY',     'tUCFur?74DCJb/uAG,r9!Oin5/#W8<jD#6x5/Sur}J}bHK2_NU)%4m4Y:a-/I4G^' );
define( 'NONCE_KEY',         '|OJ#&~)Gj&&bK|CU=-Y| }y(U2ElG;_3b%?CDz-K=~$)hvU2kf<a;nf=6iWa&(?D' );
define( 'AUTH_SALT',         'WAB`uE!2BtO(%2TS|9<RA0n-Oz8/0m@U7)~N9WU$DT9$~`&ip7 Peak08g2AZnYc' );
define( 'SECURE_AUTH_SALT',  'm4ECJnT[T/ Exr;yIDbO$xYA-6qUzk(#a@)9nVI^[(upVaI|EUC= S+9?jD#_Nuo' );
define( 'LOGGED_IN_SALT',    '0$Y|!@o-w21}NU4C@<Jq?O83`klc+t:V6-H]H|Y#{S?[|KV<gd(F!D0uNdlu)<k8' );
define( 'NONCE_SALT',        'OTS%~ND4g)g}r|Oh^/@}fyqjE3s$1FYZlX*=ys(|#gqfKCq)&kBs|8G~NRyE&;X3' );
define( 'WP_CACHE_KEY_SALT', '5iSU.Eor][d- @#u*i9J/p/k#O,c<^ !n;^Aoc)H^K:_lHrm9d00^-hnN(w9:D!7' );


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
