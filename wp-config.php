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
define('DB_NAME', 'trimurty_goodcents');

/** MySQL database username */
define('DB_USER', 'trimurty_dev');

/** MySQL database password */
define('DB_PASSWORD', '6TP%8~m(QD');

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
define('AUTH_KEY',         'Y#X<.r,qCh;B@<Ds@(Wu#T4_HBiPV-(VY@Iv]f}.1Zzw%M!9(O/1:p$Q<YMh9j ;');
define('SECURE_AUTH_KEY',  '9d{!X57;5=qqbn7* @Lkt8<SIP_8IrWv(EQ=YMG.,Co$~ve131xWoNyj].HVj%{0');
define('LOGGED_IN_KEY',    'l.v:y5v{D?r.O#ax3s2Q<egnG]TwJzuUU]Ps/9ORS9,2/UG1>rB:$:2-1<PxskAl');
define('NONCE_KEY',        '`%(8`ALz$WmF:e{8]RhwWBD)-*]YktU^&d*Cj+;sB@G2y% m!|7bHf]pW)/!]!T[');
define('AUTH_SALT',        'IbzFek#etllGK0TeXF@3I~>|LIah0mjeG,])SIqAbq@!KI}>`+qm)[y1PUXt>YqZ');
define('SECURE_AUTH_SALT', '7StP=@[6O K4hLM ^cz)<mdxUk!m@-w%:Evjq>^/`i:Ap)+Bb-N{2{9=P<qw=me[');
define('LOGGED_IN_SALT',   '[h>+~!!bNQM<=T:/2KR8h1SVG0;!.VJwyrPc(;h:jF@RB3$q.t8Pc~pRBwQE[<J0');
define('NONCE_SALT',       'o8&]Km FjwJr5=kg_s$t`Z.w+t*QZ#DS@$8u3*7kLo!Nc-*,7)[wi}:mHvf=^L^~');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpgc_';

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
