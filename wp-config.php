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
define( 'DB_NAME', 'word3' );

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
define( 'AUTH_KEY',         '({)yJ%4:u<A}.9Bhp13sdr>V>o5=#$$,(C~KBNGhho| hp*~[2];y/Wz$@a%Wid<' );
define( 'SECURE_AUTH_KEY',  'pJ&}U@K8;~!anv:tKcdH4CI&,ta8E~J,jVETkBjjVAKzsf#UlJJ~MyfHfa4JgN&^' );
define( 'LOGGED_IN_KEY',    ';@oXGN.})Ww@A_Ot Oh<dbZ[Jq6X}PF|YlG` ,|7H1+l4XY5]o#+LD+6ccMFy&Of' );
define( 'NONCE_KEY',        '!eLZ<(B?dWp8,/uo&)!Y}FE{FL;d/()g pR5IS(+RaAW}As(0gOn#ji+>}Ixag)l' );
define( 'AUTH_SALT',        '}Q!~?>J&bl jt1kG+=/RZLUeYxW}Hld|ZcwI;9_0[5S}+i~AYevTkq:(].mzd9oQ' );
define( 'SECURE_AUTH_SALT', '8XX NDvBixFc.9g>e,N}Y0haqTC(u>*D-Wj_nn.eFLDfx+IQw cUIL>:+:rfS ZT' );
define( 'LOGGED_IN_SALT',   '(-!]zXwkkR=.hB5++WSY^<rrXV0jKP78n{}r+)Ddm[k-vzo0k4Rrk<{4y$3oRtEk' );
define( 'NONCE_SALT',       '#du55=X=-p<^RlYg$iB{<-^]wrMe|6boF7UOQR!fSe^QyKrf^`Ts7HfRj?.]PNsS' );

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
