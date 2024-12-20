<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'newdb' );

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
define( 'AUTH_KEY',         'G}.{!0Kf4@/a#F5,@lJ$$tc<1^t5o*ao@u0BN!RuB$limnG}O98SH7%8IA(45y$L' );
define( 'SECURE_AUTH_KEY',  's{~dg{:e/K9lR&(]p>&#kbJ9Z>uz286I31,)]D Y(;>%`e2LG98r8#`]y$Hzoqxn' );
define( 'LOGGED_IN_KEY',    'XEXf~.R}DH*(JUBKgH7W:f8/$9jzf;NLsIzgyKS+7hk;X@~LQYVLxT,Tc4Cm4[:L' );
define( 'NONCE_KEY',        '^cjP+S:3XoHFsXPyem)Swn~bIB12jeuj+_HdA|@6DP68IqX?6vRFH1[I3Z;_]`zM' );
define( 'AUTH_SALT',        'hc|]vY`>O^a@g`s1 qc,_;+Kjb-bb-5T9Tlis3C9{Q(E<DH(N;!<RK^5(UZ {:L4' );
define( 'SECURE_AUTH_SALT', '/^dB*t+0sxz 6j-TPKsV7drRZXeG]?eJc7f.D3)JLuW6IiP *qH&54Wx+rsB6AxE' );
define( 'LOGGED_IN_SALT',   'mJ}0jmf,DxcE``tsC/J[8Lm& @>}^r@hj+fN}CI/Ef= DkFhix/A4Bc$xP6],C}V' );
define( 'NONCE_SALT',       '$B_Hh<aHzp#OI{-sz7Zou1~f|>l:95vc|OZLWe~dk1QV%uEx9P{<twTJi+=4;wY+' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
set_time_limit(300);
