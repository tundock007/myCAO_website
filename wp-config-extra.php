<?php
// Fix for Railway reverse proxy / HTTPS
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
    $_SERVER['HTTPS'] = 'on';
}

// Define site URLs
define('WP_HOME', 'https://mycaowebsite-production.up.railway.app');
define('WP_SITEURL', 'https://mycaowebsite-production.up.railway.app');

// Fix for assets loading
define('FORCE_SSL_ADMIN', true);
