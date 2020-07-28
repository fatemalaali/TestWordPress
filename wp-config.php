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
define( 'DB_NAME', 'testwordpress_db' );

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
define( 'AUTH_KEY',         'f#*tzSfceNuan5W+;uvS{7mX$`9kf]$Ws`#Dr8p6>ItNf`yOMLiLJd1u<{H.q$hh' );
define( 'SECURE_AUTH_KEY',  '%jSh>}7BLV~@b)/Nv5KjM1B+.ad.z0PO}C~;uvd<f)pH Oo[z?V![xlFp*qN,uq,' );
define( 'LOGGED_IN_KEY',    '.&x{;6GV u!>sq.+A78<Qv{e1o@zXT4u?AQK`[QgU?]ISx6u)o82Y_cY*m>:P:Wj' );
define( 'NONCE_KEY',        'M.1Hz&ftW  /93A6Cw=Ho79<LA.(OK(>pl_~x[7t3Kmx?j(&FL89C)I^cTh`Pti{' );
define( 'AUTH_SALT',        ':>.+Y3O.7+<1zR{(KLJ~E7wTjm)8oE=Xf~N8gf=&ir@t1No3[*h[nofvku@_GF)8' );
define( 'SECURE_AUTH_SALT', ';p80dfV+Lt14k~OT{;,@:;<[n>Mg5}EW<AlH<26+<2RI1Bsdeee/Me&Dz((Hw@h%' );
define( 'LOGGED_IN_SALT',   '7F?yolap-|tyUe1s Xop;()LR;P*G7^hJoWb#6]u9 p#>nUK>c00FMz9.& !#Sy1' );
define( 'NONCE_SALT',       'vkVk/:.Vl;P+O9Qrf1=e*d8%rP=xzdKH0DPf4_EY>F*l//Q)n/g?<5@r>A4p`g[9' );

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
