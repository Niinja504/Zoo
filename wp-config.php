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
define( 'DB_NAME', 'Zoo' );

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
define( 'AUTH_KEY',         '?6ub)Qbrf]*UUwn}gQ5LleTNtbf(v`C&H%tX6)L[n]rSs?~lD]kN5jXw>P%WePMc' );
define( 'SECURE_AUTH_KEY',  '}{+D,1W+hI<Fdndpr}.-,MG+qYvNT*/PQk;m]Gmwx75n:5M?S4h#WMU&}1U_<Kh~' );
define( 'LOGGED_IN_KEY',    'wj4iur.,=-0XIqHY_~v::akimBm|t?,E{WZ%_$%)TWsi2WXBRk+,I|vyKUg;,wMC' );
define( 'NONCE_KEY',        'mW>{}Zqb1CDX@r%G+pVdUTpQ1,vCB0e4M^Yp5P0>EIvyA2LF7+KSw:mH/,Ooz86f' );
define( 'AUTH_SALT',        '>w-g^eqds7AO6!Ht73=a+^O8yMd&1&.KeewnL%-WfA6bW-1?4xT~u6A(iQ/y<]Gq' );
define( 'SECURE_AUTH_SALT', '(0121)80z~$c_od*Pr>0R|b&jZrtC:AxX{<dKAqBT(M,uy]cA@tALT,_&xreORN`' );
define( 'LOGGED_IN_SALT',   '|7WhV$#% zN;`3Vcv_3rZJ`O&6!T!rl@5{VH6K!KX@^OPoel+S}:iW1}G[qwulv4' );
define( 'NONCE_SALT',       ';?Xd4GXNQUguhN3N:KX!rObc_8(j,%@5c_&m&UTS0UXB!WPmq$7|=gyDO]+XSNke' );

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
