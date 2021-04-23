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
define( 'DB_NAME', 'maxcosmeticos' );

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
define( 'AUTH_KEY',         'Av#?ZSs4#nxy44=!5madip 5nUJNq+NmUdxs@gl;1B`udHQL{vd9-4-L`.Wwxg-4' );
define( 'SECURE_AUTH_KEY',  ',jyy*0_/:--K*brx/U(/`,IvozmP&^ M{[(_JM:LGafg6,2Mg:#(PlFNF`Zl6l&M' );
define( 'LOGGED_IN_KEY',    'L!StI2Uakse_n7Vz |7#~4E]0<&%~VRs0[pv!kFi%_SIpdZV}z/ Mg6`2[Dm%CKA' );
define( 'NONCE_KEY',        'rvE w:X}0)~6QUv5)!.qw,H?M:Y|5BQo61SRo`lO6a&)jX4?4d@t0SZ?myv*$8p<' );
define( 'AUTH_SALT',        'hD+pclj.<+XfAD`*6GBcIZiST8QYn/#7vYYh+ ~{1-3etyK_.w^au}*]O];!=KmV' );
define( 'SECURE_AUTH_SALT', 't!3uV;Jj2Z:E&Con;WOkj%Z+wVU,xRL|2d V^`,e]:j40yAQFwCB~VWKns^mz>$O' );
define( 'LOGGED_IN_SALT',   'wkZ<t ;:gHrX]SWkuoK:BPW22%kX&u6VjM+n83LplQ_562xL]nJ^2QOERVZx&>%Z' );
define( 'NONCE_SALT',       ':Vw8a~U|7&F;jn-AUKs5__ #tKfnDgUf#Q{ZKAFb=9?|xUJ[6xNoK_PWO.^LS@H-' );

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
