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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'R.[k33R)OQ!7Qjcxyj!3,+@l@N40U,iK=YupCwpsM(,S2i)yImKMMRT-}zP8wb~;' );
define( 'SECURE_AUTH_KEY',  'Yq*7PJ*_}LFYjp}8-h<fEIOhi`-hVJ9[JFOfh;eecA3!mlDz:^b>J)&ib?g_{U1P' );
define( 'LOGGED_IN_KEY',    '(g+I.GrOFfVuJDdP/l68=82(82w(1 2;3P^mMBet,!%*oT&$nqa0Dzzz9vW_sLNT' );
define( 'NONCE_KEY',        '5pS=vPlG|CLVY)LmCvf:#Xk5%_/;^>{Q8xLxk$W*{8d0_hEFE;EX1U}qxq%P^Jjq' );
define( 'AUTH_SALT',        'WY`@@;XE#y;NuUJlH4.[${dK3b=rT{*aDOO85gt!YVM^6{jTf/zO@ W?NI&,Qr9Q' );
define( 'SECURE_AUTH_SALT', '~~Z4U1H2+F`3|B#jWa-W8|Km/)m1pR%Nd3w6GM>lS/~V|:5.nZg&Kpvlb.Iz#,b3' );
define( 'LOGGED_IN_SALT',   '[ r@b]_ETcB!rp#lsr(b|}o?w,pxC@w:Q008`S2X0[b<B~Tu`:g,tdt*(*kW(fMP' );
define( 'NONCE_SALT',       '*1[QsME-Pe [xg8WbP}5 sV`U]B++fKtTGPDAXES>/*E1?HF5vC~9Fk&D+VFkLt*' );

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
