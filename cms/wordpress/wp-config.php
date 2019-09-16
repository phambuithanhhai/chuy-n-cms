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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         ' QlrOYSOs*44Xcl^<DIyP@JK@4vf4]M)P*(i-pS`qBK~3Dqlts. 2cMbt]{9C7e]' );
define( 'SECURE_AUTH_KEY',  '1^&~.V/`S4YDk<>^e#b0k2r(QRG$8)Cq@i!9$0cDpU+bd-SEM1uibdz-Kcz9.|X6' );
define( 'LOGGED_IN_KEY',    'tbfo)p|f|BluZ8S)XIW#B!_fcfJvM:QJk$qji#,>L=]+~0Be5XuL^DdrnPH67l:e' );
define( 'NONCE_KEY',        'CRL~)b&@;,bQrIRuMb/8Av^1+3)pLk3,~?SS(l9WZeqEdO!(blZ4@fg[ntPJomP~' );
define( 'AUTH_SALT',        'B#~hVgqC*t_5<5ce^H> VAb3#j3&Fm>NUGi|.Lvq@H!ANqK-mphr7L!l+@ gYGx[' );
define( 'SECURE_AUTH_SALT', 'n2yNUAV8N^zD;~J2)BLq3R4:uOEaHWp}=R}+9R;AiEHdE055j)LS53-!UR/rlQ7%' );
define( 'LOGGED_IN_SALT',   'RC_:#fWXN.jGeJ(,zrd)[d<a.H(c;-53hXj3?zh|9wbVn3Pbw^Ot)_*oIY>C}Az1' );
define( 'NONCE_SALT',       '~0^Ul]k[R!f44^X&)mZxLwH~4S*X/dA`LH}+i>[@ L[?QfWytL{_f4$v8T%kJ-G)' );

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
