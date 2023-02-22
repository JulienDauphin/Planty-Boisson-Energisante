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

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'planty' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '/5RbMU[x4GR<kS+KF<EEQo_j](Y}BFU0;*y>D_-:pkOl4Vs0_iTF[X!SM@hp@C+ ' );
define( 'SECURE_AUTH_KEY',  '(vv_df $;cl1%kQ9{^g,R0)>iPn/&6]]wJ4i-tD<5*jI -,|mS$+3Vqv&%;|A&(+' );
define( 'LOGGED_IN_KEY',    '^>`j9nLYI48:S-PT{(?SWPk):ZY9?pfPi_FX(~%Em?GcXF#@^*_yyQzSHdnY%PCH' );
define( 'NONCE_KEY',        'hhQFTA^}OJ~0}5e V7<G I[VPg~GV^2S-UC1obvFd9g?V?dSDx9[Cu!Y<,;s f1/' );
define( 'AUTH_SALT',        'yhSU^( /x,$z`o@SJH!7e4*u{s-G0e,W@.@Si1K}p8lLT`-V~Pl+Q[B5~vf[6m#k' );
define( 'SECURE_AUTH_SALT', '. /?Y>B_w[J]GKf79~kzXL<9:~OxBTXc@GUS9B#|In(jm_0mT[<g.,*ITQ#~*L_&' );
define( 'LOGGED_IN_SALT',   '&}Nua!UOk$vIpi#a&6nW`_DRtTxPg#Uvi&=0<!ikpG>x*T+b~:<N|(kD|M&DT4c;' );
define( 'NONCE_SALT',       'W_{8s/%HHU4-y&HWHH`a7e+{^SNcm,pocsYjdJ(pB:>a|G7f2y]=i5-A=.oW-hE ' );

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
