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
define( 'DB_NAME', 'rakha' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'Rj`V+Ri7i?AP2_[oW2VFqLY;C>3xNT},0lbW%xk@c+DZDb^>J>srkepZY,9b+?wP' );
define( 'SECURE_AUTH_KEY',  ']DOrg[/D+_u|o#&i@tldf+sd,>uyXaAW0PYrcSwx4DVK^X2KQ,pE#kHiNYC4]-@J' );
define( 'LOGGED_IN_KEY',    'Wz.1{t&xDMo,CINdvDu!r6-K%a7<R<eX33A DN%:wT~]ADE}yl9%b;smr$nv(!P:' );
define( 'NONCE_KEY',        '$JnxVA>#xwDENb}Q/dM(@Tw^)wqE7[Dd;$XDoA)qw9i gJ}lnI5@`;X5q>cUc<,L' );
define( 'AUTH_SALT',        '`PbsgZd(}xV87]Fz5K#c185ZfGvNhLrmy+dfqpzA}eAh3:pYfb}y$z`disJBq;ho' );
define( 'SECURE_AUTH_SALT', 'ZGQb_:7A$rfK=kx#Sd$O*2I]QJ+,2.pEr2I=ADrTRZ0#M_y (IeM*@IoAE)qdj.0' );
define( 'LOGGED_IN_SALT',   'g5a{wWUJkkkvBxC#+*j?ib<fgbGM%H*y>.o9^T~Z$h@&ISRfmTocb,mdoch3P`<,' );
define( 'NONCE_SALT',       'e.wLi^AZJw-.^h{qJ >%|ik6?{nJ#844w?[ mL.i~b27nZ;(Sr53`@^(Z}Pm*ZCJ' );

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
