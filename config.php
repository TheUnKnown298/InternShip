
<?php

//config.php

//Include Google Client Library for PHP autoload file
require_once './google-api-php-client-2.5.0/vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('813658509730-5o3787612scrq6pmhd8tdi2ifvoea99e.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('rTm0IYwDduSP49rvEJNyj5W4');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/InternShip/index.php');

//
$google_client->addScope('email');

$google_client->addScope('profile');

//start session on web page
session_start();


?>