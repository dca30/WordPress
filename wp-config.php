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
define( 'DB_NAME', 'wordpress7' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         'cKR1p{l2D<L$guCduC.v.TIJ|1{j~/}reJtHUl/>5IPg9t[N!+UzVDO^30:QSrr%' );
define( 'SECURE_AUTH_KEY',  'uTEeHZnHZ32iB~zQz$clr`Zig|V+W$ #o&I!WLmvw$o0L:e}f}BztlOu|@?]&q+X' );
define( 'LOGGED_IN_KEY',    '>-UEILeDYf7ko!^>gZTI/ZBXti-oL@6jGqzpxw&j+KyDx#aEr|O^@*L:I7MABZ>a' );
define( 'NONCE_KEY',        '!S|jG^~Ii{jJ<t&U!*(8CBQvA?~0SZ%<(Ypr*wnouyEGBM)R,?R6h}9t_JE_Vhvg' );
define( 'AUTH_SALT',        'Xc[._}Y3EI8jvC5q/96x}A-l77*SAG9>s)0I@&^ISItTu]|LvQRVegp^GvP0@ %b' );
define( 'SECURE_AUTH_SALT', '45@4./F?4y}GXckE~CtD#G/u<>gIph2^=Snw}KnsBUy#L[cb;dK#xgR`Nc5ce@rO' );
define( 'LOGGED_IN_SALT',   '/tS7;Aa55{iM;[N6}b_KIk{.5psOA`o)}kYTc ]<V[6%VZMjfa!y~-^{=|EC0EVT' );
define( 'NONCE_SALT',       '1fl>FCtl-ZxW1**Ja>oCl.nT~>Hb`q!>,K@!IW*N`Ja-pm3BD/?>rl3Q`$D/f4Y>' );

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
