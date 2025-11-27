<?php
/**
 * WordPress Configuration for Railway
 */

// Database settings from environment variables
define( 'DB_NAME', getenv('WORDPRESS_DB_NAME') ?: getenv('MYSQLDATABASE') ?: 'railway' );
define( 'DB_USER', getenv('WORDPRESS_DB_USER') ?: getenv('MYSQLUSER') ?: 'root' );
define( 'DB_PASSWORD', getenv('WORDPRESS_DB_PASSWORD') ?: getenv('MYSQLPASSWORD') ?: '' );
define( 'DB_HOST', getenv('WORDPRESS_DB_HOST') ?: getenv('MYSQLHOST') ?: 'mysql.railway.internal' );
define( 'DB_CHARSET', 'utf8mb4' );
define( 'DB_COLLATE', '' );

// Authentication keys and salts
define( 'AUTH_KEY',         'xK7!rZ9@mP2#nQ5$wE8^tY1&uI4*oA6(sD3)fG0-hJ' );
define( 'SECURE_AUTH_KEY',  'bN5$cM8^vX1&lK4*pO7(qW0)eR3-tY6@uI9#aS2!' );
define( 'LOGGED_IN_KEY',    'zL2^jH5&kG8*mF1(nD4)pC7-qB0@rA3#sE6$tW9%' );
define( 'NONCE_KEY',        'yU4&iO7*aS0(dF3)gH6-jK9@lZ2#xC5$vB8^nM1!' );
define( 'AUTH_SALT',        'wE1*rT4(yU7)iO0-pA3@sD6#fG9$hJ2^kL5&zX8!' );
define( 'SECURE_AUTH_SALT', 'qW8(eR1)tY4-uI7@oP0#aS3$dF6^gH9&jK2*lZ5!' );
define( 'LOGGED_IN_SALT',   'mN6)bV9-cX2@zL5#kJ8$hG1^fD4&sA7*wE0(rT3!' );
define( 'NONCE_SALT',       'pO3-iU6@yT9#rE2$wQ5^aS8&dF1*gH4(jK7)lZ0!' );

// Table prefix
$table_prefix = 'wp_';

// Debug mode
define( 'WP_DEBUG', false );

// HTTPS behind proxy
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
    $_SERVER['HTTPS'] = 'on';
}

// Site URLs - auto-detect from request
if (!defined('WP_HOME')) {
    $protocol = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') ? 'https://' : 'http://';
    $host = $_SERVER['HTTP_HOST'] ?? 'mycaowebsite-production.up.railway.app';
    define('WP_HOME', $protocol . $host);
    define('WP_SITEURL', $protocol . $host);
}

// Absolute path to the WordPress directory
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

// Sets up WordPress vars and included files
require_once ABSPATH . 'wp-settings.php';
