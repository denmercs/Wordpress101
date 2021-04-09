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
define( 'DB_NAME', 'udemy' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'mpWKRc|vY:$cIsA5>!cWV-$H@rA}Vh,dOgm&c1#_o:-6RPuu1v,T4P>XGmuUH*sE' );
define( 'SECURE_AUTH_KEY',  '842-I~VWyQELU/e9SvyjJH!<yJq0_E2pKO-%iJ$BhQQg{RR6@kzrj`:%TND@MeTt' );
define( 'LOGGED_IN_KEY',    'o/!{[={vfR!EKJL=W/*Ht?]_U)XrcrzHG|1~?EBVv1+bRi%8@9p{q5pcag2!SW=y' );
define( 'NONCE_KEY',        'z:s,BlEzf4y(#9>=!fq@n;Z^)M#?u{iy:EtZbno[yB<z?0=~N:*8=$30|>2Wk7ip' );
define( 'AUTH_SALT',        'T%pF!z1vmFhj6sVb|)N<>hOvYF[~Q~G Vt8ZV&[F>GEm8+@c/,2C2(c27SNSmGG7' );
define( 'SECURE_AUTH_SALT', '_6SP,68(*~k|@4na9CtP0IxH>mPVot]{G6SD]aNIUJu`?3`&]e6 9>8,]bL&f)oK' );
define( 'LOGGED_IN_SALT',   '31y/$[Q,GP<ZC0rk<dA9lCX`kZ |9d%eMyAvoC:YU0y)-UQD{/q t`N~~?m+nn/s' );
define( 'NONCE_SALT',       'c4,%m&,&_S^c#NV5a/%Hk.+0_f#nhCxUM2di+Gyb(hN%9-Xi;wMZ>oNls*m/>Y- ' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
