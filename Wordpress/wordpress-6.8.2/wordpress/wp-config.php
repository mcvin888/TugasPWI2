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
define( 'DB_NAME', 'Michael_Davin' );

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
define( 'AUTH_KEY',         'Q]||44bmG,%)Q>u2=:BGF=[L| cu$jn![W8>9_Z3 _W6Mv~W&B{Fp C6ICa*]d4}' );
define( 'SECURE_AUTH_KEY',  ')gc#1JfIAY&X#@4P7ES(g}>Y}=Z16<G*[+|V5oIR3;b?;8r=e(6w?e:MMd<ATE{G' );
define( 'LOGGED_IN_KEY',    'h>?#S-)xI0IiuQn4zz(LH{3ix~tu; jHR5Fh_U)x)6f x9]kbQ3WJT{j8E-G-l[f' );
define( 'NONCE_KEY',        ',f`UE{Kuo#i*aqWx/59Ak46vhhdedrF]pEl&l[JfOj5%k,V4-&Bj]6zJ[Ece:zYb' );
define( 'AUTH_SALT',        'W-di,3oNV^49Zm`3]xgI_|cxog*c}m=N-M^BkmfE#RE;6!bdkHs3SNVpoBC8W@v1' );
define( 'SECURE_AUTH_SALT', '|#X5cfdb%zx41v0F_.}G_IB&oggITH%FyfN!5abFC,E$#v_?@Zw,)K3v>EoP$Mn!' );
define( 'LOGGED_IN_SALT',   'fO@-5&hqJ#tvKrVU((LnPb{[^(fjhYM*-4_[WgH~!Dfxn29;t!t|L<FbJr*IZVc9' );
define( 'NONCE_SALT',       '`QwPXdyWb-Mdc?GJFpHW~5NY8u>HuSA+:6kLmLB P`>P~Vn=OD[UWjSRvKBH2M|9' );

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
