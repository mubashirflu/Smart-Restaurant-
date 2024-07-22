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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Resturant' );

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
define( 'AUTH_KEY',         'W>-Vt(Qh_=W6*S>nV_]!z^5Q_[S8l13[p{864^)9PVmnQ-n/JNd00@4:U5`}pDR{' );
define( 'SECURE_AUTH_KEY',  'KWze` +]w$Z% jAf aD[^J4k6cPfX.%D#lY;e?S2av.emr]UxWdA9(D`YHa?$7TD' );
define( 'LOGGED_IN_KEY',    'k@AYv-7Z<?AqhzM(,cGuVWdc5Y5^*U4^M(}OXZMD<|jC*PKs79XcJzR[XG+}q{uY' );
define( 'NONCE_KEY',        '#PIN/y^%| yE0?U_VHUJ = e]Y<kx!xC@8tg#zQ;y+M55qQ<=39->elt5=PsQNa<' );
define( 'AUTH_SALT',        'T{A8L^g/J=IX[Vv;KH$4% kp).pZF2L%ag-Pjx]SqX7nM<++z*0$.91<~!qV;K!:' );
define( 'SECURE_AUTH_SALT', '383(&2<={y+Y}Rtk!V-xNg)FU`-Nz:xPWkiWW</*NQefgxGXCD&i.i8UD?7wu0F!' );
define( 'LOGGED_IN_SALT',   'SCEWs4MqP^8SgM*|;!,6#(|?y9]:-B!SsFT%vjsWV 2FEI:).gkPIVkFQ+Q6<KQv' );
define( 'NONCE_SALT',       '(q7&T^O,*GVA6Y0/ryghJ%Sdkm{a)b:jh3}=-A&h{a<rJ!r#Ebm[.+xp44.b!`BK' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
