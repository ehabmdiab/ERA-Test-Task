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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'era' );

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
define( 'AUTH_KEY',         'sba~z1fy>;8)2E6:!Y`- 0S7i)86u/h Xy>rhDOXG,fdkvA{psv|)===1pZGC(mV' );
define( 'SECURE_AUTH_KEY',  'z&`J~,oMbl[/hTNjNYs9T1ds^b$ymm&6F{uAJy,=0L?!+^pSEr8nFlW0xfSr`Z0L' );
define( 'LOGGED_IN_KEY',    'HZHpWGT; lcg1Oo+T6u}<7FToJt+jSc<%A{ce1`[WY-rMA]``KW:GPiT@R.tT!Ql' );
define( 'NONCE_KEY',        'RiiHoWE.UsBeHOy>MnW#RtA2c&&nytUtQFWG0(_E%*]Z%+CT]cmvDh[R<3Af8I$^' );
define( 'AUTH_SALT',        '-9WdSS#3r+D>pxj FC^aPUZG1Q_7<KvA~r,(;7-a]`3e2B.gm74`liX a-R?NS3Z' );
define( 'SECURE_AUTH_SALT', 'fVvJB=}75bt}f3AjRo4D#&VN}!:@|VlGfOd`?nYE)M s=Zo]0vIW#W_?._O|193C' );
define( 'LOGGED_IN_SALT',   'Szc kj>|by}sc$YIHQ7q*& YcMo2qu|G(SMOM;M^!Ma9%<7o>ZtWk]vMv8YYc:H4' );
define( 'NONCE_SALT',       '(ZmO/,7~%;!oyvz_Z5vH@W_K$yO3v6mWvG|>gIX1A%yG][*Xpx4T>VtkQGRNx=:u' );

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
