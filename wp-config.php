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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress' );

/** Database hostname */
define( 'DB_HOST', 'database' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */

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
define( 'AUTH_KEY',         '<n |s)dF]sNU>.k@o.o#JfcL=CEl~:7T40<cqSZwNCLRIy-EQ]Sq!wB!}H-?6/ed' );
define( 'SECURE_AUTH_KEY',  '?tX%lY,W_80a.{2q-+op<je2$ OSBg~IR,Wp8x:}5ot5s42G_>&TFTLUk0JH= ^W' );
define( 'LOGGED_IN_KEY',    'FpbYR6Qlpp%9HBj U?DPv~=Jhl6| f`DL gl3W&]B/r}6w42T7H8wK`e2;=fs7$@' );
define( 'NONCE_KEY',        '_Y{w;k?;CH0lekifMcpP8[BZhPOV}Lh4S%B2b4B][,N>|}G(&-#F2JuoRpZLwci0' );
define( 'AUTH_SALT',        '}UqJof;vDTGdmh8r1Qqc1Dp$7FRYX49{#LhnW<j{30r5$q*Vrkhr AAG5M+pH.q`' );
define( 'SECURE_AUTH_SALT', '.cAIRLu|laimwfS17HeUE;}cLu%}DEIC)eJ<In@7-oLSeh-.bBN|D x],6R=]Gi(' );
define( 'LOGGED_IN_SALT',   '25t<=RPI;9f$EQ(<f&1idBH[N.Ost1DNu4e{fTAV]]B`BDZ[l4*J}M5xj}v&]-E7' );
define( 'NONCE_SALT',       '3){kJ[;; Az[NxqxP[Xg6dgpjY_uV{&XR-3 ~8HWi,w.k00__%<3v}.oh~J.e}=D' );

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
