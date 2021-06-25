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
define( 'DB_NAME', 'MakeWithAni832' );

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
define( 'AUTH_KEY',         'JcJ>2<*j!9ILkc{{/dli8*Y}.WMK!e!}+t(5D^>?VAM<*/&Mnnocj~1C!7]k~%hQ' );
define( 'SECURE_AUTH_KEY',  'lN*qSX]o!4KG<1Lg!mn?@pta:3/~.R8j/f{DqMyMJi?BgSqb `@mg,GgG]NgRe`W' );
define( 'LOGGED_IN_KEY',    'n5.U+:SF7QEWv<x2T3q?0o-Q7ISl/6Gyvppu-2<Yi=_i6d79(7s7%G}L73=LES ~' );
define( 'NONCE_KEY',        'e2kxpUo95n1@o3_.|nU[isB6O~S!+hA~n^^wg]b+fZt{+GGqKuBbruh.ug>y*Fz9' );
define( 'AUTH_SALT',        'eZvXKSjX%`]oz)IarTS5=.-UJmCReKrSmL`,36w7dg4]qwxc%8Ri,<#$XNF&*#gX' );
define( 'SECURE_AUTH_SALT', '9^IMS9vVM%@KTjX^a?fWk#[0MpC8SxTe,WvDw8/oo}Ml/a14JIU:%lkR28vdJc`T' );
define( 'LOGGED_IN_SALT',   '~VQGA-{/L?w%vEOf*N[7dHam@]Hiv^&M2xPXowD2^Wy>QJ<0FFv[rCTmeg-](fzQ' );
define( 'NONCE_SALT',       ']M/c%&dyy=,*4(=8J|Lo7iV/;+VL84+EFU;UF/O&}rIq:Wd46R#6sgwW6rG%_I^a' );

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
