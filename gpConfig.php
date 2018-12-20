<?php
session_start();

//Include Google client library 
include_once 'src/Google_Client.php';
include_once 'src/contrib/Google_Oauth2Service.php';

/*
 * Configuration and setup Google API
 */
$clientId = '404196495647-d9krt8295l8du9iglfv9ut3nantflh59.apps.googleusercontent.com'; //Google client ID
$clientSecret = 'DewsOA5YMWC3xpeLhabU44hy'; //Google client secret
$redirectURL = 'http://127.0.0.1/googlelogin'; //Callback URL

//Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Login to CodexWorld.com');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>