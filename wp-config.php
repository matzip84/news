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
define( 'DB_NAME', 'news' );

/** MySQL database username */
define( 'DB_USER', 'news' );

/** MySQL database password */
define( 'DB_PASSWORD', '1234' );

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
define( 'AUTH_KEY',         'TN]:=iSNF0&msnFD}z6@Qdz9PG+BO-J S1ZUfQuiE00I+xfaw;q$ 0.cqjPbmV`l' );
define( 'SECURE_AUTH_KEY',  'G(t$UUq.U!!u9Md_i!D4h*AMx3V#yWdfk4.D6aD&4rG#Y71b1s7)x[(n3Gvt&Ax`' );
define( 'LOGGED_IN_KEY',    'J;l%6KLQxuDsH{?MZmDu5@9GW,lrCfKi}z+x8|2I,rzf(uKuC=VRSbj%IGQCwqqi' );
define( 'NONCE_KEY',        '9lvq}!_}kV0Q:C*a{yM7/f2QT?H1o3c5Kob/$oQlF3%DH3e^$MauB->>BF2|%J/L' );
define( 'AUTH_SALT',        'C@AN#/M+.)41K?+TTHa2__5X<ASo{L2,h!OZbJlC#gs8)?S9;-2VLzN|]zLAg1Rv' );
define( 'SECURE_AUTH_SALT', '}QOJIfAXszo.|?XmFLi2Mb^=O&((x^l|8mYPK0Zb/NTs6,Pi3op4m7Jtj_xVR?WZ' );
define( 'LOGGED_IN_SALT',   '|X~.oORJB&3<d-]mRr~0]BAqV#Zj}.#)G--*tVN@/3.*RYtG#`]N7rj)28QJ4n}F' );
define( 'NONCE_SALT',       '9S8mL%k0&n{l8jSt xDv%d}$R<Js#azU{(@{^,m6Zxe=;e^$&`~lV-?=9w&L1(1z' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'tb_';

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

//define("WP_USE_EXT_MYSQL", false);
