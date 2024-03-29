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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'dgesin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'MOjito428!!' );

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
define( 'AUTH_KEY',         'FMf}#RVw^b=+~DY!7TI|B!{_IPXY#qZkSoUEsn&A.5_-)Q)LTr_e~thI?LJln^,|' );
define( 'SECURE_AUTH_KEY',  ']=iH`Q$[STm,UxD1ZsW&=N`.p$g$xT+8PRN`hy0=TkXRNI/C&4qt+X8H- Ao!4$$' );
define( 'LOGGED_IN_KEY',    '|#(5!B;I{SRMEs##-?<&H_|#)iHMM=!KwpM/F<ws5h9,=Z,DeNh<~6&X9Ya:KjP3' );
define( 'NONCE_KEY',        '9u<}k6N_*Iu#D2HJkC`beDDV-5(KV7Vw*MdDX}mh#,Pe6`}DVj 6~iYmq<uH=D(X' );
define( 'AUTH_SALT',        '0X}j8UT8J:|PdIcWJ[|TNTfN}etLud]nUs)w{uh)Nh]P<vm0bk24g^dU_XK=jy~Q' );
define( 'SECURE_AUTH_SALT', '8#e]Q9+)fv2~2@:[*+NG10<aRGR|7olcS6f_R^{aXD7g| b,-2o<OFW,zLFZ6I>:' );
define( 'LOGGED_IN_SALT',   'dgpxPS0e|;CdFSg&ZIHEXk3ceLWslfPg(k.IlKBR),/66G*zV2a@Q0!2M=&]I#[S' );
define( 'NONCE_SALT',       'y5scYRy <u]Y4_k1?X[Y^%_}q9>~6?jV`33k$RK*1bt|uma)KUmDA+5UUXpn~/t3' );

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
