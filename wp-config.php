<?php
define('WP_AUTO_UPDATE_CORE', 'minor');// This setting is required to make sure that WordPress updates can be properly managed in WordPress Toolkit. Remove this line if this WordPress website is not managed by WordPress Toolkit anymore.

// Configuration common to all environments
include_once __DIR__ . '/wp-config.common.php';

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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db3malgqee8rzf' );

/** MySQL database username */
define( 'DB_USER', 'uwxxp4aipo6pt' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wkb5eixicgun' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '*LW~;/MlOuv4^CmM@FxG&y4kz{p;CSCFXF1$6<V[U-f{4&uCg~FTh) |)f6IAA<Z' );
define( 'SECURE_AUTH_KEY',   'AQwEYa++{xUHNMhp?e1x:`mq8YTj`kHIu8;PkZvgyW3)2*{PMTPFPGJe[w`kW ^=' );
define( 'LOGGED_IN_KEY',     'TsOk:Aey2s36k}Kr~`=NRBACzQh&6.v3_J/;sjL0wO(qc;;_z6^Y<h;!mp!FT)en' );
define( 'NONCE_KEY',         'Seaa<oNVc^v~`S]MZSqf/&eT?~IUv4S+aO=/n}/X$6S*vf1!D?_P-`r[t?O&/M<k' );
define( 'AUTH_SALT',         '9omx8mv*%7u>@-5<BxDN>(93Qp@l~&qQM_r<^H-.7A;2^7c?lBxs#DB:wFF3`elu' );
define( 'SECURE_AUTH_SALT',  '.e=x5pZ-05GAU9iC$Szp``Q/3s Q&OMYokJzq@q6x>V^R!;-4N6ee8^i(jMd$H@<' );
define( 'LOGGED_IN_SALT',    '1b)c_n@O#f@O7!it:ISJ!`3[-~,W58rS#UsbLAWaBA*KYCsB7Ov?Vp1S;^CJz<$1' );
define( 'NONCE_SALT',        'jB5Scgy6+K@)G)~5eNdGupUA8p/$=buy606O:P1-/!YBJc8J)U%(AJT6E x);Y25' );
define( 'WP_CACHE_KEY_SALT', '2Kwc%c@0(6L[/{fQ,*B2VAEJKfo63rTAL2=.5&!l!W-tmE87B2IIJTx$36$9o`gm' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpd73000_';

define( 'WP_MEMORY_LIMIT', '512M' );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
