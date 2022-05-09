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
define( 'DB_NAME', 'wordpress_db' );

/** Database username */
define( 'DB_USER', 'wpuser' );

/** Database password */
define( 'DB_PASSWORD', 'Passw0rd!' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'ZYp<7}YQ}Tj?<QNO,CaaHg6g@xKl+nEn56}%vetIB<7f-q|_|EXJPjibY5GmX3=c');
define('SECURE_AUTH_KEY',  '1{R,fxmJ8eb($L*X^!QeXCLb0)6lj.,#!BeGt8|sy29:k.J-Q*g$|2D_v$(m4=Je');
define('LOGGED_IN_KEY',    'zgy3Ok+Y2^OLNG5$fn-~l|N~A1|V^L-is)VzinyOKY*Vukk=Y.V~Af|fblgU)X3R');
define('NONCE_KEY',        '3FebaeW*/-k[Dl~5$U^^ZfE-nl{<)1=Qj9$:@(Q46qvk`.C{)RFP<#2aA}z(#j</');
define('AUTH_SALT',        '9u(13,BrI@l@l^}hGX3[-+L(|OM|V~i1#KJ?A )n JBtxf@Nl}(p6 ^u$gteL&)V');
define('SECURE_AUTH_SALT', '&w)]|Ld~6fBfd{E<(TcXtyX7(A0z~|q%V3>*Dkh]3.XF{ISVcR,X,%1EFs:mUz40');
define('LOGGED_IN_SALT',   ':|=Srz!1KX`Pp5+i{{:=g$XLS|Iz]oUo4KrK#bQIW^.HpQWo1$nCJw|I=PS(FT]=');
define('NONCE_SALT',       'a- F&x_wmZx9q<t(x7BZX#j a.PX6Kw>2/QYiB.W>=Z7l6wBu8Es<zQ#%9ZqmT N');

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