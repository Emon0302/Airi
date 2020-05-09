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
define( 'DB_NAME', 'emon' );

/** MySQL database username */
define( 'DB_USER', 'emon' );

/** MySQL database password */
define( 'DB_PASSWORD', 'AWvVwkBMneuz1SHr' );

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
define( 'AUTH_KEY',         '!V&`3{&_<ThA74WFv=hMX@:dOEpi]BolfhLJT7K}c$vs[-1MfZ$(e9EKGIam5310' );
define( 'SECURE_AUTH_KEY',  'g:z[Zc4WP2PrHQ@(#*}pVRIU5O:>?Ni^blQ,V^gOzO$~z84-jnj,i]s9TbwD1By~' );
define( 'LOGGED_IN_KEY',    ';:6rq$L<G?acB/Nw4_l!ARge5(?xw)qOY./N-FRCxJG|@2!9aiok(]&-+>B>DGHP' );
define( 'NONCE_KEY',        '>vaC[~5K#<Ha|yGf_2Zog0z4w-j,PVtB7J7`0Q1R;gdhx r^7?%YYO;c1iM[u?2)' );
define( 'AUTH_SALT',        'L8tG!X8a,ZQ%|E6;RN:d=Oiqs#wV(j{F8Dee:4zDFw<{_4Sg;Qum^Q<8V.NpFmtu' );
define( 'SECURE_AUTH_SALT', 'WA$gi=DcPOH{?5ssM-!WnPqN~8s1P9PZs?grj[PyCq>>G.:JK_gt&{uqln>Ok(R-' );
define( 'LOGGED_IN_SALT',   'YY6N71YfRggT.aUEcXJANTDVo(dY[|qW<:Y~^ec4uGYvlqY6Cr$W9UNw3.gt59EY' );
define( 'NONCE_SALT',       '|#|Wx`S0FZN5UfF?a_BrmYZ0,iBO(UqPw3p8h>jr4d#m5(Lj)~f}jI]97ux08r7l' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ep_';

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
