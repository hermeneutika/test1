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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'michael' );

/** MySQL database password */
define( 'DB_PASSWORD', 'A7ndromeda!1' );

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
define( 'AUTH_KEY',         'p)P@dV!nY]vkgy@t.w:%@!e~TY>C]fG,3XTHOi(e|[HbgjU/h:oM2;{82*vdN,jR' );
define( 'SECURE_AUTH_KEY',  '+Er9K$Xk^.p0Mm.ct:24se*o/`XoL*u;,75~*Nw.UoV+9j{lP;NFf1oZ%k=umy2*' );
define( 'LOGGED_IN_KEY',    'Hxa$(ZzUK57/,5|;9aYKS&%PEhLUZffB)C8R[j,r,jD[Gi$.P+`FG-_jx|1/xTpw' );
define( 'NONCE_KEY',        'uZnil6Rv/4mt0hgR=Xg2KJ^Dy{tPtvCS(yFId}}owi.p3*MR-#y<H3T6sSVI%S.l' );
define( 'AUTH_SALT',        'GW!$;f9MttXRAUi;e!E|I089T1&9kdTpf$pW!hER5#c{*f7G[ta _9q:m&ZPOjjK' );
define( 'SECURE_AUTH_SALT', 'Vc2VZj/eSjwN8Q;93t((*v|+@W(Y9=5D]wT&$.;Sz#zc&50*4HFrdA0`o7`?Hdp{' );
define( 'LOGGED_IN_SALT',   'q5oM==`7M~H01e!33&R?{nRw,;HPFN]W~T+a@XtluF3Ko, |n~t%dRhqgm.<0;%i' );
define( 'NONCE_SALT',       '=oYEom?WtC}Wd%AnCNq f+J#gTLY?9yy{K&BYVka# ;M]Mep^yx;5_`.Q4xuS6t/' );

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
