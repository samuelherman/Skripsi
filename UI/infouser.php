<?php
//require_once 'google-api-php-client-master/autoload.php';

include_once "google-api-php-client-master/src/Google/Client.php";
include_once "google-api-php-client-master/src/Google/Service/Oauth2.php";

session_start();

$client = new Google_Client();
$client->setApplicationName("Google+ PHP Starter Application");
// Visit https://code.google.com/apis/console to generate your
// oauth2_client_id, oauth2_client_secret, and to register your oauth2_redirect_uri.
$client->setClientId('568951368854-ufmbistn0pcaq0khubafo1a133orfgve.apps.googleusercontent.com');
$client->setClientSecret('-cSZ-AUmeQ9PaWWry_IpiBBi');
$client->setRedirectUri('http://localhost/infouser.php'); 
$client->setDeveloperKey('AIzaSyBa-AkBTh1dQbaJTt9u6fjtiJAn4Cd5odI');
$client->setScopes(array('https://www.googleapis.com/auth/userinfo.email','https://www.googleapis.com/auth/userinfo.profile'));
$plus = new Google_Service_Oauth2($client);

if (isset($_REQUEST['logout'])) {
  unset($_SESSION['access_token']);
}

if (isset($_GET['code'])) {
  $client->authenticate($_GET['code']);
  $_SESSION['access_token'] = $client->getAccessToken();
  header('Location: http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']);
}

if (isset($_SESSION['access_token'])) {
  $client->setAccessToken($_SESSION['access_token']);
}

if ($client->getAccessToken()) 
{
    $userinfo = $plus->userinfo;
    print_r($userinfo->get());

} else 
{
    $authUrl = $client->createAuthUrl();
}
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <link rel='stylesheet' href='style.css' />
</head>
<body>
<header><h1>Google+ Sample App</h1></header>
<div class="box">

<?php if(isset($personMarkup)): ?>
<div class="me"><?php print $personMarkup ?></div>
<?php endif ?>

<?php
  if(isset($authUrl)) {
    print "<a class='login' href='$authUrl'>Connect Me!</a>";
  } else {
   print "<a class='logout' href='?logout'>Logout</a>";
  }
?>
</div>
</body>
</html>