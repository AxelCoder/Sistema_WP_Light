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
define( 'DB_NAME', 'sistema-Light' );

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
define( 'AUTH_KEY',         'irdA!K?ep4#v~UHP}Uy;:=N)bwAko=8G^Ho<D{|?#O~96XXG&y_Ekk_c[Pwee6>c' );
define( 'SECURE_AUTH_KEY',  'BwO)xR}iZ8WK8@*4K];HBJUm)^9<M|v}_m>NU;]~KUx%*IQ6.Y DweV=qu&LBP4E' );
define( 'LOGGED_IN_KEY',    '%5nm9ci/Wuo!!1%RiO_Q=~[+%tvcc7@de7?KV?}}&2q4PNWCw<Ke[pM8D>P>Pty`' );
define( 'NONCE_KEY',        'dm*tIZ{|C0?.e49@N9ULK9?q^ut@iK&RUG/NQRzdCtS`aT$4T6[C~2PKKqW(}%*0' );
define( 'AUTH_SALT',        'h(<LKFIR#Um@Uk@o:^Sbgh:oKF*GYiJ=rn^|P_LPbTtp+P8(8q^ZOl,N!Gq3(#3P' );
define( 'SECURE_AUTH_SALT', '3h7cM/JW(MZ4k^%CH~piZ03=e`|^.!(m7b$U*8`c+qb7~waiJA(._i6Q3lq|:=*?' );
define( 'LOGGED_IN_SALT',   'wUol+h7<(t!/,[Xgjf;M5HF9+nyygR(#A02xfDSO.|DpF[T^F7D>_;1(LAu&j|ew' );
define( 'NONCE_SALT',       '#UZm/M(.B-<8n@,~jT0.D&l#~{XP6JmOd$|q&L 9 -%}EIk|1ea;5ar!%1_7x!^g' );

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
