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
		<h1>WELCOME to SIRM <h4>(Sistem Informasi Riwayat Mahasiswa)</h4></h1>
		<hr/>
		
		<?php
		include_once "google-api-php-client-master/src/Google/Client.php";
		include_once "google-api-php-client-master/src/Google/Service/Oauth2.php";

		session_start();

		include_once "client.php";
		$client->setScopes(array('https://www.googleapis.com/auth/plus.login','email'));
		$plus = new Google_Service_Oauth2($client);

		if (isset($_REQUEST['logout'])) {
			unset($_SESSION['access_token']);
			header('Location: https://www.google.com/accounts/Logout?continue=https://appengine.google.com/_ah/logout?continue=http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']);
			//unset($_SESSION['access_token']);
			//session_destroy();
			//$client->revokeToken();
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

		} else {
			$authUrl = $client->createAuthUrl();
		}
		
		if (isset($authUrl)) {
		  echo "<a class='login' href='" . $authUrl . "'>Login with Google</a>";
		}
		
		?>
		</div>
	</body>
</html>