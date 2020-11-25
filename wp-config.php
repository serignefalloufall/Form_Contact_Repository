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
define( 'DB_NAME', 'cfpgetech_bd' );

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
define( 'AUTH_KEY',         '}^zEIbPR0!c/c*OHFxnOT@Tq[o7[PzT{p9qa#kr1Rys0^VnCr3]XV`,ve1X4$M$9' );
define( 'SECURE_AUTH_KEY',  'Kr(8Hxe(.isf7l *]g7T{Nxg5|cNAz5U~bCP~,#MS8 (iA2KC~a=V2*o<G^JW{Gm' );
define( 'LOGGED_IN_KEY',    'U1RGov/5s`A%MkA81yW1,c(Aav}7hlW|4l<MXA!Jm(2yt U=O}w;I.i@!%gyas**' );
define( 'NONCE_KEY',        'szL~E7.V-;cCNE,_86/[)!J1]DU4uIGSOWScH!V978TnX==4aY)ZQipCU[Ai+$GL' );
define( 'AUTH_SALT',        'HX@I%vn5E17^EBxTCG9w]Q)J{v$_1G=?NJ%1bM$Pfvg/G_:r_r`eF%.Hv&zF]>3b' );
define( 'SECURE_AUTH_SALT', ')SB/CQ4Z4rZNA]0PeW]#kDktJU_!$E,0bQJIo;9FIHwey39W!ZTd`F/ E$BCvuKN' );
define( 'LOGGED_IN_SALT',   'X9p3cG?jm,5A&=WP{RQA2>G)(b/NW4us]6Fku&B7/0yRy XfF!;}ppd;%d2~f<Ev' );
define( 'NONCE_SALT',       'U*k%exh#j1=8no!A&3]e#_)J~qj;@nc30s(A9ET67XL4]h9#iIe<+giU]6Bo{&1m' );

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
