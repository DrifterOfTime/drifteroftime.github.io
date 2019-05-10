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
define( 'DB_NAME', 'gekiryuu86wp' );

/** MySQL database username */
define( 'DB_USER', 'Gekiryuu86WP' );

/** MySQL database password */
define( 'DB_PASSWORD', 'NYj5Vu3qpbhPRHeH' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',         '%R@irG$0V7o4sz[3OQdG%M5N+)Su5PiG.j(Ty5bltcWz9F%?4<[$^:_Zxth3-=d4' );
define( 'SECURE_AUTH_KEY',  'Ysluiqx,di*:4(C4CAeO?R,E;;`V76gAw?(5EUn|BtP%R:h W/`(4qTgH?89%nK@' );
define( 'LOGGED_IN_KEY',    'Co=c%bNs?@-RxuYGVv8]rkii75+_V-)%m5_pv:k9H^94FeK[tc=Qa+Cx6L&cSmPP' );
define( 'NONCE_KEY',        'b9Dk_&6#YP)g;2u+yM8[UFpc(?2vcS)D3I[CtdXU_%r]TH(&)]{cbd6~Z{P$T4SZ' );
define( 'AUTH_SALT',        'CBA9Fj1Pqta5AdA]#>=Fh4>2vjtT}Cax{kbM6hl2iwQcwBeqb_p9FDFj(s9-K&+o' );
define( 'SECURE_AUTH_SALT', 'WRY!/gRz!GBDupB[hQ,lfmR5oFw^SQc5n*+UI+T&(5/heBbdq8JOI,<8&qL5$176' );
define( 'LOGGED_IN_SALT',   '*NRnOD;uR4eACRJXQNU`$$dSIpRf,!kxXg&%^h_8e?s.m.?Uq,=@eYDCF%/}XlH:' );
define( 'NONCE_SALT',       '}TDx@:M)G#of3BWK6![Cuex)pwrGc[mIh3Q1cnsxG+)aJ-q/<dma7E=)n*q#Y17!' );

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
