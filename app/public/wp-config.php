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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          'IliCkLh_?P#?1))iJ{eQ%TR8+DJ{taS.Go<;[D#!SnjXq&vOenfGrslYh*Qhmw%/' );
define( 'SECURE_AUTH_KEY',   'E!m#L11>h%K{;6SN*JLb`?=lSd*[asZ9|_9MHELg88(AeRM!OT_P=5x(VT`;4mM0' );
define( 'LOGGED_IN_KEY',     'nSt0J`[/eXee;CC>x^ztOs VwJTUx`T)!;AU0$H_OEAu%Jr2274JP$Mko.5m+-Rv' );
define( 'NONCE_KEY',         'z^ =$iC[1`R{r<lSzdqC8gSt(Otlp9oW,OL+@T{#q,xxf`s&r)e~-(D,Ib]j- :$' );
define( 'AUTH_SALT',         '[1?5fMHw0x9tj]%0y%7X)pFhf$@#>l/D_[#!PHAD4+Y10%oNtF8Ay`!z?0n(]ac!' );
define( 'SECURE_AUTH_SALT',  'bH!n@&<WFHg,u(tN4.A.YLo),%SY b+7&-O71m]H>-E]H5k0A*?qC(;:E-p0}XbX' );
define( 'LOGGED_IN_SALT',    'N[EmP*X]W6>=ix<u5&nnP7BZ2PLJw)V5Bw*Z9>)=93655*aCR23z7dndtR6O#r?9' );
define( 'NONCE_SALT',        'RX<i0]<jf18Bp>j:<9;LTg$n$]m`#qCX!m1mM_bI `HLtPHHz@-v-uUWfdKdmp!o' );
define( 'WP_CACHE_KEY_SALT', 'A]Mu8`T=k_ qaOHAO3p:&0MdR]X3jk+*ZJc*d=|VV,wX4=D$hOf{UC4DHu*5@`F]' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
