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
define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST']);
define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST']);
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bbinteri_fadu' );

/** Database username */
define( 'DB_USER', 'bbinteri_fadu' );

/** Database password */
define( 'DB_PASSWORD', '4;Zvng3Y!5' );

/** Database hostname */
define( 'DB_HOST', 'bbinteri.mysql.tools' );

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
define( 'AUTH_KEY',         'q6!Yznw@c=7c5ftN638}?QtT>IjjnnpkZ_ojw5F|vGRZ>37M3:H?VleBXu[L$:[t' );
define( 'SECURE_AUTH_KEY',  ',E!EDwc/v]GJ+>&|;<<UH)N#J]Ndnrb.hgx[P0Z>v{ENXp]!?9[xqzSAJI8cG&VC' );
define( 'LOGGED_IN_KEY',    '|Wm?V{%Vy4#@fq/?raFN,;RX&M_?V(U[xahmCCw:0{ZL`6MK@S;V(lv5!; Fq~^Z' );
define( 'NONCE_KEY',        'aQf).0{ K)C/2!dzL)cQ?6{HP[@64I0*w=0ml87c.La2)!]dY:}<xmj*E(uO~^CI' );
define( 'AUTH_SALT',        'Mj(>3O^w~[Q`qWFq$]?DiW|ra?1OJ;gwzZq(q)5FzpHe/7r1u=&vX%irW_8JUrP=' );
define( 'SECURE_AUTH_SALT', 'p6a@0k2O=e:6xSl3=hG*tS*8 8xW}& (.5p}F6kF-] zbc8hxf}t-(T@5sH?;#3J' );
define( 'LOGGED_IN_SALT',   '{+N7IH~O3#?$hsdn]Ep1eNa<g+,CpD=HAy7bI*x]/m&H%#CLw+DKw2g7-Qu[;JL2' );
define( 'NONCE_SALT',       'L;KbD<S=9ZL_=]CByRd6<BS5Q3Ez@=1d*YTJ8Ot**8U3hCe&I+,Fh;9gu5Hq4-2(' );

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
