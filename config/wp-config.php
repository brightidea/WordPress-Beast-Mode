<?php
define( 'WP_CACHE', true );
/** Load dotenv package for env vars */
require __DIR__ . '/vendor/autoload.php';
$root_dir = dirname(__DIR__ . '/wordpress');
$dotenv = Dotenv\Dotenv::create($root_dir);
$dotenv->load();

/** The name of the database for WordPress */
define( 'DB_NAME', getenv('DB_NAME') );
/** MySQL database username */
define( 'DB_USER', getenv('DB_USER') );
/** MySQL database password */
define( 'DB_PASSWORD', getenv('DB_PASSWORD') );
/** MySQL hostname */
define( 'DB_HOST', getenv('DB_HOST') );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
define( 'AUTH_KEY',         getenv('AUTH_KEY'));
define( 'SECURE_AUTH_KEY',  getenv('SECURE_AUTH_KEY'));
define( 'LOGGED_IN_KEY',    getenv('LOGGED_IN_KEY'));
define( 'NONCE_KEY',        getenv('NONCE_KEY'));
define( 'AUTH_SALT',        getenv('AUTH_KEY'));
define( 'SECURE_AUTH_SALT', getenv('SECURE_AUTH_SALT'));
define( 'LOGGED_IN_SALT',   getenv('LOGGED_IN_SALT'));
define( 'NONCE_SALT',       getenv('NONCE_SALT'));

$table_prefix='wp_';

define( 'WP_DEBUG', true);

define( 'WP_HOME', 'https://' . $_SERVER['HTTP_HOST'] . '/' );
define( 'WP_SITEURL', 'https://' . $_SERVER['HTTP_HOST'] . '/' );

define( 'GRAPHQL_JWT_AUTH_SECRET_KEY',  getenv('GRAPHQL_JWT_SECRET_KEY') );
define( 'WP_GRAPHQL_GUTENBERG_SERVER_URL', getenv('WP_GRAPHQL_GUTENBERG_SERVER_URL'));

/* Disable Cron since WP Is Headless - Use external cron service if you need cron */
define('DISABLE_WP_CRON', 'true');

define( 'WP_ALLOW_MULTISITE', true );
/** Change Multisite to True and uncomment the lines below it for Multisite setup **/
// define( 'MULTISITE', false);
// define( 'SUBDOMAIN_INSTALL', getenv('SUBDOMAIN_INSTALL'));
// define( 'DOMAIN_CURRENT_SITE', getenv('DOMAIN_CURRENT_SITE'));
// define( 'PATH_CURRENT_SITE', '/');
// define( 'SITE_ID_CURRENT_SITE', 1);
// define( 'BLOG_ID_CURRENT_SITE', 1);
// define( 'SUNRISE', getenv('SUNRISE'));

/** Uncomment the lines below and add the S3 info for offloading assets to s3. Also activate s3uploads plugin in backend **/
define( 'S3_UPLOADS_BUCKET', getenv('S3_UPLOADS_BUCKET'));
define( 'S3_UPLOADS_KEY', getenv('S3_UPLOADS_KEY'));
define( 'S3_UPLOADS_SECRET', getenv('S3_UPLOADS_SECRET'));
define( 'S3_UPLOADS_REGION', getenv('S3_UPLOADS_REGION'));
define( 'S3_UPLOADS_BUCKET_URL', getenv('S3_UPLOADS_BUCKET_URL'));

if ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https' ) {
	$_SERVER['HTTPS'] = 'on';
}
/* That's all, stop editing! Happy blogging. */
/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

require_once( ABSPATH . 'wp-settings.php' );
