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
define('DB_NAME', 'wp101ansible');

/** MySQL database username */
define('DB_USER', 'wp101ansible');

/** MySQL database password */
define('DB_PASSWORD', 'wp101dkansible!');

/** MySQL hostname */
define('DB_HOST', '10.100.51.14');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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

define('AUTH_KEY',         'g-r5&Izs<qR#}Pad|6h2yO`=E0s39hK$,$rgC`zt=Hn(iWxO`?tEc`pjV*RgO@&6');
define('SECURE_AUTH_KEY',  'Dwc&%U@96GfcYy=>9pc#6OO_iBFE/N_1ekVKPg!HCZQ,u zUl0(93 _Nl-4@`&D@');
define('LOGGED_IN_KEY',    '+IlV h)8 MT:2+%>U0F?ESqzdA5166#m<Hwg<PovX9UEWB;Y#KCN/hxwevQc30Xz');
define('NONCE_KEY',        '[r0(G%k=Qou=r9nCq0;%zir`}_hLMSP+b4 uKHPd@FfjY$o0PP[|Q8 DkM=y#6-i');
define('AUTH_SALT',        'cS>Y=k(}.lyu@IPK$?s={X_/.IR@+z ,(y1}-|FzX1m;A|w t0~K*kK{{F65K.B3');
define('SECURE_AUTH_SALT', 'qQ BEFgj9z%%]Ub3lccf_m<-VR^r;3zP=H%oB| ZK [o2L-pzs3S2SkwtcW>w_?j');
define('LOGGED_IN_SALT',   'n*F:kLAz:os3~@9iF`W-D3)-aI68%6l{vP4J{EK0eB]RE_7e_%]kYn%ot4)K]FmG');
define('NONCE_SALT',       'k447LCDZI?30}$<`C^}|;JLcLu@/ZFoCa8$m00pFN|00aEMWgK-@l%K3{i~RIDgz');

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
