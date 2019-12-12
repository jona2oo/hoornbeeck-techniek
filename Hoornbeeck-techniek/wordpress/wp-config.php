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
define( 'DB_NAME', 'hoornbeeck-techniek' );

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
define( 'AUTH_KEY',         'DR EwAu?x<|,,Q;ks[#?sbcyv$SK0/} CM?LOJpp/c ,sp@8VS ;~}>Y u[#L1Nv' );
define( 'SECURE_AUTH_KEY',  'x7dORZ979Ju9|/?Qr F2pSl zt41p=S9F(>JU!>jun2w.k@x#6Z_lbBI}y%[phv-' );
define( 'LOGGED_IN_KEY',    ']W4D$,,kul_@;,eqxInD+R|aSXqdmcCSNX/Zp|mNY~Lc9M4|BFY0>2j|92`:cAv~' );
define( 'NONCE_KEY',        '3.g[$(TlFx}]44S~F4wwEFXi%p2L9n>76,|RWQ0} mJvVq!/%:gk>z$Bs?+Ab~vs' );
define( 'AUTH_SALT',        'n8Qk]Fza_B=?kP{ [ObWhJq ]9L.aKKl^3/Dwp)?YTOfF<-k=o>Z6;[(-[[)DEI~' );
define( 'SECURE_AUTH_SALT', 'OiarbK+Kcn}X-*#5p8a<[rEUis.oeI#h3QH|U/]4r]!VQ4mzV-$E$2,yBXz|N=Dx' );
define( 'LOGGED_IN_SALT',   'f0Wz8:X?s3bqe~QX(dcIk$?t;29~D.PKwm%)UJ<TdF=s:;Ts/&65?X7H9FGCUkhU' );
define( 'NONCE_SALT',       'gPy~?/ESO p;`>b+o5;kXFdlv@g/7^|*bmh)?Q_&i>SZ.Y Z7q@uXgozw9&/-&F,' );

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
