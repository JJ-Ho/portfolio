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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portfolio_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'Y59lQcmx|mvmDUn/XZbVEvwkJ!&d,gG?vS)LHCV3+o#jMh;zt%.p~iq0_FMFFEP%' );
define( 'SECURE_AUTH_KEY',  'u# gA$T7@p`%y`mbfpZi}PpNoug(}cuz&#8l(L+qn3miV./i0Z.eNApo.&db>c|Q' );
define( 'LOGGED_IN_KEY',    '(Ei 45H>))0>9:k<wgwi_o9LkntLjP-o4W.8(+Xs~my3W{X!u 5&$fD46Jv76_Rv' );
define( 'NONCE_KEY',        '|ik,!eUv?VNh.YW wi6DQ9N7pS%K[89*zvK-(6Ppld[Bt!6f}WqH|&4;I6P73L[~' );
define( 'AUTH_SALT',        'x$1hRN4M4C&slPMY@vUa2rZN}VS`nnZsXwscVUrhed|pBkuSx-4j1q-b-GtUR$K0' );
define( 'SECURE_AUTH_SALT', 'UusCT[HAr5k_6uL]cC;,9) ]t)JTrt{sNC%kv!aD3+[iQsa~WQkYqW/4i|*/NPx7' );
define( 'LOGGED_IN_SALT',   '5Q]b- ^.qJ]~HqV#7.93dDZO)U#~$nWr~lg35TiL5f9d<?!LTyJ2>)`{PCHF$H8K' );
define( 'NONCE_SALT',       'ZRE6A!XA:.!c*X:=%JFLqWfe2Oekt;XCL>;1Ld^_K$}c:Io^5=akLel^HhhPdx/W' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
