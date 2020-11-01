<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define( 'DB_NAME', 'jewel' );

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
define( 'AUTH_KEY',         'ETV@QP-RYAq38Suj*(lT`u(Vj45{;Rp19|<wS<SPqJDRKB]^.2[^2/`]f=5,9WJ{' );
define( 'SECURE_AUTH_KEY',  '0/pzV,23i]HqP:1t^+l?Q4EBKD).U^R-&.2b{&H+(W_5J2KTtcgA}coaEX=_CiOp' );
define( 'LOGGED_IN_KEY',    'tf|>B]8lTC*DB %+eEp}U_Dq.{M8x??L|<7vThz)!@C.DL(c/563,1yBMy-6I_gW' );
define( 'NONCE_KEY',        'eK$H$Ev|<Wc9H{`0]HC}khuJIA)Nk^y-kr:-$~D#s36r|Zu}.sC^^8)nx]9?(F}J' );
define( 'AUTH_SALT',        '>QL(f$i~.eDsp-/dJ2Ws*GXNDJbn|>FgX56Z2@x)yuT|kP;XMYa_j@67;JAP2H6@' );
define( 'SECURE_AUTH_SALT', '}wGB?C5 xUL_P  ;8bn*yn4N_8~f24MLY,AHIuLup}rQoR-TA%kDO#4iKfuBKIc_' );
define( 'LOGGED_IN_SALT',   'jjSDfW^BvTh0fWb9^21S mRuSIan~7XP!Z^U-rb#)c3UOl!WU%?x5Hz<5!jhtO=t' );
define( 'NONCE_SALT',       'Go&=.[,{w+g8@Tf6+7~:|W`;WMqP*(H]O|y4|PXfX@O*nq<<H#^cU27KO`IP;!6X' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
