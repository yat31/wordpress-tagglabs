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
define('DB_NAME', 'tagglab');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '}U^{2SC !iDS{=2$i#n}_Ycwt0q]rROaY:C3J +YO,J)5[NAo+M^TaP]US0O!X.U');
define('SECURE_AUTH_KEY',  'Gm1A]/eu& q$+=_Egw2-W[M)b?&fA%$ZFYk<vpDIa_M&M<+)Fdv0Y7K1f1Ds-O.e');
define('LOGGED_IN_KEY',    'WF:K+:E#7L/*6^pg1&)xf%SjWdNZ[_R[j]QIgu(hJ,V(C>Mjh%OLrS#7kd!s@v<5');
define('NONCE_KEY',        'K5pwgK|s%_HFL)@>|E9zT-nE74XPt@?nKLFbte;|,H<K>40$C6<X%Xc5V~-?Ph2&');
define('AUTH_SALT',        '(z^F>;m0.OP%dRw+nFfCkCiB1r6V.BC,V~Dsa`.mOX.>jN#`dTV?LR:O*<qt=iNc');
define('SECURE_AUTH_SALT', 'L(a{=8mAPKh{+2OFwb#F~}w#[pFHG1k6&G1dW]Jl{]#diPCft,]]wV{cx8/2nbX}');
define('LOGGED_IN_SALT',   'wF{J1aT!Z+<)]5LCpYZwB>kb.^JjCR0).Im{kV@><8.k4k/{Xxz,+(^bMs1O!r6 ');
define('NONCE_SALT',       '*}whrgA<IK9T,m6g2L)QyoX|sHt*gr]fp[wy`7_iKZb]%P2{uOvU}Z:4@;-ecF K');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
