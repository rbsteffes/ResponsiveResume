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
define( 'DB_NAME', 'wordpressessentials' );

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
define( 'AUTH_KEY',         'AlURPj{Df|[WT8[1I]THcVb (d.n&lsHtD|~-RrbH0~[lW.4*)#I!9ykG.S/zqUG' );
define( 'SECURE_AUTH_KEY',  'Y-LoKQ<{*|wB%Fh7_`Y_=RQVFMQVuJr?YpG~d%uB|}s7xsfI_/]n=:*w6~n9nL:s' );
define( 'LOGGED_IN_KEY',    '7qpAJ8lp[]`1X``~j)Y)4,.umNgt!8[Yqn0_!l0o;~=S8Sj 3_&h]Pn_I/<=!.Hy' );
define( 'NONCE_KEY',        '?@k)P>!%`W-^tm@SiOD?mb0u}wot9i/1C vS=ZAKyHc.WR0~B>&w^k)yoCKQn_:B' );
define( 'AUTH_SALT',        '|=0Ph2#2}b[prP~Y9A+ @sMJ&$[_0J~q09Z+QKw+}9_O4N7 vP1,]D@Uy8fM:1-.' );
define( 'SECURE_AUTH_SALT', '8:8O[qYk}B){9sxyIeRijtXvAaSg%obhWdG3tFj0$Hl0M^@L=roHUae!FG#ol.AE' );
define( 'LOGGED_IN_SALT',   'H5mL]@EQ<pSEqX9#6n?3U7Fq16[55ChNqyF8wqMFU]XSTl{C^vF89!7U>a)q>IFE' );
define( 'NONCE_SALT',       ' x9z7(lE&F4~m7N3[~CkQB-p+&=6V{&2[$?P>IFLY7d^kU[5S_4f@|//NeeA=n&i' );

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
