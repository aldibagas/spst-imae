<?php
session_start();
// Include Librari Google Client (API)
include_once 'lib/google-client/Google_Client.php';
include_once 'lib/google-client/contrib/Google_Oauth2Service.php';
$client_id = '631941004935-kk618004t04de88evvqfo6jaeijth6vk.apps.googleusercontent.com'; // Google client ID
$client_secret = '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'; // Google Client Secret
$redirect_url = 'http://localhost/login_php/google.php'; // Callback URL
// Call Google API
$gclient = new Google_Client();
$gclient->setApplicationName('Google Login'); // Set dengan Nama Aplikasi Kalian
$gclient->setClientId($client_id); // Set dengan Client ID
$gclient->setClientSecret($client_secret); // Set dengan Client Secret
$gclient->setRedirectUri($redirect_url); // Set URL untuk Redirect setelah berhasil login
$google_oauthv2 = new Google_Oauth2Service($gclient);
?>