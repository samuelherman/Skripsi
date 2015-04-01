<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>SIRM | Welcome</title>
		<link rel="stylesheet" href="css/foundation.css" />
		<script src="js/vendor/modernizr.js"></script>
		
		<script src="https://apis.google.com/js/client:platform.js" async defer></script>
	</head>
	<body>
		<div class="row">
		<h1>WELCOME to SIRM</h1>
		
		
		<?php
		session_start();
		require_once 'google-api-php-client-master/autoload.php';
		
		$client_id = '568951368854-ufmbistn0pcaq0khubafo1a133orfgve.apps.googleusercontent.com';
		$client_secret = '-cSZ-AUmeQ9PaWWry_IpiBBi';
		$redirect_uri = 'http://localhost/list.php';
		
		$client = new Google_Client();
		$client->setClientId($client_id);
		$client->setClientSecret($client_secret);
		$client->setRedirectUri($redirect_uri);
		
		$service = new Google_Service_Urlshortener($client);
		
		if (isset($_REQUEST['logout'])) {
			unset($_SESSION['access_token']);
		}
		
		if (isset($_GET['code'])) {
			$client->authenticate($_GET['code']);
			$_SESSION['access_token'] = $client->getAccessToken();
			$redirect = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
			header('Location: ' . filter_var($redirect, FILTER_SANITIZE_URL));
		}
		
		if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {
			$client->setAccessToken($_SESSION['access_token']);
		} else {
			$authUrl = $client->createAuthUrl();
		}
		
		if ($client->getAccessToken() && isset($_GET['url'])) {
			$url = new Google_Service_Urlshortener_Url();
			$url->longUrl = $_GET['url'];
			$short = $service->url->insert($url);
			$_SESSION['access_token'] = $client->getAccessToken();
		}

		?>
		<div class="box">
  <div class="request">
<?php 
if (isset($authUrl)) {
  echo "<a class='login' href='" . $authUrl . "'>Login with Google</a>";
} else {
  echo
    /*<form id="url" method="GET" action="{$_SERVER['PHP_SELF']}">
      <input name="url" class="url" type="text">
      <input type="submit" value="Shorten">
    </form>*/
    "<a class='logout' href='?logout'>Logout</a>";
}
?>
  </div>

  <div class="shortened">
<?php
if (isset($short)) {
  var_dump($short);
}
?>
  </div>
</div>
</div>
	</body>
</html>