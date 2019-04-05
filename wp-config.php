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
define( 'DB_NAME', 'beastudi' );

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
define( 'AUTH_KEY',         'sKmer Q``-eIwVXF#WiC4wbVbx~XA(At!S1qXrPewBym4_?D$b56MNJ@ `LJXLHS' );
define( 'SECURE_AUTH_KEY',  '|HqmGf}ITfLNGNk*[B(2rNt?]ZqNT((A$eTz;>Rm^]}N-L;wE57`v6Bg{!KMQQ(u' );
define( 'LOGGED_IN_KEY',    'c,RM@(O]NCAikuDGE>.RK:}ln$`*0hlkB_qaNbd|s,% *?eY`W3~{bdnxaI2*$hp' );
define( 'NONCE_KEY',        'J$20qV]@=nha.7dj;b=u>.DAD)`UKA<Q6R:D=#M2!4x$=lTHN9s,(TIwN@~|=xh7' );
define( 'AUTH_SALT',        'UfwWnh(K;GvA3~E#GwB5a8LWp /S>N<ymA<YLC{)Wro;wD)B@QH+I</1jL#-OKqp' );
define( 'SECURE_AUTH_SALT', 'uMun)ZwEFl@4A2P0[oV2(ej6ps-y<#u9qD4/B5<*PFJ$b1hC@@=#+z;JKA#>Y_!&' );
define( 'LOGGED_IN_SALT',   '!`I@Y)?&VQgM2T:8[=U|o+c?(@,MdQW`uU^:J+bvOr3]T^VJy*LfGLkq5!!>(G*$' );
define( 'NONCE_SALT',       'o~)%(-]XTV_p4]j=t[UHZgDL)Ly7:t>XoiH%A<([,@Txh3x-5HKIafr&xxA5W[~g' );

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

//agar bisa mengupload thema tanpa server FTP
define('FS_METHOD', 'direct');
